<?php
require_once dirname(__DIR__) . '/config.php';
require_once dirname(__DIR__) . '/admin/auth.php';

if (!empty($_SESSION['admin_logged'])) {
    header('Location: ' . adminUrl('index.php'));
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senha = $_POST['senha'] ?? '';
    if (password_verify($senha, ADMIN_PASSWORD_HASH)) {
        $_SESSION['admin_logged'] = true;
        header('Location: ' . adminUrl('index.php'));
        exit;
    }
    $error = 'Senha incorreta. Tente novamente.';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar · Admin Blog 3KAP</title>
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
<body class="min-h-screen bg-slate-100 flex items-center justify-center p-4 font-sans">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden">
            <div class="bg-gradient-to-br from-primary-dark via-primary to-primary p-8 text-center">
                <h1 class="text-2xl font-bold font-display text-white">3<span class="gradient-text" style="-webkit-text-fill-color:white;opacity:.9">kap</span></h1>
                <p class="text-white/80 text-sm mt-2">Área do editor do blog</p>
            </div>
            <form method="post" class="p-8 space-y-6">
                <?php if ($error): ?>
                <div class="p-3 rounded-lg bg-red-50 text-red-700 text-sm"><?= htmlspecialchars($error) ?></div>
                <?php endif; ?>
                <div>
                    <label for="senha" class="block text-sm font-medium text-slate-700 mb-2">Senha</label>
                    <input type="password" name="senha" id="senha" required autofocus
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition"
                        placeholder="Digite a senha de acesso">
                </div>
                <button type="submit" class="w-full py-3.5 rounded-xl font-semibold text-white bg-gradient-to-r from-secondary to-secondary-light hover:opacity-90 transition shadow-lg shadow-secondary/25">
                    Entrar
                </button>
            </form>
        </div>
        <p class="text-center text-slate-500 text-sm mt-6"><a href="<?= url('index.php') ?>" class="hover:text-secondary transition">← Voltar ao site</a></p>
    </div>
</body>
</html>
