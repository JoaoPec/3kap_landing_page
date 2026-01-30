<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Landing Pages | 3KAP';
$pageDescription = 'Desenvolvimento de landing pages para campanhas, captação de leads e conversão. 3KAP.';
$pageKeywords = 'landing pages, conversão, leads, 3KAP';
require __DIR__ . '/../inc/head.php';
require __DIR__ . '/../inc/header.php';
?>
<section class="relative pt-32 pb-20 overflow-hidden">
        <a href="<?= url('index.php') ?>" class="absolute top-32 left-4 sm:left-6 lg:left-8 z-20 flex items-center gap-2 text-sm font-medium text-white/90 hover:text-white transition-colors" title="Voltar à página inicial"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg><span>Voltar</span></a>
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-primary-dark via-primary to-primary-light"></div>
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-secondary/20 rounded-full blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium mb-6 border border-white/20">Web</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6 font-display">Desenvolvimento de <span class="text-secondary-light">Landing Pages</span></h1>
                <p class="text-lg md:text-xl text-white/80 mb-8">Páginas de conversão para campanhas, eventos, produtos e captação de leads. Design focado em resultado.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20desenvolvimento%20de%20Landing%20Pages" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-lg font-semibold text-primary bg-white hover:bg-slate-100 transition-all shadow-lg"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>Falar no WhatsApp</a>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-sm font-semibold mb-4">Nossos serviços</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-6 font-display">O que <span class="gradient-text">oferecemos</span></h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 font-display">Landing page sob medida</h3>
                    <p class="text-slate-600 text-sm">Página única focada em conversão, com copy e layout alinhados ao objetivo.</p>
                </div>
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 font-display">Formulários e captação</h3>
                    <p class="text-slate-600 text-sm">Formulários otimizados, integração com CRM e automação de leads.</p>
                </div>
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 font-display">Campanhas e eventos</h3>
                    <p class="text-slate-600 text-sm">Landing para lançamentos, webinars, workshops e ações de marketing.</p>
                </div>
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 font-display">Responsivo e rápido</h3>
                    <p class="text-slate-600 text-sm">Carregamento otimizado e experiência em mobile.</p>
                </div>
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 font-display">Integração com ads</h3>
                    <p class="text-slate-600 text-sm">Estrutura pronta para Google Ads, Meta Ads e remarketing.</p>
                </div>
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 font-display">A/B e testes</h3>
                    <p class="text-slate-600 text-sm">Preparação para testes de headline, CTA e variações.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-primary to-primary-light rounded-3xl p-8 md:p-16 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-secondary/20 rounded-full blur-3xl"></div>
                <div class="relative z-10 text-center max-w-2xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 font-display">Quer uma landing page para sua campanha?</h2>
                    <p class="text-lg text-white/80 mb-8">Fale com nossa equipe e receba uma proposta de desenvolvimento.</p>
                    <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20landing%20page" target="_blank" class="inline-flex items-center justify-center px-8 py-4 rounded-lg font-semibold text-primary bg-white hover:bg-slate-100 transition-all shadow-lg">Falar no WhatsApp</a>
                </div>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/../inc/footer.php'; ?>