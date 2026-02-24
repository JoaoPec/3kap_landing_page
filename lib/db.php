<?php
/**
 * Conexão SQLite e inicialização da tabela de posts do blog
 */
if (!defined('BASE_PATH')) require dirname(__DIR__) . '/config.php';

function getDb(): PDO {
    static $pdo = null;
    if ($pdo === null) {
        if (!is_dir(DB_DIR)) mkdir(DB_DIR, 0755, true);
        $pdo = new PDO('sqlite:' . DB_PATH, null, null, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        initBlogTable($pdo);
        initAuthorsTable($pdo);
    }
    return $pdo;
}

function initAuthorsTable(PDO $pdo): void {
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS blog_authors (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            photo_url TEXT,
            mini_bio TEXT,
            linkedin_url TEXT,
            whatsapp_number TEXT,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME
        )
    ");
    try {
        $pdo->exec('ALTER TABLE blog_posts ADD COLUMN author_id INTEGER REFERENCES blog_authors(id)');
    } catch (PDOException $e) {
        if (strpos($e->getMessage(), 'duplicate column name') === false) throw $e;
    }
}

function initBlogTable(PDO $pdo): void {
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS blog_posts (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            title TEXT NOT NULL,
            slug TEXT NOT NULL UNIQUE,
            excerpt TEXT,
            content TEXT NOT NULL,
            category TEXT DEFAULT 'geral',
            image_url TEXT,
            published INTEGER DEFAULT 1,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME,
            video_url TEXT,
            author_name TEXT,
            author_photo_url TEXT,
            author_mini_bio TEXT,
            author_linkedin_url TEXT,
            author_whatsapp_number TEXT
        )
    ");
    // Migrações para bancos já existentes
    try {
        $pdo->exec('ALTER TABLE blog_posts ADD COLUMN video_url TEXT');
    } catch (PDOException $e) {
        if (strpos($e->getMessage(), 'duplicate column name') === false) throw $e;
    }
    try {
        $pdo->exec('ALTER TABLE blog_posts ADD COLUMN author_name TEXT');
    } catch (PDOException $e) {
        if (strpos($e->getMessage(), 'duplicate column name') === false) throw $e;
    }
    try {
        $pdo->exec('ALTER TABLE blog_posts ADD COLUMN author_photo_url TEXT');
    } catch (PDOException $e) {
        if (strpos($e->getMessage(), 'duplicate column name') === false) throw $e;
    }
    try {
        $pdo->exec('ALTER TABLE blog_posts ADD COLUMN author_mini_bio TEXT');
    } catch (PDOException $e) {
        if (strpos($e->getMessage(), 'duplicate column name') === false) throw $e;
    }
    try {
        $pdo->exec('ALTER TABLE blog_posts ADD COLUMN author_linkedin_url TEXT');
    } catch (PDOException $e) {
        if (strpos($e->getMessage(), 'duplicate column name') === false) throw $e;
    }
    try {
        $pdo->exec('ALTER TABLE blog_posts ADD COLUMN author_whatsapp_number TEXT');
    } catch (PDOException $e) {
        if (strpos($e->getMessage(), 'duplicate column name') === false) throw $e;
    }
}
