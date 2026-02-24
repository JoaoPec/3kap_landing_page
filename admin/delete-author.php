<?php
require_once dirname(__DIR__) . '/config.php';
require_once dirname(__DIR__) . '/lib/blog.php';
require_once __DIR__ . '/auth.php';
adminRequireLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
if ($id && authorGetById($id)) {
    authorDelete($id);
}
header('Location: ' . adminUrl('authors.php?deleted=1'));
exit;
