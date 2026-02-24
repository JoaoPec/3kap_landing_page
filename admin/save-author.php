<?php
require_once dirname(__DIR__) . '/config.php';
require_once dirname(__DIR__) . '/lib/blog.php';
require_once __DIR__ . '/auth.php';
adminRequireLogin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . adminUrl('authors.php'));
    exit;
}

$id = isset($_POST['id']) ? (int)$_POST['id'] : null;
$oldAuthor = $id ? authorGetById($id) : null;

$photoUrl = null;
$upload = $_FILES['photo_file'] ?? null;
if ($upload && $upload['error'] === UPLOAD_ERR_OK) {
    $allowed = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $upload['tmp_name']);
    finfo_close($finfo);
    if (in_array($mime, $allowed, true)) {
        $ext = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/gif' => 'gif', 'image/webp' => 'webp'][$mime];
        $dir = BASE_PATH . 'assets' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'uploads';
        if (!is_dir($dir)) mkdir($dir, 0755, true);
        $name = 'autor-' . ($id ?: 'new') . '-' . time() . '.' . $ext;
        $path = $dir . DIRECTORY_SEPARATOR . $name;
        if (move_uploaded_file($upload['tmp_name'], $path)) {
            $photoUrl = 'assets/img/uploads/' . $name;
        }
    }
}
if ($photoUrl === null && $oldAuthor && !empty($oldAuthor['photo_url'])) {
    $photoUrl = $oldAuthor['photo_url'];
}

$data = [
    'name' => trim($_POST['name'] ?? ''),
    'photo_url' => $photoUrl,
    'mini_bio' => trim($_POST['mini_bio'] ?? '') ?: null,
    'linkedin_url' => trim($_POST['linkedin_url'] ?? '') ?: null,
    'whatsapp_number' => trim($_POST['whatsapp_number'] ?? '') ?: null,
];

if ($id) {
    if ($oldAuthor) {
        authorUpdate($id, $data);
    }
} else {
    if ($data['name'] !== '') {
        authorCreate($data);
    }
}

header('Location: ' . adminUrl('authors.php?saved=1'));
exit;
