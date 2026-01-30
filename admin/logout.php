<?php
require_once dirname(__DIR__) . '/config.php';
$_SESSION['admin_logged'] = false;
session_destroy();
header('Location: login.php');
exit;
