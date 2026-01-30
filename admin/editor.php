<?php
require_once dirname(__DIR__) . '/config.php';
require_once dirname(__DIR__) . '/lib/blog.php';
require_once __DIR__ . '/auth.php';
adminRequireLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
$post = $id ? blogGetById($id) : null;
if ($id && !$post) {
    header('Location: ' . adminUrl('index.php'));
    exit;
}
$isEdit = (bool)$post;
$pageTitle = $isEdit ? 'Editar post' : 'Novo post';

$fixedCategories = ['geral', 'Auditoria', 'TI', 'RH', 'Compliance'];
$postCategory = $post['category'] ?? 'geral';
$isCustomCategory = !in_array($postCategory, $fixedCategories, true);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> · Admin 3KAP</title>
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
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
            <div class="flex items-center gap-6">
                <a href="<?= adminUrl('index.php') ?>" class="text-xl font-bold font-display text-primary">3<span class="gradient-text">kap</span> <span class="text-slate-400 font-normal text-sm">Admin</span></a>
                <span class="text-slate-500 text-sm"><?= $isEdit ? 'Editar post' : 'Novo post' ?></span>
            </div>
            <a href="<?= adminUrl('logout.php') ?>" class="text-sm text-slate-500 hover:text-slate-700">Sair</a>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <form method="post" action="<?= adminUrl('save-post.php') ?>" enctype="multipart/form-data" class="space-y-8">
            <?php if ($id): ?><input type="hidden" name="id" value="<?= (int)$id ?>"><?php endif; ?>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 space-y-6">
                <div>
                    <label for="title" class="block text-sm font-medium text-slate-700 mb-2">Título *</label>
                    <input type="text" name="title" id="title" required
                        value="<?= htmlspecialchars($post['title'] ?? '') ?>"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition"
                        placeholder="Ex: O futuro da Auditoria Digital">
                </div>
                <div>
                    <label for="slug" class="block text-sm font-medium text-slate-700 mb-2">Slug (URL)</label>
                    <input type="text" name="slug" id="slug"
                        value="<?= htmlspecialchars($post['slug'] ?? '') ?>"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition"
                        placeholder="deixe em branco para gerar automaticamente">
                </div>
                <div>
                    <label for="excerpt" class="block text-sm font-medium text-slate-700 mb-2">Resumo / Descrição curta</label>
                    <textarea name="excerpt" id="excerpt" rows="2" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition resize-none" placeholder="Aparece na listagem e no SEO"><?= htmlspecialchars($post['excerpt'] ?? '') ?></textarea>
                </div>
                <div>
                    <label for="category" class="block text-sm font-medium text-slate-700 mb-2">Categoria</label>
                    <select name="category" id="category" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition">
                        <?php foreach ($fixedCategories as $cat): ?>
                        <option value="<?= htmlspecialchars($cat) ?>" <?= (!$isCustomCategory && $postCategory === $cat ? 'selected' : '') ?>><?= htmlspecialchars($cat) ?></option>
                        <?php endforeach; ?>
                        <option value="__custom__" <?= $isCustomCategory ? 'selected' : '' ?>>Outra (digite abaixo)</option>
                    </select>
                    <div id="category-custom-wrap" class="mt-3 <?= $isCustomCategory ? '' : 'hidden' ?>">
                        <label for="category_custom" class="block text-sm font-medium text-slate-600 mb-1">Nome da categoria personalizada</label>
                        <input type="text" name="category_custom" id="category_custom"
                            value="<?= $isCustomCategory ? htmlspecialchars($postCategory) : '' ?>"
                            placeholder="Ex: LGPD, Governança, Treinamentos"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Imagem de capa (opcional)</label>
                    <p class="text-xs text-slate-500 mb-2">Informe a URL da imagem ou envie um arquivo (apenas imagens).</p>
                    <input type="url" name="image_url" id="image_url"
                        value="<?= htmlspecialchars((!empty($post['image_url']) && strpos($post['image_url'], 'http') === 0) ? $post['image_url'] : '') ?>"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition mb-3"
                        placeholder="https://... (ou envie um arquivo abaixo)">
                    <label for="image_file" class="block text-sm font-medium text-slate-600 mb-1">Enviar arquivo de imagem</label>
                    <input type="file" name="image_file" id="image_file" accept="image/*"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-secondary/10 file:text-secondary file:font-medium">
                    <p class="mt-1 text-xs text-slate-500">Apenas imagens (JPG, PNG, GIF, WebP). Se enviar arquivo, ele terá prioridade sobre a URL.</p>
                    <?php if (!empty($post['image_url']) && strpos($post['image_url'], 'http') !== 0): ?>
                    <p class="mt-1 text-xs text-slate-500">Capa atual: arquivo enviado anteriormente.</p>
                    <?php endif; ?>
                </div>
                <div>
                    <label for="content" class="block text-sm font-medium text-slate-700 mb-2">Conteúdo (HTML permitido) *</label>
                    <textarea name="content" id="content" required rows="16" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition font-mono text-sm resize-y" placeholder="<p>Parágrafos...</p>"><?= htmlspecialchars($post['content'] ?? '') ?></textarea>
                    <p class="mt-1 text-xs text-slate-500">Use tags HTML: &lt;p&gt;, &lt;h3&gt;, &lt;ul&gt;, &lt;li&gt;, &lt;strong&gt;, &lt;a&gt;, etc.</p>
                </div>
                <div class="flex items-center gap-4">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="published" value="1" <?= ($post['published'] ?? 1) ? 'checked' : '' ?> class="w-4 h-4 rounded border-slate-300 text-secondary focus:ring-secondary">
                        <span class="text-sm font-medium text-slate-700">Publicado (visível no blog)</span>
                    </label>
                </div>
            </div>

            <div class="flex flex-wrap gap-3">
                <button type="submit" class="px-6 py-3 rounded-xl font-semibold text-white bg-gradient-to-r from-secondary to-secondary-light hover:opacity-90 transition shadow-lg shadow-secondary/25">
                    <?= $isEdit ? 'Salvar alterações' : 'Publicar post' ?>
                </button>
                <a href="<?= adminUrl('index.php') ?>" class="px-6 py-3 rounded-xl font-semibold text-slate-600 bg-white border border-slate-200 hover:bg-slate-50 transition">Cancelar</a>
            </div>
        </form>
    </main>
    <script>
        (function() {
            var sel = document.getElementById('category');
            var wrap = document.getElementById('category-custom-wrap');
            var input = document.getElementById('category_custom');
            function toggle() {
                var isCustom = sel.value === '__custom__';
                wrap.classList.toggle('hidden', !isCustom);
                input.required = isCustom;
            }
            sel.addEventListener('change', toggle);
            toggle();
        })();
    </script>
</body>
</html>
