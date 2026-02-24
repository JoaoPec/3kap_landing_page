<?php
require_once dirname(__DIR__) . '/config.php';
require_once dirname(__DIR__) . '/lib/blog.php';
require_once __DIR__ . '/auth.php';
adminRequireLogin();

$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
$author = $id ? authorGetById($id) : null;
if ($id && !$author) {
    header('Location: ' . adminUrl('authors.php'));
    exit;
}
$isEdit = (bool)$author;
$pageTitle = $isEdit ? 'Editar autor' : 'Novo autor';
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
                <span class="text-slate-500 text-sm"><?= $isEdit ? 'Editar autor' : 'Novo autor' ?></span>
            </div>
            <a href="<?= adminUrl('authors.php') ?>" class="text-sm text-slate-500 hover:text-slate-700">← Autores</a>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <form method="post" action="<?= adminUrl('save-author.php') ?>" enctype="multipart/form-data" class="space-y-8">
            <?php if ($id): ?><input type="hidden" name="id" value="<?= (int)$id ?>"><?php endif; ?>

            <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-slate-700 mb-2">Nome *</label>
                    <input type="text" name="name" id="name" required
                        value="<?= htmlspecialchars($author['name'] ?? '') ?>"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition"
                        placeholder="Ex: Tiago Falcão">
                </div>
                <div>
                    <label for="photo_file" class="block text-sm font-medium text-slate-700 mb-2">Foto do autor</label>
                    <?php
                    $currentPhoto = $author['photo_url'] ?? '';
                    $currentPhotoUrl = $currentPhoto ? (strpos($currentPhoto, 'http') === 0 ? $currentPhoto : asset($currentPhoto)) : '';
                    if ($currentPhotoUrl):
                    ?>
                    <div class="mb-3 flex items-center gap-4">
                        <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-slate-200 bg-slate-100">
                            <img src="<?= htmlspecialchars($currentPhotoUrl) ?>" alt="Foto atual" class="w-full h-full object-cover">
                        </div>
                        <span class="text-sm text-slate-500">Foto atual. Envie outra para substituir.</span>
                    </div>
                    <?php endif; ?>
                    <input type="file" name="photo_file" id="photo_file" accept="image/jpeg,image/png,image/gif,image/webp"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-secondary/10 file:text-secondary file:font-medium">
                    <p class="mt-1 text-xs text-slate-500">JPG, PNG, GIF ou WebP. Recomendado: imagem quadrada para melhor exibição no card.</p>
                </div>
                <div>
                    <label for="mini_bio" class="block text-sm font-medium text-slate-700 mb-2">Mini currículo</label>
                    <textarea name="mini_bio" id="mini_bio" rows="4"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition resize-y"
                        placeholder="Resumo curto da experiência do autor (aparece no card do artigo)."><?= htmlspecialchars($author['mini_bio'] ?? '') ?></textarea>
                </div>
                <div class="grid sm:grid-cols-2 gap-6">
                    <div>
                        <label for="linkedin_url" class="block text-sm font-medium text-slate-700 mb-2">LinkedIn</label>
                        <input type="url" name="linkedin_url" id="linkedin_url"
                            value="<?= htmlspecialchars($author['linkedin_url'] ?? '') ?>"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition"
                            placeholder="https://www.linkedin.com/in/...">
                    </div>
                    <div>
                        <label for="whatsapp_number" class="block text-sm font-medium text-slate-700 mb-2">WhatsApp</label>
                        <input type="text" name="whatsapp_number" id="whatsapp_number"
                            value="<?= htmlspecialchars($author['whatsapp_number'] ?? '') ?>"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition"
                            placeholder="5571999999999 (só números, DDI+DDD+tel)">
                        <p class="mt-1 text-xs text-slate-500">Ex: 5571999153592</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-3">
                <button type="submit" class="px-6 py-3 rounded-xl font-semibold text-white bg-gradient-to-r from-secondary to-secondary-light hover:opacity-90 transition shadow-lg shadow-secondary/25">
                    <?= $isEdit ? 'Salvar alterações' : 'Cadastrar autor' ?>
                </button>
                <a href="<?= adminUrl('authors.php') ?>" class="px-6 py-3 rounded-xl font-semibold text-slate-600 bg-white border border-slate-200 hover:bg-slate-50 transition">Cancelar</a>
            </div>
        </form>
    </main>
</body>
</html>
