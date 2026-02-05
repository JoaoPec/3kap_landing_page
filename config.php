<?php
/**
 * Configuração geral do site 3KAP
 * Ajuste BASE_URL se o site estiver em subpasta (ex: '/site_institucional')
 */
session_start();

define('BASE_PATH', __DIR__ . DIRECTORY_SEPARATOR);
define('BASE_URL', ''); // ex: '' ou '/site_institucional'

// SQLite
define('DB_PATH', BASE_PATH . 'db' . DIRECTORY_SEPARATOR . 'blog.sqlite');
define('DB_DIR', BASE_PATH . 'db');

// Senha do admin do blog (hash gerado com password_hash('sua_senha', PASSWORD_DEFAULT))
// Para gerar novo hash: php -r "echo password_hash('SUA_SENHA', PASSWORD_DEFAULT);"
define('ADMIN_PASSWORD_HASH', '$2y$12$uMIkU63bhG36tb/DNxbYqeACurllrUCMkX7aKJWrbTerIHvyvnBqa'); // default: 3kap.2026

// Helpers: sempre caminho a partir da raiz do site (funciona em qualquer subpasta)
// url('blog.php') => /blog.php  |  url('servicos/auditoria.php') => /servicos/auditoria.php
function url($path = '') {
    $base = rtrim(BASE_URL ?: '', '/');
    $prefix = $base ?: '';
    if (!$path) return $prefix ? $prefix . '/' : '/';
    return $prefix . '/' . ltrim($path, '/');
}
function asset($path) {
    $base = rtrim(BASE_URL ?: '', '/');
    $prefix = $base ?: '';
    return $prefix . '/' . ltrim($path, '/');
}

/** URL da imagem do blog: se for caminho local (assets/...) usa asset(), senão retorna a URL. */
function blogImageUrl($url) {
    if (empty($url)) return '';
    return (strpos($url, 'http') === 0) ? $url : asset($url);
}

/** Extrai o ID do vídeo do YouTube a partir de URL (youtube.com/watch?v=ID, youtu.be/ID). Retorna null se inválido. */
function youtubeVideoId($url) {
    if (empty($url) || !is_string($url)) return null;
    $url = trim($url);
    if (preg_match('~(?:youtube\.com/watch\?v=|youtu\.be/|youtube\.com/embed/)([a-zA-Z0-9_-]{11})~', $url, $m)) return $m[1];
    return null;
}
