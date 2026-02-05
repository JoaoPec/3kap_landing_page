<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/lib/blog.php';

$pageTitle = 'Artigos | Auditoria, RH e TI - 3KAP';
$pageDescription = 'Artigos e insights sobre auditoria, tecnologia, RH e compliance. 3KAP.';
$pageKeywords = 'artigos 3KAP, auditoria, TI, RH, compliance';
$extraHead = '<style>.blog-card:hover{transform:translateY(-8px);box-shadow:0 24px 48px -12px rgba(58,58,64,0.25);}.cat-btn.active{background:#4a9b96;color:white;}</style>';
require __DIR__ . '/inc/head.php';
require __DIR__ . '/inc/header.php';

$posts = blogGetAll(true);
$categories = blogGetCategories(true);
if (empty($categories)) {
    $categories = ['geral', 'Auditoria', 'TI', 'RH', 'Compliance'];
}
$filter = $_GET['cat'] ?? '';
if ($filter !== '') {
    $posts = array_filter($posts, fn($p) => strcasecmp($p['category'], $filter) === 0);
}
?>
    <!-- Topo Artigos -->
    <section class="relative pt-28 pb-10 overflow-hidden">
        <a href="<?= url('index.php') ?>" class="absolute top-28 left-4 sm:left-6 lg:left-8 z-20 flex items-center gap-2 text-sm font-medium text-white/90 hover:text-white transition-colors" title="Voltar"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg><span>Voltar</span></a>
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-primary-dark via-primary to-primary-light"></div>
        <div class="absolute top-1/4 right-0 w-[400px] h-[400px] bg-secondary/20 rounded-full blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-2xl mx-auto">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight font-display">Artigos</h1>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                <aside class="lg:w-64 flex-shrink-0">
                    <div class="lg:sticky lg:top-28">
                        <h2 class="text-sm font-bold text-slate-500 uppercase tracking-wider mb-4">Categorias</h2>
                        <nav class="space-y-1">
                            <a href="<?= url('blog.php') ?>" class="cat-btn block w-full text-left px-4 py-2.5 rounded-lg text-sm font-medium <?= !$filter ? 'active text-white' : 'text-slate-600 hover:bg-slate-100 hover:text-primary' ?> transition-colors">Todos</a>
                            <?php foreach (array_filter($categories, fn($c) => strcasecmp($c, 'geral') !== 0) as $cat): ?>
                            <a href="<?= url('blog.php?cat=' . urlencode($cat)) ?>" class="cat-btn block w-full text-left px-4 py-2.5 rounded-lg text-sm font-medium <?= $filter === $cat ? 'active text-white' : 'text-slate-600 hover:bg-slate-100 hover:text-primary' ?> transition-colors"><?= htmlspecialchars($cat) ?></a>
                            <?php endforeach; ?>
                        </nav>
                        <div class="mt-8 pt-8 border-t border-slate-200">
                            <p class="text-xs text-slate-400">Artigos por especialistas 3KAP. Dúvidas? Fale conosco.</p>
                            <a href="<?= url('index.php') ?>#contato" class="mt-2 inline-block text-sm font-medium text-secondary hover:underline">Contato</a>
                        </div>
                    </div>
                </aside>
                <div class="flex-1 min-w-0">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="blog-grid">
                        <?php foreach ($posts as $post): ?>
                        <article class="blog-card bg-white rounded-2xl overflow-hidden flex flex-col border border-slate-100 transition-transform duration-300">
                            <a href="<?= url('blog-post.php?slug=' . urlencode($post['slug'])) ?>" class="block aspect-video overflow-hidden">
                                <img src="<?= htmlspecialchars(blogImageUrl($post['image_url'] ?? '') ?: 'https://images.unsplash.com/photo-1454165833767-027ffea10c4b?w=600&auto=format&fit=crop') ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            </a>
                            <div class="p-6 flex-grow flex flex-col">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold uppercase"><?= htmlspecialchars($post['category']) ?></span>
                                    <span class="text-xs text-slate-400"><?= date('d/m/Y', strtotime($post['created_at'])) ?></span>
                                </div>
                                <h2 class="text-xl font-bold text-slate-800 mb-3 font-display"><a href="<?= url('blog-post.php?slug=' . urlencode($post['slug'])) ?>" class="hover:text-secondary transition-colors"><?= htmlspecialchars($post['title']) ?></a></h2>
                                <p class="text-slate-600 text-sm mb-6 flex-grow"><?= htmlspecialchars($post['excerpt'] ?: '') ?></p>
                                <a href="<?= url('blog-post.php?slug=' . urlencode($post['slug'])) ?>" class="text-secondary font-semibold text-sm hover:underline inline-flex items-center gap-1">Ler artigo completo <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                            </div>
                        </article>
                        <?php endforeach; ?>
                        <?php if (empty($posts)): ?>
                        <p class="md:col-span-2 lg:col-span-3 text-slate-500 text-center py-12">Nenhum artigo<?= $filter ? ' nesta categoria' : '' ?> ainda.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require __DIR__ . '/inc/footer.php'; ?>
