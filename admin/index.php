<?php
require_once dirname(__DIR__) . '/config.php';
require_once dirname(__DIR__) . '/lib/blog.php';
require_once __DIR__ . '/auth.php';
adminRequireLogin();

$posts = blogGetAll(false); // todos, inclusive rascunhos
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts do Blog · Admin 3KAP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: { DEFAULT: '#575756', dark: '#454544' }, secondary: { DEFAULT: '#56b5af', light: '#6bc4be' } },
                    fontFamily: { sans: ['Inter', 'sans-serif'], display: ['Sora', 'sans-serif'] }
                }
            }
        }
    </script>
    <style>
        .gradient-text { background: linear-gradient(135deg, #575756, #56b5af); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    </style>
</head>
<body class="min-h-screen bg-slate-100 font-sans">
    <header class="bg-white border-b border-slate-200 sticky top-0 z-10">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
            <div class="flex items-center gap-6">
                <a href="<?= adminUrl('index.php') ?>" class="text-xl font-bold font-display text-primary">3<span class="gradient-text">kap</span> <span class="text-slate-400 font-normal text-sm">Admin</span></a>
                <nav class="flex gap-4">
                    <a href="<?= adminUrl('editor.php') ?>" class="text-sm font-medium text-secondary hover:text-secondary/80">Novo post</a>
                    <a href="<?= url('blog.php') ?>" target="_blank" class="text-sm font-medium text-slate-600 hover:text-primary">Ver blog</a>
                </nav>
            </div>
            <a href="<?= adminUrl('logout.php') ?>" class="text-sm text-slate-500 hover:text-slate-700">Sair</a>
        </div>
    </header>

    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-2xl font-bold font-display text-slate-800">Posts do blog</h1>
            <a href="<?= adminUrl('editor.php') ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl font-semibold text-white bg-gradient-to-r from-secondary to-secondary-light hover:opacity-90 transition shadow-lg shadow-secondary/25">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                Novo post
            </a>
        </div>

        <?php if (isset($_GET['saved'])): ?>
        <div class="mb-6 p-4 rounded-xl bg-green-50 text-green-800 text-sm font-medium">Post salvo com sucesso.</div>
        <?php endif; ?>
        <?php if (isset($_GET['deleted'])): ?>
        <div class="mb-6 p-4 rounded-xl bg-amber-50 text-amber-800 text-sm font-medium">Post excluído.</div>
        <?php endif; ?>

        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
            <?php if (empty($posts)): ?>
            <div class="p-12 text-center text-slate-500">
                <p class="mb-4">Nenhum post ainda.</p>
                <a href="<?= adminUrl('editor.php') ?>" class="inline-flex items-center gap-2 text-secondary font-semibold hover:underline">Criar o primeiro post →</a>
            </div>
            <?php else: ?>
            <ul class="divide-y divide-slate-100">
                <?php foreach ($posts as $p):
                    $published = (int)($p['published'] ?? 0);
                    $imgUrl = !empty($p['image_url']) ? blogImageUrl($p['image_url']) : '';
                ?>
                <li class="flex flex-col sm:flex-row sm:items-center gap-4 p-5 hover:bg-slate-50/50 transition">
                    <div class="shrink-0 w-20 h-20 rounded-xl overflow-hidden bg-slate-100 flex items-center justify-center">
                        <?php if ($imgUrl): ?>
                        <img src="<?= htmlspecialchars($imgUrl) ?>" alt="" class="w-full h-full object-cover">
                        <?php else: ?>
                        <svg class="w-8 h-8 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14"/></svg>
                        <?php endif; ?>
                    </div>
                    <div class="min-w-0 flex-1">
                        <h2 class="font-semibold text-slate-800 truncate"><?= htmlspecialchars($p['title']) ?></h2>
                        <p class="text-sm text-slate-500 mt-0.5"><?= htmlspecialchars($p['slug']) ?> · <?= date('d/m/Y H:i', strtotime($p['created_at'])) ?></p>
                        <span class="inline-block mt-2 px-2 py-0.5 rounded text-xs font-medium <?= $published ? 'bg-green-100 text-green-800' : 'bg-slate-100 text-slate-600' ?>"><?= $published ? 'Publicado' : 'Rascunho' ?></span>
                    </div>
                    <div class="flex gap-2 shrink-0">
                        <a href="<?= url('blog-post.php?slug=' . urlencode($p['slug'])) ?>" target="_blank" class="px-3 py-2 rounded-lg text-sm font-medium text-slate-600 hover:bg-slate-100 transition">Ver</a>
                        <a href="<?= adminUrl('editor.php?id=' . (int)$p['id']) ?>" class="px-3 py-2 rounded-lg text-sm font-medium text-secondary hover:bg-secondary/10 transition">Editar</a>
                        <a href="<?= adminUrl('delete-post.php?id=' . (int)$p['id']) ?>" onclick="return confirm('Excluir este post?');" class="px-3 py-2 rounded-lg text-sm font-medium text-red-600 hover:bg-red-50 transition">Excluir</a>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </main>
</body>
</html>
