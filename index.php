<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/lib/blog.php';

$pageTitle = '3KAP - Auditoria | TI | RH';
$pageDescription = 'Auditoria, Tecnologia e Recursos Humanos atuando de forma integrada para fortalecer a governança da sua organização. 3KAP.';
$pageKeywords = 'auditoria, TI, recursos humanos, governança, conformidade, 3KAP, Salvador, Bahia, Brasil, Auditoria em Salvador, Auditoria em Bahia, Auditoria em Brasil';
$extraHead = '<script type="application/ld+json">
{"@context":"https://schema.org","@type":"ProfessionalService","name":"3KAP","description":"Auditoria, Tecnologia e Recursos Humanos atuando de forma integrada para fortalecer a governança da sua organização. Atendimento em todo o Brasil.","url":"https://3kap.com.br","telephone":"+5571999153592","address":{"@type":"PostalAddress","streetAddress":"Av. Prof. Magalhães Neto, 1550 - 7º Andar","addressLocality":"Salvador","addressRegion":"BA","addressCountry":"BR"},"areaServed":{"@type":"Country","name":"Brasil"},"priceRange":"$$"}
</script>';
require __DIR__ . '/inc/head.php';
require __DIR__ . '/inc/header.php';

$blogPosts = blogGetRecent(3);
?>
    <!-- ========== HERO ========== -->
    <section class="relative min-h-[90vh] flex items-center pt-20 overflow-hidden bg-primary-dark">
        <!-- Imagem de fundo: skyline / cidade -->
        <div class="absolute inset-0 z-0">
            <img src="<?= asset('assets/img/hero-cidade.jpg') ?>" alt="" class="w-full h-full object-cover" role="presentation">
        </div>
        <!-- Película escura por cima da imagem -->
        <div class="absolute inset-0 z-[1] bg-black/65" aria-hidden="true"></div>
        <!-- Conteúdo -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="max-w-3xl">
                <h1 class="text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold text-white leading-[1.05] mb-4 font-display animate-fade-up opacity-0" style="animation-fill-mode: forwards;">
                    <span class="block">3<span class="text-secondary-light">KAP</span></span>
                </h1>
                <p class="text-xl md:text-2xl lg:text-3xl text-white/95 font-semibold mb-6 animate-fade-up animation-delay-100 opacity-0" style="animation-fill-mode: forwards;">
                    Auditoria <span class="text-secondary-light">|</span> TI <span class="text-secondary-light">|</span> RH
                </p>
                <p class="text-lg md:text-xl text-white/90 mb-10 max-w-xl animate-fade-up animation-delay-200 opacity-0" style="animation-fill-mode: forwards;">
                    Auditoria, Tecnologia e Recursos Humanos atuando de forma integrada para fortalecer a governança da sua organização.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 animate-fade-up animation-delay-300 opacity-0" style="animation-fill-mode: forwards;">
                    <a href="#servicos" class="inline-flex items-center justify-center px-8 py-4 rounded-xl font-bold text-white bg-secondary hover:bg-secondary-dark transition-all hover:-translate-y-0.5 shadow-xl group">Conheça Nossos Serviços <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    <button type="button" id="btn-fale-conosco" class="inline-flex items-center justify-center px-8 py-4 rounded-xl font-bold text-primary bg-white hover:bg-slate-100 transition-all shadow-xl cursor-pointer">Fale Conosco</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== QUEM SOMOS ========== -->
    <section id="sobre" class="py-20 md:py-24 bg-white scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-sm font-semibold mb-4">Sobre Nós</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6 font-display">Quem <span class="gradient-text">somos</span></h2>
                <p class="text-base text-slate-600 leading-relaxed max-w-2xl mx-auto">A 3KAP é especializada em <strong class="text-slate-800 font-semibold">Auditoria</strong>, Tecnologia e Recursos Humanos, com soluções integradas para governança, conformidade e gestão. Atuamos em auditoria independente, consultoria empresarial e tributária e em tecnologia aplicada à gestão, com base nas Normas Brasileiras de Contabilidade e nas melhores práticas internacionais. Nossa metodologia combina rigor técnico, análise estratégica e ferramentas tecnológicas, trazendo controle, transparência e segurança. Com sede em Salvador e atuação em todo o Brasil, atendemos organizações que buscam estrutura sólida, eficiência e crescimento sustentável.</p>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-xl border border-slate-200 max-w-4xl mx-auto">
                <img src="<?= asset('assets/img/sobre-equipe.jpg') ?>" alt="Equipe de profissionais em reunião - 3KAP" class="w-full h-64 sm:h-80 object-cover">
            </div>
        </div>
    </section>

    <!-- ========== FUNDADOR ========== -->
    <section id="fundador" class="py-20 md:py-24 bg-slate-50 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="inline-block px-4 py-1.5 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-4">Liderança</span>
            <h3 class="text-2xl md:text-3xl font-bold text-slate-800 mb-8 font-display"><span class="gradient-text">Fundador</span></h3>
            <div class="flex flex-col md:flex-row gap-8 md:gap-12 items-center md:items-start bg-white rounded-2xl p-8 md:p-10 border-2 border-slate-200 shadow-sm">
                    <div class="flex-shrink-0 w-32 h-40 md:w-40 md:h-48 rounded-2xl overflow-hidden shadow-lg mx-auto md:mx-0">
                        <img src="<?= asset('assets/img/Tiagofoto1.png') ?>" alt="Tiago Falcão - Diretor e fundador da 3KAP" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-xl font-bold text-slate-800 font-display">Tiago Falcão</p>
                        <p class="text-primary font-semibold mb-4">Diretor · Líder de Auditoria</p>
                        <p class="text-slate-600 mb-4">Contador com pós-graduação em controladoria e mais de 20 anos de experiência em auditoria independente e finanças. Atuou em Big Four, realizando auditorias em diversos segmentos e conduzindo trabalhos relevantes em empresas de grande porte.</p>
                        <p class="text-slate-600 mb-6">Fundador da 3KAP, lidera projetos de auditoria e consultoria com alto padrão técnico, foco em governança, segurança das informações e geração de resultados consistentes para as organizações.</p>
                        <a href="https://www.linkedin.com/in/tiago-falcão" target="_blank" rel="noopener noreferrer" class="flex md:inline-flex items-center justify-center gap-2 w-full md:w-auto px-5 py-2.5 rounded-lg bg-[#0A66C2] text-white text-sm font-semibold hover:bg-[#004182] transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            Ver perfil no LinkedIn
                        </a>
                    </div>
                </div>
        </div>
    </section>

    <!-- ========== SERVIÇOS ========== -->
    <section id="servicos" class="py-28 bg-slate-100 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <span class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-sm font-semibold mb-4">Nossos Serviços</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-6 font-display">Soluções <span class="gradient-text">Completas</span> para seu Negócio</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="service-card relative bg-white rounded-2xl overflow-hidden shadow-xl border-2 border-slate-200">
                    <a href="<?= url('servicos/auditoria.php') ?>" class="absolute inset-0 z-10 rounded-2xl hidden md:block" aria-hidden="true"></a>
                    <div class="aspect-[16/10] overflow-hidden">
                        <img src="<?= asset('assets/img/servico-auditoria.jpg') ?>" alt="Auditoria contábil e demonstrações financeiras - 3KAP" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                    <div class="inline-flex p-4 rounded-2xl bg-gradient-to-br from-primary to-secondary mb-4"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Auditoria Contábil</h3>
                    <p class="text-slate-600 mb-4">Realizamos trabalhos de auditoria em conformidade com as melhores práticas internacionais.</p>
                    <ul class="text-slate-500 text-sm space-y-2 mb-6">
                        <li>• Auditoria de indústria e comércio</li>
                        <li>• Auditoria de prestadores de serviços</li>
                        <li>• Auditoria condominial</li>
                        <li>• Auditoria do terceiro setor</li>
                    </ul>
                    <a href="<?= url('servicos/auditoria.php') ?>" class="relative z-20 inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-lg font-semibold text-white bg-secondary hover:bg-secondary-dark transition-all shadow-md hover:shadow-lg group">Saiba mais <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>
                <div class="service-card relative bg-white rounded-2xl overflow-hidden shadow-xl border-2 border-slate-200">
                    <a href="<?= url('servicos/rh.php') ?>" class="absolute inset-0 z-10 rounded-2xl hidden md:block" aria-hidden="true"></a>
                    <div class="aspect-[16/10] overflow-hidden">
                        <img src="<?= asset('assets/img/servico-rh.jpg') ?>" alt="Consultoria em Recursos Humanos e gestão de pessoas - 3KAP" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                    <div class="inline-flex p-4 rounded-2xl bg-gradient-to-br from-primary to-secondary mb-4"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Recursos Humanos (RH)</h3>
                    <p class="text-slate-600 mb-4">Consultoria em gestão de pessoas, folha de pagamento, compliance trabalhista e treinamentos.</p>
                    <ul class="text-slate-500 text-sm space-y-2 mb-6">
                        <li>• Folha de pagamento e rotinas</li>
                        <li>• Compliance trabalhista</li>
                        <li>• Cálculos e rescisões</li>
                        <li>• Treinamentos in company</li>
                    </ul>
                    <a href="<?= url('servicos/rh.php') ?>" class="relative z-20 inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-lg font-semibold text-white bg-secondary hover:bg-secondary-dark transition-all shadow-md hover:shadow-lg group">Saiba mais <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>
                <div class="service-card relative bg-white rounded-2xl overflow-hidden shadow-xl border-2 border-slate-200">
                    <a href="<?= url('servicos/ti.php') ?>" class="absolute inset-0 z-10 rounded-2xl hidden md:block" aria-hidden="true"></a>
                    <div class="aspect-[16/10] overflow-hidden">
                        <img src="<?= asset('assets/img/hero-consultoria.jpg') ?>" alt="Equipe em reunião com notebooks e soluções de TI - 3KAP" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                    <div class="inline-flex p-4 rounded-2xl bg-gradient-to-br from-primary to-secondary mb-4"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Tecnologia da Informação (TI)</h3>
                    <p class="text-slate-600 mb-4">Consultoria em TI, segurança da informação, LGPD, ISO 27001, ISO 9001 e soluções alinhadas ao seu negócio.</p>
                    <ul class="text-slate-500 text-sm space-y-2 mb-6">
                        <li>• Consultoria em TI</li>
                        <li>• LGPD e privacidade</li>
                        <li>• ISO 27001 (Segurança)</li>
                        <li>• ISO 9001 (Qualidade)</li>
                    </ul>
                    <a href="<?= url('servicos/ti.php') ?>" class="relative z-20 inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-lg font-semibold text-white bg-secondary hover:bg-secondary-dark transition-all shadow-md hover:shadow-lg group">Saiba mais <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== POR QUE 3KAP ========== -->
    <section class="relative py-28 overflow-hidden">
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-primary-dark via-primary to-primary-light"></div>
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-secondary/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-[400px] h-[400px] bg-white/5 rounded-full blur-3xl"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block px-4 py-1.5 bg-white/10 text-white/90 rounded-full text-sm font-semibold mb-4 border border-white/20">Diferenciais</span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-8 font-display">Por que escolher a <span class="text-secondary-light">3KAP</span>?</h2>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4"><div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center border border-white/20"><svg class="w-6 h-6 text-secondary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/></svg></div><p class="text-lg text-white/90 pt-2">Equipe altamente qualificada e experiente</p></li>
                        <li class="flex items-start gap-4"><div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center border border-white/20"><svg class="w-6 h-6 text-secondary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v18m9-9H3"/></svg></div><p class="text-lg text-white/90 pt-2">Soluções personalizadas para cada cliente</p></li>
                        <li class="flex items-start gap-4"><div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center border border-white/20"><svg class="w-6 h-6 text-secondary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><p class="text-lg text-white/90 pt-2">Tecnologia de ponta e metodologias inovadoras</p></li>
                        <li class="flex items-start gap-4"><div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center border border-white/20"><svg class="w-6 h-6 text-secondary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682"/></svg></div><p class="text-lg text-white/90 pt-2">Atendimento próximo e humano</p></li>
                    </ul>
                    <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Vim%20pelo%20site%20da%203KAP%20e%20gostaria%20de%20falar%20com%20um%20especialista" target="_blank" class="flex w-full sm:w-auto mt-10 px-8 py-4 rounded-xl font-bold text-white bg-secondary hover:bg-secondary-dark transition-all shadow-xl inline-flex items-center justify-center">Fale com um especialista</a>
                </div>
                <div class="relative"><div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl"><img src="<?= asset('assets/img/porque-equipe.jpg') ?>" class="w-full h-full object-cover" alt="Equipe 3KAP"></div></div>
            </div>
        </div>
    </section>

    <!-- ========== ACADEMY CTA ========== -->
    <section id="academy" class="py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-primary to-primary-light rounded-3xl overflow-hidden relative flex flex-col lg:flex-row lg:items-center">
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-secondary/20 rounded-full blur-3xl"></div>
                <div class="relative z-10 lg:w-1/2 p-8 md:p-12 lg:pl-16 order-2 lg:order-1">
                    <span class="inline-block px-4 py-1.5 bg-white/10 text-white/90 rounded-full text-sm font-semibold mb-4 border border-white/20">🎓 3kap Academy</span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 font-display">Tenha uma carreira de sucesso praticando Lifelong Learning</h2>
                    <p class="text-lg text-white/80 mb-8">Torne a sua vida mais prática! Otimize suas atividades com nossos cursos e materiais. Assine a 3KAP Academy e tenha acesso a conteúdos exclusivos.</p>
                    <a href="<?= url('servicos/cursos.php') ?>" class="inline-flex items-center justify-center px-8 py-4 rounded-lg font-semibold text-white bg-secondary hover:bg-secondary-dark transition-all hover:-translate-y-0.5 shadow-lg group">Ver todos os cursos <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                </div>
                <div class="relative z-10 lg:w-1/2 order-1 lg:order-2">
                    <div class="aspect-[4/3] lg:aspect-auto lg:h-full min-h-[280px] lg:min-h-0 rounded-2xl overflow-hidden">
                        <img src="<?= asset('assets/img/academy.jpg') ?>" alt="3KAP Academy - Cursos e treinamentos para sua carreira" class="w-full h-full object-cover opacity-95">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== ARTIGOS ========== -->
    <section id="artigos" class="py-28 bg-slate-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 gap-6">
                <div class="max-w-2xl">
                    <span class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-sm font-semibold mb-4">Insights & Conhecimento</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4 font-display">Artigos</h2>
                    <p class="text-lg text-slate-600">Fique por dentro das últimas tendências em Auditoria, Inovação Tecnológica e Gestão de Pessoas com nossos especialistas.</p>
                </div>
                <a href="<?= url('blog.php') ?>" class="inline-flex items-center text-primary font-bold hover:text-secondary transition-colors group whitespace-nowrap">Ver todos os artigos <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <?php foreach ($blogPosts as $post): ?>
                <article class="blog-card bg-white rounded-2xl overflow-hidden flex flex-col border border-slate-100">
                    <a href="<?= url('blog-post.php?slug=' . urlencode($post['slug'])) ?>" class="block aspect-video overflow-hidden">
                        <img src="<?= htmlspecialchars(blogImageUrl($post['image_url'] ?? '') ?: 'https://images.unsplash.com/photo-1454165833767-027ffea10c4b?w=600&auto=format&fit=crop') ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </a>
                    <div class="p-6 flex-grow flex flex-col">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold uppercase"><?= htmlspecialchars($post['category']) ?></span>
                            <span class="text-xs text-slate-400"><?= date('d/m/Y', strtotime($post['created_at'])) ?></span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display"><a href="<?= url('blog-post.php?slug=' . urlencode($post['slug'])) ?>" class="hover:text-secondary transition-colors"><?= htmlspecialchars($post['title']) ?></a></h3>
                        <p class="text-slate-600 text-sm mb-6 flex-grow"><?= htmlspecialchars($post['excerpt'] ?: '') ?></p>
                        <a href="<?= url('blog-post.php?slug=' . urlencode($post['slug'])) ?>" class="text-secondary font-semibold text-sm hover:underline">Ler artigo completo</a>
                    </div>
                </article>
                <?php endforeach; ?>
                <?php if (empty($blogPosts)): ?>
                <p class="md:col-span-3 text-slate-500 text-center py-8">Nenhum artigo publicado ainda. Em breve novidades!</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php require __DIR__ . '/inc/mapa.php'; ?>

    <!-- Modal Fale Conosco -->
    <div id="modal-fale-conosco" class="fixed inset-0 z-[60] hidden flex items-center justify-center p-4" aria-hidden="true" role="dialog" aria-labelledby="modal-fale-conosco-title">
        <div id="modal-fale-conosco-backdrop" class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 bg-white rounded-2xl shadow-xl max-w-sm w-full p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 id="modal-fale-conosco-title" class="text-xl font-bold text-slate-800 font-display">Fale conosco</h2>
                <button type="button" id="modal-fale-conosco-close" class="p-2 -m-2 text-slate-400 hover:text-slate-600 rounded-lg transition-colors" aria-label="Fechar">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <p class="text-slate-600 text-sm mb-4">Escolha como prefere entrar em contato:</p>
            <div class="space-y-3">
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Vim%20pelo%20site%20da%203KAP%20e%20gostaria%20de%20falar%20com%20um%20especialista" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 w-full p-4 rounded-xl bg-[#25D366]/10 hover:bg-[#25D366]/20 text-[#25D366] font-semibold transition-colors">
                    <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    <span>WhatsApp</span>
                </a>
                <a href="mailto:contato@3kap.com.br" class="flex items-center gap-3 w-full p-4 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold transition-colors">
                    <svg class="w-6 h-6 flex-shrink-0 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>E-mail (contato@3kap.com.br)</span>
                </a>
            </div>
        </div>
    </div>
    <script>
        (function() {
            var btn = document.getElementById('btn-fale-conosco');
            var modal = document.getElementById('modal-fale-conosco');
            var backdrop = document.getElementById('modal-fale-conosco-backdrop');
            var closeBtn = document.getElementById('modal-fale-conosco-close');
            if (!btn || !modal) return;
            function openModal() { modal.classList.remove('hidden'); document.body.style.overflow = 'hidden'; }
            function closeModal() { modal.classList.add('hidden'); document.body.style.overflow = ''; }
            btn.addEventListener('click', openModal);
            if (closeBtn) closeBtn.addEventListener('click', closeModal);
            if (backdrop) backdrop.addEventListener('click', closeModal);
            modal.addEventListener('keydown', function(e) { if (e.key === 'Escape') closeModal(); });
        })();
    </script>

<?php require __DIR__ . '/inc/footer.php'; ?>
