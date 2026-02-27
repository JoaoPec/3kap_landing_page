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
    echo '<section class="pt-28 pb-24"><div class="max-w-3xl mx-auto px-4 text-center"><h1 class="text-2xl font-bold text-slate-800 mb-4">Artigo não encontrado</h1><a href="' . url('blog.php') . '" class="text-secondary font-semibold hover:underline">Voltar aos Artigos</a></div></section>';
    require __DIR__ . '/inc/footer.php';
    exit;
}

$pageTitle = $post['title'] . ' | Artigos 3KAP';
$pageDescription = $post['excerpt'] ?: mb_substr(strip_tags($post['content']), 0, 160) . '...';
$pageKeywords = $post['category'] . ', artigos 3KAP';
$extraHead = '<style>.prose p{margin-bottom:1.25em;line-height:1.75;}.prose h3{font-size:1.25rem;font-weight:700;margin-top:2em;margin-bottom:0.75em;color:#1e293b;}</style>';
require __DIR__ . '/inc/head.php';
require __DIR__ . '/inc/header.php';
?>
    <article class="pt-28 pb-24">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="<?= url('blog.php') ?>" class="inline-flex items-center gap-2 text-sm font-medium text-slate-600 hover:text-secondary transition-colors mb-8">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Voltar aos Artigos
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
            <?php
            $author = null;
            if (!empty($post['author_id'])) {
                $author = authorGetById((int)$post['author_id']);
            }
            if (!$author) {
                if (!empty($post['author_name']) || !empty($post['author_mini_bio']) || !empty($post['author_photo_url']) || !empty($post['author_linkedin_url']) || !empty($post['author_whatsapp_number'])) {
                    $author = [
                        'name' => $post['author_name'] ?? '',
                        'photo_url' => $post['author_photo_url'] ?? null,
                        'mini_bio' => $post['author_mini_bio'] ?? null,
                        'linkedin_url' => $post['author_linkedin_url'] ?? null,
                        'whatsapp_number' => $post['author_whatsapp_number'] ?? null,
                    ];
                }
            }
            if ($author && (!empty($author['name']) || !empty($author['mini_bio']) || !empty($author['photo_url']) || !empty($author['linkedin_url']) || !empty($author['whatsapp_number']))):
                $authorPhoto = !empty($author['photo_url']) ? blogImageUrl($author['photo_url']) : null;
                $authorLinkedIn = $author['linkedin_url'] ?? null;
                $whatsNumberRaw = $author['whatsapp_number'] ?? '';
                $whatsNumberDigits = preg_replace('/\D+/', '', (string)$whatsNumberRaw);
                $whatsUrl = $whatsNumberDigits
                    ? 'https://wa.me/' . $whatsNumberDigits . '?text=' . rawurlencode('Olá, acabei de ler seu artigo no site da 3KAP e gostaria de conversar.')
                    : null;
            ?>
            <?php endif; ?>

            <div class="lg:grid lg:grid-cols-[minmax(0,2.6fr)_minmax(0,1.4fr)] lg:gap-10 items-start">
                <div>
                    <?php if (isset($author) && $author && (!empty($author['name']) || !empty($author['mini_bio']) || !empty($author['photo_url']) || !empty($author['linkedin_url']) || !empty($author['whatsapp_number'])) && ($authorPhoto || !empty($author['name']) || !empty($author['mini_bio']))): ?>
                    <section class="mb-10 lg:hidden">
                        <div class="flex flex-col sm:flex-row gap-5 items-start bg-slate-50 border border-slate-200 rounded-2xl p-5">
                            <?php if ($authorPhoto): ?>
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 rounded-full overflow-hidden border border-slate-200">
                                    <img src="<?= htmlspecialchars($authorPhoto) ?>" alt="<?= htmlspecialchars($author['name'] ?? 'Autor do artigo') ?>" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="flex-1 min-w-0">
                                <?php if (!empty($author['name'])): ?>
                                <p class="text-sm font-semibold text-slate-800 mb-1">Por <?= htmlspecialchars($author['name']) ?></p>
                                <?php endif; ?>
                                <?php if (!empty($author['mini_bio'])): ?>
                                <p class="text-sm text-slate-600 mb-3"><?= nl2br(htmlspecialchars($author['mini_bio'])) ?></p>
                                <?php endif; ?>
                                <div class="flex flex-wrap gap-2">
                                    <?php if (!empty($authorLinkedIn)): ?>
                                    <a href="<?= htmlspecialchars($authorLinkedIn) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-[#0A66C2] text-white text-xs font-semibold hover:bg-[#004182] transition-colors">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                        LinkedIn
                                    </a>
                                    <?php endif; ?>
                                    <?php if (!empty($whatsUrl)): ?>
                                    <a href="<?= htmlspecialchars($whatsUrl) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-[#25D366] text-white text-xs font-semibold hover:bg-[#128C7E] transition-colors">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.52 3.48A11.8 11.8 0 0012.04 0C5.52 0 .3 5.22.3 11.73c0 2.07.54 4.08 1.57 5.87L0 24l6.55-1.71a11.78 11.78 0 005.49 1.4h.01c6.52 0 11.74-5.22 11.74-11.73 0-3.13-1.22-6.07-3.47-8.28zM12.04 21.3h-.01a9.7 9.7 0 01-4.96-1.36l-.36-.21-3.89 1.02 1.04-3.79-.25-.39a9.26 9.26 0 01-1.42-4.94c0-5.13 4.18-9.3 9.32-9.3 2.49 0 4.83.97 6.59 2.71a9.19 9.19 0 012.73 6.58c0 5.14-4.18 9.3-9.32 9.3zm5.1-7.11c-.28-.14-1.65-.81-1.9-.9-.25-.09-.44-.14-.63.14-.19.28-.72.9-.88 1.08-.16.18-.33.2-.61.07-.28-.14-1.18-.43-2.25-1.37-.83-.74-1.39-1.66-1.55-1.94-.16-.28-.02-.43.12-.57.12-.12.28-.31.42-.47.14-.16.19-.28.28-.47.09-.19.05-.35-.02-.5-.07-.14-.63-1.5-.86-2.06-.23-.55-.47-.48-.63-.49l-.54-.01c-.19 0-.5.07-.76.35-.26.28-1 1-1 2.43 0 1.43 1.03 2.81 1.17 3 .14.19 2.03 3.25 4.93 4.55.69.3 1.23.48 1.65.61.69.22 1.31.19 1.8.11.55-.08 1.65-.68 1.89-1.33.23-.65.23-1.21.16-1.33-.07-.12-.26-.19-.54-.33z"/></svg>
                                        WhatsApp
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php endif; ?>
                    <?php if (!empty($post['image_url'])): ?>
                    <div class="aspect-video rounded-2xl overflow-hidden bg-slate-200 mb-12">
                        <img src="<?= htmlspecialchars(blogImageUrl($post['image_url'])) ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="w-full h-full object-cover">
                    </div>
                    <?php endif; ?>
                    <?php
                    $youtubeId = !empty($post['video_url']) ? youtubeVideoId($post['video_url']) : null;
                    if ($youtubeId):
                    ?>
                    <div class="aspect-video rounded-2xl overflow-hidden bg-slate-900 mb-12">
                        <iframe src="https://www.youtube.com/embed/<?= htmlspecialchars($youtubeId) ?>?rel=0" title="Vídeo do artigo" class="w-full h-full" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <?php endif; ?>
                    <div class="prose prose-slate max-w-none text-slate-700">
                        <?php
                        // Conteúdo é HTML armazenado no banco; exibir sem escape para renderizar tags (p, h3, ul, strong, etc.)
                        $content = $post['content'] ?? '';
                        if (strpos($content, '&lt;') !== false || strpos($content, '&gt;') !== false) {
                            $content = html_entity_decode($content, ENT_QUOTES | ENT_HTML5, 'UTF-8');
                        }
                        echo $content;
                        ?>
                    </div>
                </div>

                <?php if (isset($author) && $author && (!empty($author['name']) || !empty($author['mini_bio']) || !empty($author['photo_url']) || !empty($author['linkedin_url']) || !empty($author['whatsapp_number'])) && ($authorPhoto || !empty($author['name']) || !empty($author['mini_bio']))): ?>
                <aside class="hidden lg:block">
                    <section class="mb-10 sticky top-28">
                        <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 flex flex-col items-start gap-4">
                            <?php if ($authorPhoto): ?>
                            <div class="w-24 h-24 rounded-full overflow-hidden border border-slate-200">
                                <img src="<?= htmlspecialchars($authorPhoto) ?>" alt="<?= htmlspecialchars($author['name'] ?? 'Autor do artigo') ?>" class="w-full h-full object-cover">
                            </div>
                            <?php endif; ?>
                            <div class="w-full">
                                <?php if (!empty($author['name'])): ?>
                                <p class="text-sm font-semibold text-slate-800 mb-1">Por <?= htmlspecialchars($author['name']) ?></p>
                                <?php endif; ?>
                                <?php if (!empty($author['mini_bio'])): ?>
                                <p class="text-sm text-slate-600 mb-4"><?= nl2br(htmlspecialchars($author['mini_bio'])) ?></p>
                                <?php endif; ?>
                                <div class="flex flex-wrap gap-2">
                                    <?php if (!empty($authorLinkedIn)): ?>
                                    <a href="<?= htmlspecialchars($authorLinkedIn) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-[#0A66C2] text-white text-xs font-semibold hover:bg-[#004182] transition-colors">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                        LinkedIn
                                    </a>
                                    <?php endif; ?>
                                    <?php if (!empty($whatsUrl)): ?>
                                    <a href="<?= htmlspecialchars($whatsUrl) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-[#25D366] text-white text-xs font-semibold hover:bg-[#128C7E] transition-colors">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.52 3.48A11.8 11.8 0 0012.04 0C5.52 0 .3 5.22.3 11.73c0 2.07.54 4.08 1.57 5.87L0 24l6.55-1.71a11.78 11.78 0 005.49 1.4h.01c6.52 0 11.74-5.22 11.74-11.73 0-3.13-1.22-6.07-3.47-8.28zM12.04 21.3h-.01a9.7 9.7 0 01-4.96-1.36l-.36-.21-3.89 1.02 1.04-3.79-.25-.39a9.26 9.26 0 01-1.42-4.94c0-5.13 4.18-9.3 9.32-9.3 2.49 0 4.83.97 6.59 2.71a9.19 9.19 0 012.73 6.58c0 5.14-4.18 9.3-9.32 9.3zm5.1-7.11c-.28-.14-1.65-.81-1.9-.9-.25-.09-.44-.14-.63.14-.19.28-.72.9-.88 1.08-.16.18-.33.2-.61.07-.28-.14-1.18-.43-2.25-1.37-.83-.74-1.39-1.66-1.55-1.94-.16-.28-.02-.43.12-.57.12-.12.28-.31.42-.47.14-.16.19-.28.28-.47.09-.19.05-.35-.02-.5-.07-.14-.63-1.5-.86-2.06-.23-.55-.47-.48-.63-.49l-.54-.01c-.19 0-.5.07-.76.35-.26.28-1 1-1 2.43 0 1.43 1.03 2.81 1.17 3 .14.19 2.03 3.25 4.93 4.55.69.3 1.23.48 1.65.61.69.22 1.31.19 1.8.11.55-.08 1.65-.68 1.89-1.33.23-.65.23-1.21.16-1.33-.07-.12-.26-.19-.54-.33z"/></svg>
                                        WhatsApp
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </aside>
                <?php endif; ?>
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
