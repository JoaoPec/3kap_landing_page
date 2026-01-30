<?php
require_once dirname(__DIR__) . '/config.php';
require_once dirname(__DIR__) . '/lib/blog.php';
require_once __DIR__ . '/auth.php';
adminRequireLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id) blogDelete($id);
header('Location: ' . adminUrl('index.php?deleted=1'));
exit;
