<?php
/**
 * Funções do blog (CRUD com SQLite)
 */
require_once __DIR__ . '/db.php';

function blogGetAll(bool $publishedOnly = true): array {
    $pdo = getDb();
    $sql = "SELECT id, title, slug, excerpt, category, image_url, video_url, created_at, published FROM blog_posts";
    if ($publishedOnly) $sql .= " WHERE published = 1";
    $sql .= " ORDER BY created_at DESC";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}

function blogGetBySlug(string $slug): ?array {
    $pdo = getDb();
    $stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE slug = ? AND published = 1 LIMIT 1");
    $stmt->execute([$slug]);
    $row = $stmt->fetch();
    return $row ?: null;
}

function blogGetById(int $id): ?array {
    $pdo = getDb();
    $stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE id = ? LIMIT 1");
    $stmt->execute([$id]);
    $row = $stmt->fetch();
    return $row ?: null;
}

function blogSlugExists(string $slug, ?int $excludeId = null): bool {
    $pdo = getDb();
    if ($excludeId) {
        $stmt = $pdo->prepare("SELECT 1 FROM blog_posts WHERE slug = ? AND id != ? LIMIT 1");
        $stmt->execute([$slug, $excludeId]);
    } else {
        $stmt = $pdo->prepare("SELECT 1 FROM blog_posts WHERE slug = ? LIMIT 1");
        $stmt->execute([$slug]);
    }
    return (bool) $stmt->fetch();
}

function slugify(string $text): string {
    $text = preg_replace('~[^\pL\pN\s-]~u', '', mb_strtolower($text));
    $text = preg_replace('~[\s-]+~', '-', $text);
    return trim($text, '-') ?: 'post';
}

function blogCreate(array $data): int {
    $pdo = getDb();
    $slug = $data['slug'] ?? slugify($data['title']);
    $i = 0;
    while (blogSlugExists($slug)) $slug = slugify($data['title']) . '-' . (++$i);
    $authorId = isset($data['author_id']) && $data['author_id'] !== '' ? (int)$data['author_id'] : null;
    if ($authorId <= 0) $authorId = null;
    $stmt = $pdo->prepare("
        INSERT INTO blog_posts (
            title,
            slug,
            excerpt,
            content,
            category,
            image_url,
            video_url,
            author_id,
            published,
            updated_at
        )
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, datetime('now'))
    ");
    $stmt->execute([
        $data['title'],
        $slug,
        $data['excerpt'] ?? '',
        $data['content'] ?? '',
        $data['category'] ?? 'geral',
        $data['image_url'] ?? null,
        !empty($data['video_url']) ? trim($data['video_url']) : null,
        $authorId,
        isset($data['published']) ? (int)(bool)$data['published'] : 1,
    ]);
    return (int) $pdo->lastInsertId();
}

function blogUpdate(int $id, array $data): bool {
    $old = blogGetById($id);
    if (!$old) return false;
    $title = $data['title'] ?? $old['title'];
    $slug = $data['slug'] ?? $old['slug'];
    $i = 0;
    while (blogSlugExists($slug, $id)) $slug = slugify($title) . '-' . (++$i);
    $pdo = getDb();
    $authorId = isset($data['author_id']) && $data['author_id'] !== '' ? (int)$data['author_id'] : null;
    if ($authorId <= 0) $authorId = null;
    $stmt = $pdo->prepare("
        UPDATE blog_posts
        SET
            title = ?,
            slug = ?,
            excerpt = ?,
            content = ?,
            category = ?,
            image_url = ?,
            video_url = ?,
            author_id = ?,
            published = ?,
            updated_at = datetime('now')
        WHERE id = ?
    ");
    return $stmt->execute([
        $title,
        $slug,
        $data['excerpt'] ?? $old['excerpt'],
        $data['content'] ?? $old['content'],
        $data['category'] ?? $old['category'],
        $data['image_url'] ?? $old['image_url'],
        array_key_exists('video_url', $data) ? (!empty($data['video_url']) ? trim($data['video_url']) : null) : ($old['video_url'] ?? null),
        $authorId,
        isset($data['published']) ? (int)(bool)$data['published'] : (int)$old['published'],
        $id,
    ]);
}

function blogDelete(int $id): bool {
    $pdo = getDb();
    $stmt = $pdo->prepare("DELETE FROM blog_posts WHERE id = ?");
    return $stmt->execute([$id]);
}

function blogGetRecent(int $limit = 3): array {
    $pdo = getDb();
    $stmt = $pdo->prepare("SELECT id, title, slug, excerpt, category, image_url, video_url, created_at FROM blog_posts WHERE published = 1 ORDER BY created_at DESC LIMIT ?");
    $stmt->execute([$limit]);
    return $stmt->fetchAll();
}

/** Retorna lista de categorias usadas nos posts, sem duplicatas, ordenada. */
function blogGetCategories(bool $publishedOnly = false): array {
    $pdo = getDb();
    $sql = "SELECT DISTINCT category FROM blog_posts WHERE category != ''";
    if ($publishedOnly) $sql .= " AND published = 1";
    $sql .= " ORDER BY category";
    $stmt = $pdo->query($sql);
    return array_column($stmt->fetchAll(), 'category');
}

// ---------- Autores ----------

function authorGetAll(): array {
    $pdo = getDb();
    $stmt = $pdo->query("SELECT * FROM blog_authors ORDER BY name");
    return $stmt->fetchAll();
}

function authorGetById(?int $id): ?array {
    if ($id === null || $id <= 0) return null;
    $pdo = getDb();
    $stmt = $pdo->prepare("SELECT * FROM blog_authors WHERE id = ? LIMIT 1");
    $stmt->execute([$id]);
    $row = $stmt->fetch();
    return $row ?: null;
}

function authorCreate(array $data): int {
    $pdo = getDb();
    $stmt = $pdo->prepare("
        INSERT INTO blog_authors (name, photo_url, mini_bio, linkedin_url, whatsapp_number, updated_at)
        VALUES (?, ?, ?, ?, ?, datetime('now'))
    ");
    $stmt->execute([
        trim($data['name'] ?? ''),
        trim($data['photo_url'] ?? '') ?: null,
        trim($data['mini_bio'] ?? '') ?: null,
        trim($data['linkedin_url'] ?? '') ?: null,
        trim($data['whatsapp_number'] ?? '') ?: null,
    ]);
    return (int) $pdo->lastInsertId();
}

function authorUpdate(int $id, array $data): bool {
    $old = authorGetById($id);
    if (!$old) return false;
    $pdo = getDb();
    $stmt = $pdo->prepare("
        UPDATE blog_authors
        SET name = ?, photo_url = ?, mini_bio = ?, linkedin_url = ?, whatsapp_number = ?, updated_at = datetime('now')
        WHERE id = ?
    ");
    return $stmt->execute([
        trim($data['name'] ?? $old['name']),
        trim($data['photo_url'] ?? $old['photo_url'] ?? '') ?: null,
        trim($data['mini_bio'] ?? $old['mini_bio'] ?? '') ?: null,
        trim($data['linkedin_url'] ?? $old['linkedin_url'] ?? '') ?: null,
        trim($data['whatsapp_number'] ?? $old['whatsapp_number'] ?? '') ?: null,
        $id,
    ]);
}

function authorDelete(int $id): bool {
    $pdo = getDb();
    $pdo->prepare("UPDATE blog_posts SET author_id = NULL WHERE author_id = ?")->execute([$id]);
    $stmt = $pdo->prepare("DELETE FROM blog_authors WHERE id = ?");
    return $stmt->execute([$id]);
}
