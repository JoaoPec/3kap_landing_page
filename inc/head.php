<?php
if (!isset($pageTitle)) $pageTitle = '3KAP - Auditoria | Contábil, RH e TI';
if (!isset($pageDescription)) $pageDescription = 'Auditoria contábil independente, consultoria em RH e TI. Atendimento em todo o Brasil. 3KAP.';
if (!isset($pageKeywords)) $pageKeywords = 'auditoria contábil, auditoria independente, consultoria RH, consultoria TI, 3KAP';
if (!isset($pageCanonical)) $pageCanonical = '';
if (!isset($extraHead)) $extraHead = '';
$canonicalUrl = 'https://3kap.com.br/' . ($pageCanonical === false ? '' : ($pageCanonical ?: ltrim(str_replace('\\', '/', $_SERVER['PHP_SELF'] ?? 'index.php'), '/')));
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
    <meta name="robots" content="index, follow">
    <?php if ($pageCanonical !== false): ?>
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">
    <?php endif; ?>
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
    <meta property="og:site_name" content="3KAP">
    <link rel="icon" href="<?= asset('favicon.svg') ?>" type="image/svg+xml">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { DEFAULT: '#575756', light: '#6b6b6a', dark: '#454544' },
                        secondary: { DEFAULT: '#56b5af', light: '#6bc4be', dark: '#45a09a' }
                    },
                    fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'], display: ['Sora', 'system-ui', 'sans-serif'] }
                }
            }
        }
    </script>
    <style>
        .gradient-text { background: linear-gradient(135deg, #575756, #56b5af); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .nav-link::after { content: ''; position: absolute; left: 0; bottom: -4px; width: 0; height: 2px; background: #56b5af; transition: width 0.3s ease; }
        .nav-link:hover::after { width: 100%; }
        html { scroll-behavior: smooth; }
        .service-card, .blog-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .service-card:hover, .blog-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px -12px rgba(86, 181, 175, 0.2); }
        @keyframes fadeUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .animate-fade-up { animation: fadeUp 0.6s ease-out forwards; }
        .animation-delay-100 { animation-delay: 100ms; }
        .animation-delay-200 { animation-delay: 200ms; }
        .animation-delay-300 { animation-delay: 300ms; }
        @keyframes pulse-ring { 0% { transform: scale(0.8); opacity: 0.8; } 100% { transform: scale(1.4); opacity: 0; } }
        .whatsapp-pulse::before { content: ''; position: absolute; inset: -4px; border-radius: 50%; background: #25D366; animation: pulse-ring 1.5s ease-out infinite; }
        .stat-gradient { background: linear-gradient(135deg, #575756, #56b5af); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    </style>
    <?= $extraHead ?>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">
