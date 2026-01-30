<?php
require_once dirname(__DIR__) . '/config.php';
require_once dirname(__DIR__) . '/lib/blog.php';
require_once __DIR__ . '/auth.php';
adminRequireLogin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . adminUrl('index.php'));
    exit;
}

$id = isset($_POST['id']) ? (int)$_POST['id'] : null;
$category = trim($_POST['category'] ?? 'geral');
if ($category === '__custom__') {
    $category = trim($_POST['category_custom'] ?? '') ?: 'geral';
}
$category = mb_substr($category, 0, 100);

$imageUrl = null;
$upload = $_FILES['image_file'] ?? null;
if ($upload && $upload['error'] === UPLOAD_ERR_OK) {
    $allowed = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $upload['tmp_name']);
    finfo_close($finfo);
    if (in_array($mime, $allowed, true)) {
        $ext = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/gif' => 'gif', 'image/webp' => 'webp'][$mime];
        $dir = BASE_PATH . 'assets' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'uploads';
        if (!is_dir($dir)) mkdir($dir, 0755, true);
        $name = 'capa-' . ($id ?: 'new') . '-' . time() . '.' . $ext;
        $path = $dir . DIRECTORY_SEPARATOR . $name;
        if (move_uploaded_file($upload['tmp_name'], $path)) {
            $imageUrl = 'assets/img/uploads/' . $name;
        }
    }
}
if ($imageUrl === null) {
    $imageUrl = trim($_POST['image_url'] ?? '') ?: null;
}

$data = [
    'title' => trim($_POST['title'] ?? ''),
    'slug' => trim($_POST['slug'] ?? '') ?: null,
    'excerpt' => trim($_POST['excerpt'] ?? ''),
    'content' => $_POST['content'] ?? '',
    'category' => $category,
    'image_url' => $imageUrl,
    'published' => isset($_POST['published']),
];

if ($id) {
    blogUpdate($id, $data);
    header('Location: ' . adminUrl('index.php?saved=1'));
} else {
    blogCreate($data);
    header('Location: ' . adminUrl('index.php?saved=1'));
}
exit;
