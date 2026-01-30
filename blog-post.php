<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/lib/blog.php';

$slug = $_GET['slug'] ?? '';
if (!$slug) {
    header('Location: ' . url('blog.php'));
    exit;
}
$post = blogGetBySlug($slug);
if (!$post) {
    header('HTTP/1.0 404 Not Found');
    $pageTitle = 'Artigo não encontrado';
    require __DIR__ . '/inc/head.php';
    require __DIR__ . '/inc/header.php';
    echo '<section class="pt-28 pb-24"><div class="max-w-3xl mx-auto px-4 text-center"><h1 class="text-2xl font-bold text-slate-800 mb-4">Artigo não encontrado</h1><a href="' . url('blog.php') . '" class="text-secondary font-semibold hover:underline">Voltar ao Blog</a></div></section>';
    require __DIR__ . '/inc/footer.php';
    exit;
}

$pageTitle = $post['title'] . ' | Blog 3KAP';
$pageDescription = $post['excerpt'] ?: mb_substr(strip_tags($post['content']), 0, 160) . '...';
$pageKeywords = $post['category'] . ', blog 3KAP';
$extraHead = '<style>.prose p{margin-bottom:1.25em;line-height:1.75;}.prose h3{font-size:1.25rem;font-weight:700;margin-top:2em;margin-bottom:0.75em;color:#1e293b;}</style>';
require __DIR__ . '/inc/head.php';
require __DIR__ . '/inc/header.php';
?>
    <article class="pt-28 pb-24">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="<?= url('blog.php') ?>" class="inline-flex items-center gap-2 text-sm font-medium text-slate-600 hover:text-secondary transition-colors mb-8">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Voltar ao Blog
            </a>
            <header class="mb-10">
                <div class="flex flex-wrap items-center gap-3 mb-4">
                    <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold uppercase"><?= htmlspecialchars($post['category']) ?></span>
                    <time class="text-sm text-slate-400" datetime="<?= date('Y-m-d', strtotime($post['created_at'])) ?>"><?= date('d \d\e F \d\e Y', strtotime($post['created_at'])) ?></time>
                </div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 leading-tight font-display mb-4"><?= htmlspecialchars($post['title']) ?></h1>
                <?php if ($post['excerpt']): ?>
                <p class="text-xl text-slate-600"><?= htmlspecialchars($post['excerpt']) ?></p>
                <?php endif; ?>
            </header>
            <?php if (!empty($post['image_url'])): ?>
            <div class="aspect-video rounded-2xl overflow-hidden bg-slate-200 mb-12">
                <img src="<?= htmlspecialchars(blogImageUrl($post['image_url'])) ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="w-full h-full object-cover">
            </div>
            <?php endif; ?>
            <div class="prose prose-slate max-w-none text-slate-700">
                <?= $post['content'] ?>
            </div>
            <?php
            $shareUrl = (isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'https') . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . url('blog-post.php?slug=' . urlencode($post['slug']));
            $linkedInShare = 'https://www.linkedin.com/sharing/share-offsite/?url=' . rawurlencode($shareUrl);
            ?>
            <div class="mt-12 pt-8 border-t border-slate-200">
                <p class="text-sm font-medium text-slate-600 mb-3">Compartilhar este artigo</p>
                <a href="<?= htmlspecialchars($linkedInShare) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-[#0A66C2] text-white text-sm font-semibold hover:bg-[#004182] transition-colors" title="Compartilhar no LinkedIn">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    Compartilhar no LinkedIn
                </a>
            </div>
        </div>
    </article>
<?php require __DIR__ . '/inc/footer.php'; ?>
