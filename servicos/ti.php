<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Consultoria em TI | Segurança e Sistemas - 3KAP';
$pageDescription = 'Consultoria em TI: segurança da informação, LGPD, ISO 27001, sistemas personalizados. Atendimento em todo o Brasil. 3KAP.';
$extraHead = '<style>.project-card:hover{transform:translateY(-8px);box-shadow:0 20px 40px -12px rgba(45,90,39,0.2);}</style>';
require __DIR__ . '/../inc/head.php';
require __DIR__ . '/../inc/header.php';
?>
    <section class="relative pt-32 pb-20 overflow-hidden">
        <a href="<?= url('index.php') ?>" class="absolute top-32 left-4 sm:left-6 lg:left-8 z-20 flex items-center gap-2 text-sm font-medium text-white/90 hover:text-white transition-colors" title="Voltar à página inicial"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg><span>Voltar</span></a>
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-primary-dark via-primary to-primary-light"></div>
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-secondary/20 rounded-full blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium mb-6 border border-white/20">TI</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6 font-display">Tecnologia da <span class="text-secondary-light">Informação</span></h1>
                <p class="text-lg md:text-xl text-white/80 mb-8">Consultoria em TI, infraestrutura, segurança da informação, LGPD e desenvolvimento. Soluções alinhadas ao seu negócio.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Tecnologia%20da%20Informa%C3%A7%C3%A3o" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-lg font-semibold text-primary bg-white hover:bg-slate-100 transition-all shadow-lg"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>Falar no WhatsApp</a>
            </div>
        </div>
    </section>

    <section id="servicos-ti" class="py-24 bg-white scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl overflow-hidden shadow-xl border border-slate-200 mb-16">
                <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=1200&auto=format&fit=crop" alt="Consultoria em Tecnologia da Informação, LGPD e segurança - 3KAP" class="w-full h-64 sm:h-80 object-cover">
            </div>
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-sm font-semibold mb-4">Nossos serviços</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-4 font-display">Nossos Serviços de <span class="gradient-text">TI</span></h2>
                <p class="text-slate-600">Selecione o serviço para ver a descrição detalhada.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="#consultoria-ti" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></span>
                    Consultoria em TI
                </a>
                <a href="#sistemas-personalizados" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg></span>
                    Desenvolvimento de Sistemas Personalizados
                </a>
                <a href="#seguranca-iso27001" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></span>
                    Segurança da Informação (ISO 27001)
                </a>
                <a href="#lgpd" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></span>
                    LGPD e Privacidade
                </a>
                <a href="#iso9001" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></span>
                    ISO 9001 – Gestão da Qualidade
                </a>
                <a href="#sites-institucionais" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m9 9c-1.657 0-3 4.03-3 9s1.343 9 3 9m-9-9a9 9 0 019-9"/></svg></span>
                    Sites Institucionais
                </a>
                <a href="#landing-pages" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg></span>
                    Landing Pages
                </a>
            </div>
        </div>
    </section>

    <section class="py-12 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
            <article id="consultoria-ti" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Consultoria em TI</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Diagnóstico, planejamento e gestão de projetos de tecnologia para sua empresa. Ajudamos a alinhar a TI à estratégia do negócio, definir roadmaps, escolher soluções e acompanhar a execução de iniciativas de infraestrutura, segurança e desenvolvimento.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Consultoria%20em%20TI" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="sistemas-personalizados" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Desenvolvimento de Sistemas Personalizados</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Soluções web e mobile sob medida para auditoria, RH, gestão e compliance. Automatizamos processos e entregamos sistemas que se adaptam ao seu negócio.</p>
                <p class="text-slate-600 leading-relaxed mb-6">Desenvolvemos sistemas exclusivos para escritórios de contabilidade, departamentos de auditoria, RH e áreas de compliance. Integração com seus processos, relatórios sob demanda e suporte contínuo.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Sistemas%20Personalizados" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="seguranca-iso27001" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Segurança da Informação (ISO 27001)</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Consultoria e implementação de SGSI conforme ISO/IEC 27001. Gap analysis, implementação do SGSI, políticas e controles, preparação para certificação, treinamentos e auditoria interna.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20ISO%2027001" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="lgpd" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">LGPD e Privacidade</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Consultoria e adequação à LGPD. Diagnóstico de conformidade, plano de adequação, políticas e procedimentos, atuação como DPO, treinamentos e auditoria de privacidade.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Consultoria%20em%20LGPD" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="iso9001" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">ISO 9001 – Gestão da Qualidade</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Consultoria e implementação de SGQ conforme ISO 9001. Gap analysis, documentação e processos, preparação para certificação, treinamentos e auditoria interna.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20ISO%209001" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="sites-institucionais" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m9 9c-1.657 0-3 4.03-3 9s1.343 9 3 9m-9-9a9 9 0 019-9"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Sites Institucionais</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Criação e modernização de sites corporativos responsivos, com identidade visual alinhada à marca e foco em usabilidade e desempenho.</p>
                <a href="<?= url('servicos/sites-institucionais.php') ?>" class="inline-flex items-center gap-2 text-sm font-medium text-primary hover:underline mb-4">Ver página de Sites Institucionais</a>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Sites%20Institucionais" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="landing-pages" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Landing Pages</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Páginas de conversão para campanhas de marketing e captação de leads, com foco em conversão e integração a ferramentas de CRM e automação.</p>
                <a href="<?= url('servicos/landing-pages.php') ?>" class="inline-flex items-center gap-2 text-sm font-medium text-primary hover:underline mb-4">Ver página de Landing Pages</a>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Landing%20Pages" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-primary to-primary-light rounded-3xl p-8 md:p-16 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-secondary/20 rounded-full blur-3xl"></div>
                <div class="relative z-10 text-center max-w-2xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 font-display">Precisa de consultoria em TI?</h2>
                    <p class="text-lg text-white/80 mb-8">Conte sua necessidade e receba uma proposta alinhada à sua operação.</p>
                    <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Tecnologia%20da%20Informa%C3%A7%C3%A3o" target="_blank" class="inline-flex items-center justify-center px-8 py-4 rounded-lg font-semibold text-primary bg-white hover:bg-slate-100 transition-all shadow-lg">Falar no WhatsApp</a>
                </div>
            </div>
        </div>
    </section>

<?php require __DIR__ . '/../inc/footer.php'; ?>
