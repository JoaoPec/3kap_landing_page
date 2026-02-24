<?php
require_once dirname(__DIR__) . '/config.php';
require_once dirname(__DIR__) . '/lib/blog.php';
require_once __DIR__ . '/auth.php';
adminRequireLogin();

$authors = authorGetAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores do blog · Admin 3KAP</title>
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
                    <a href="<?= adminUrl('index.php') ?>" class="text-sm font-medium text-slate-600 hover:text-primary">Posts</a>
                    <a href="<?= adminUrl('authors.php') ?>" class="text-sm font-medium text-secondary hover:text-secondary/80">Autores</a>
                    <a href="<?= url('blog.php') ?>" target="_blank" class="text-sm font-medium text-slate-600 hover:text-primary">Ver blog</a>
                </nav>
            </div>
            <a href="<?= adminUrl('logout.php') ?>" class="text-sm text-slate-500 hover:text-slate-700">Sair</a>
        </div>
    </header>

    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-2xl font-bold font-display text-slate-800">Autores do blog</h1>
            <a href="<?= adminUrl('author-editor.php') ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl font-semibold text-white bg-gradient-to-r from-secondary to-secondary-light hover:opacity-90 transition shadow-lg shadow-secondary/25">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                Novo autor
            </a>
        </div>

        <?php if (isset($_GET['saved'])): ?>
        <div class="mb-6 p-4 rounded-xl bg-green-50 text-green-800 text-sm font-medium">Autor salvo com sucesso.</div>
        <?php endif; ?>
        <?php if (isset($_GET['deleted'])): ?>
        <div class="mb-6 p-4 rounded-xl bg-amber-50 text-amber-800 text-sm font-medium">Autor excluído.</div>
        <?php endif; ?>

        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
            <?php if (empty($authors)): ?>
            <div class="p-12 text-center text-slate-500">
                <p class="mb-4">Nenhum autor cadastrado.</p>
                <p class="text-sm mb-4">Cadastre autores para poder escolher quem escreveu cada artigo ao editar um post.</p>
                <a href="<?= adminUrl('author-editor.php') ?>" class="inline-flex items-center gap-2 text-secondary font-semibold hover:underline">Cadastrar o primeiro autor →</a>
            </div>
            <?php else: ?>
            <ul class="divide-y divide-slate-100">
                <?php foreach ($authors as $a):
                    $photoUrl = !empty($a['photo_url']) ? (strpos($a['photo_url'], 'http') === 0 ? $a['photo_url'] : asset($a['photo_url'])) : '';
                ?>
                <li class="flex flex-col sm:flex-row sm:items-center gap-4 p-5 hover:bg-slate-50/50 transition">
                    <div class="shrink-0 w-14 h-14 rounded-full overflow-hidden bg-slate-100 flex items-center justify-center">
                        <?php if ($photoUrl): ?>
                        <img src="<?= htmlspecialchars($photoUrl) ?>" alt="" class="w-full h-full object-cover">
                        <?php else: ?>
                        <span class="text-xl font-bold text-slate-400"><?= mb_substr($a['name'], 0, 1) ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="min-w-0 flex-1">
                        <h2 class="font-semibold text-slate-800"><?= htmlspecialchars($a['name']) ?></h2>
                        <?php if (!empty($a['mini_bio'])): ?>
                        <p class="text-sm text-slate-500 mt-0.5 line-clamp-2"><?= htmlspecialchars(mb_substr($a['mini_bio'], 0, 120)) ?><?= mb_strlen($a['mini_bio']) > 120 ? '…' : '' ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="flex gap-2 shrink-0">
                        <a href="<?= adminUrl('author-editor.php?id=' . (int)$a['id']) ?>" class="px-3 py-2 rounded-lg text-sm font-medium text-secondary hover:bg-secondary/10 transition">Editar</a>
                        <a href="<?= adminUrl('delete-author.php?id=' . (int)$a['id']) ?>" onclick="return confirm('Excluir este autor? Os posts que o usam ficarão sem autor.');" class="px-3 py-2 rounded-lg text-sm font-medium text-red-600 hover:bg-red-50 transition">Excluir</a>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </main>
</body>
</html>
