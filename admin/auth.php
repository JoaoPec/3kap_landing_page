<?php
/**
 * Proteção da área admin: redireciona para login se não autenticado
 */
if (!defined('BASE_PATH')) require dirname(__DIR__) . '/config.php';

function adminRequireLogin(): void {
    if (empty($_SESSION['admin_logged'])) {
        header('Location: ' . adminUrl('login.php'));
        exit;
    }
}

function adminUrl(string $path = ''): string {
    $base = rtrim(BASE_URL ?: '', '/');
    $admin = ($base === '') ? '/admin' : $base . '/admin';
    return $path ? $admin . '/' . ltrim($path, '/') : $admin;
}

function baseUrl(string $path = ''): string {
    return url($path);
}
