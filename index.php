<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/lib/blog.php';

$pageTitle = '3KAP - Auditoria | Contábil, RH e TI';
$pageDescription = 'Auditoria contábil independente, consultoria em RH e TI. Atendimento em todo o Brasil. Soluções para empresas. 3KAP.';
$pageKeywords = 'auditoria contábil, auditoria independente, consultoria RH, consultoria TI, 3KAP';
$extraHead = '<script type="application/ld+json">
{"@context":"https://schema.org","@type":"ProfessionalService","name":"3KAP","description":"Auditoria contábil independente, consultoria em RH e TI. Atendimento em todo o Brasil.","url":"https://3kap.com.br","telephone":"+5571999153592","address":{"@type":"PostalAddress","streetAddress":"Av. Prof. Magalhães Neto, 1550 - 7º Andar","addressLocality":"Salvador","addressRegion":"BA","addressCountry":"BR"},"areaServed":{"@type":"Country","name":"Brasil"},"priceRange":"$$"}
</script>';
require __DIR__ . '/inc/head.php';
require __DIR__ . '/inc/header.php';

$blogPosts = blogGetRecent(3);
?>
    <!-- ========== HERO ========== -->
    <section class="relative min-h-screen flex items-center pt-20 overflow-hidden">
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-primary-dark via-primary to-primary-light"></div>
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-secondary/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-[400px] h-[400px] bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%23ffffff%22 fill-opacity=%220.4%22%3E%3Cpath d=%22M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl">
                <div class="animate-fade-up opacity-0" style="animation-fill-mode: forwards;">
                    <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium mb-6 border border-white/20">🚀 Transformando negócios desde 2015</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight mb-6 animate-fade-up animation-delay-100 font-display opacity-0" style="animation-fill-mode: forwards;">
                    Inovação e <span class="relative inline-block"><span class="relative z-10">Excelência</span><span class="absolute bottom-2 left-0 right-0 h-3 bg-secondary/40 -z-0"></span></span> em Serviços Empresariais
                </h1>
                <p class="text-lg md:text-xl text-white/80 mb-8 animate-fade-up animation-delay-200 max-w-xl opacity-0" style="animation-fill-mode: forwards;">
                    <strong class="text-white">Auditoria</strong>, <strong class="text-white">Tecnologia</strong> e <strong class="text-white">Recursos Humanos</strong> para impulsionar seu negócio. Atendimento em todo o Brasil.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 animate-fade-up animation-delay-300 opacity-0" style="animation-fill-mode: forwards;">
                    <a href="#servicos" class="inline-flex items-center justify-center px-8 py-4 rounded-lg font-semibold text-white bg-gradient-to-r from-secondary to-secondary-light hover:opacity-90 transition-all hover:-translate-y-0.5 shadow-lg shadow-secondary/25 group">Conheça Nossos Serviços <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    <a href="#sobre" class="inline-flex items-center justify-center px-8 py-4 rounded-lg font-semibold border-2 border-white text-white bg-transparent hover:bg-white hover:text-primary transition-all">Sobre a 3KAP</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== SOBRE ========== -->
    <section id="sobre" class="py-24 bg-white scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-sm font-semibold mb-4">Sobre Nós</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-6 font-display">Conheça a <span class="gradient-text">3KAP</span></h2>
                <p class="text-lg text-slate-600">A 3KAP é uma empresa de <strong>auditoria</strong>, com soluções integradas de melhores práticas de gestão. Desenvolvemos auditoria contábil, consultoria empresarial e tributária, com utilização de ferramentas tecnológicas. Nossa metodologia é baseada nas melhores práticas internacionais de auditoria contábil. Atendimento em todo o Brasil.</p>
            </div>
            <div class="mt-20 mb-16">
                <span class="inline-block px-4 py-1.5 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-4">Liderança</span>
                <h3 class="text-2xl md:text-3xl font-bold text-slate-800 mb-8 font-display"><span class="gradient-text">Fundador</span></h3>
                <div class="flex flex-col md:flex-row gap-8 md:gap-12 items-center md:items-start bg-slate-50 rounded-2xl p-8 md:p-10 border border-slate-100">
                    <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 rounded-2xl overflow-hidden shadow-lg mx-auto md:mx-0">
                        <img src="<?= asset('assets/img/tiago_falcao.jpg') ?>" alt="Tiago Falcão - Diretor e fundador da 3KAP" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-xl font-bold text-slate-800 font-display">Tiago Falcão</p>
                        <p class="text-primary font-semibold mb-4">Diretor · Líder de Auditoria</p>
                        <p class="text-slate-600 mb-4">Contador com pós-graduação em Controladoria e mais de 10 anos de experiência em finanças e auditoria. Atuou em empresas de grande porte como encarregado de auditoria externa, analista contábil, fiscal e planejamento financeiro.</p>
                        <p class="text-slate-600 mb-4">Trajetória em duas das Big Four e em indústrias de grande porte. Fundou a 3KAP em 2020 para levar auditoria de excelência e consultoria integrada com foco em resultados e proximidade com o cliente.</p>
                        <ul class="text-slate-500 text-sm space-y-1 mb-6">
                            <li><strong class="text-slate-600">Formação:</strong> Ciências Contábeis (UFBA), Pós-graduação em Controladoria (Saint Paul)</li>
                        </ul>
                        <a href="https://www.linkedin.com/in/tiago-falcão" target="_blank" rel="noopener noreferrer" class="flex md:inline-flex items-center justify-center gap-2 w-full md:w-auto px-5 py-2.5 rounded-lg bg-[#0A66C2] text-white text-sm font-semibold hover:bg-[#004182] transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            Ver perfil no LinkedIn
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-16 grid md:grid-cols-2 gap-8">
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                    <div class="inline-flex p-3 rounded-xl bg-primary/10 mb-4"><svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2 font-display">Qualidade Única</h3>
                    <p class="text-slate-600">Contamos com uma equipe profissional para te entregar os melhores serviços.</p>
                </div>
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                    <div class="inline-flex p-3 rounded-xl bg-primary/10 mb-4"><svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2 font-display">Suporte Otimizado</h3>
                    <p class="text-slate-600">Qualquer problema que você venha a ter, estaremos aqui para solucionar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== SERVIÇOS ========== -->
    <section id="servicos" class="py-24 bg-slate-50 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-sm font-semibold mb-4">Nossos Serviços</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-6 font-display">Soluções <span class="gradient-text">Completas</span> para seu Negócio</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="service-card relative bg-white rounded-2xl p-8 shadow-lg shadow-slate-200/50">
                    <a href="<?= url('servicos/auditoria.php') ?>" class="absolute inset-0 z-10 rounded-2xl hidden md:block" aria-hidden="true"></a>
                    <div class="inline-flex p-4 rounded-2xl bg-gradient-to-br from-primary to-primary-light mb-6"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Auditoria Contábil</h3>
                    <p class="text-slate-600 mb-4">Realizamos trabalhos de auditoria em conformidade com as melhores práticas internacionais.</p>
                    <ul class="text-slate-500 text-sm space-y-2 mb-6">
                        <li>• Auditoria de indústria e comércio</li>
                        <li>• Auditoria de prestadores de serviços</li>
                        <li>• Auditoria condominial</li>
                        <li>• Auditoria do terceiro setor</li>
                    </ul>
                    <a href="<?= url('servicos/auditoria.php') ?>" class="relative z-20 inline-flex items-center text-primary font-semibold hover:text-secondary transition-colors group">Saiba mais <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                </div>
                <div class="service-card relative bg-white rounded-2xl p-8 shadow-lg shadow-slate-200/50">
                    <a href="<?= url('servicos/rh.php') ?>" class="absolute inset-0 z-10 rounded-2xl hidden md:block" aria-hidden="true"></a>
                    <div class="inline-flex p-4 rounded-2xl bg-gradient-to-br from-secondary to-secondary-light mb-6"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Recursos Humanos (RH)</h3>
                    <p class="text-slate-600 mb-4">Consultoria em gestão de pessoas, folha de pagamento, compliance trabalhista e treinamentos.</p>
                    <ul class="text-slate-500 text-sm space-y-2 mb-6">
                        <li>• Folha de pagamento e rotinas</li>
                        <li>• Compliance trabalhista</li>
                        <li>• Cálculos e rescisões</li>
                        <li>• Treinamentos in company</li>
                    </ul>
                    <a href="<?= url('servicos/rh.php') ?>" class="relative z-20 inline-flex items-center text-primary font-semibold hover:text-secondary transition-colors group">Saiba mais <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                </div>
                <div class="service-card relative bg-white rounded-2xl p-8 shadow-lg shadow-slate-200/50">
                    <a href="<?= url('servicos/ti.php') ?>" class="absolute inset-0 z-10 rounded-2xl hidden md:block" aria-hidden="true"></a>
                    <div class="inline-flex p-4 rounded-2xl bg-gradient-to-br from-primary-light to-secondary mb-6"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Tecnologia da Informação (TI)</h3>
                    <p class="text-slate-600 mb-4">Consultoria em TI, segurança da informação, LGPD, ISO 27001, ISO 9001 e soluções alinhadas ao seu negócio.</p>
                    <ul class="text-slate-500 text-sm space-y-2 mb-6">
                        <li>• Consultoria em TI</li>
                        <li>• LGPD e privacidade</li>
                        <li>• ISO 27001 (Segurança)</li>
                        <li>• ISO 9001 (Qualidade)</li>
                    </ul>
                    <a href="<?= url('servicos/ti.php') ?>" class="relative z-20 inline-flex items-center text-primary font-semibold hover:text-secondary transition-colors group">Saiba mais <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== POR QUE 3KAP ========== -->
    <section class="relative py-24 overflow-hidden">
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
                    <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Vim%20pelo%20site%20da%203KAP%20e%20gostaria%20de%20falar%20com%20um%20especialista" target="_blank" class="flex w-full sm:w-auto mt-10 px-8 py-4 rounded-lg font-semibold text-white bg-gradient-to-r from-secondary to-secondary-light hover:opacity-90 transition-all shadow-lg shadow-secondary/25 inline-flex items-center justify-center">Fale com um especialista</a>
                </div>
                <div class="relative"><div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl"><img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=900&auto=format&fit=crop" class="w-full h-full object-cover" alt="Equipe 3KAP"></div></div>
            </div>
        </div>
    </section>

    <!-- ========== ACADEMY CTA ========== -->
    <section id="academy" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-primary to-primary-light rounded-3xl p-8 md:p-16 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-secondary/20 rounded-full blur-3xl"></div>
                <div class="relative z-10 text-center max-w-2xl mx-auto">
                    <span class="inline-block px-4 py-1.5 bg-white/10 text-white/90 rounded-full text-sm font-semibold mb-4 border border-white/20">🎓 3kap Academy</span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 font-display">Tenha uma carreira de sucesso praticando Lifelong Learning</h2>
                    <p class="text-lg text-white/80 mb-8">Torne a sua vida mais prática! Otimize suas atividades com nossos cursos e materiais. Assine a 3KAP Academy e tenha acesso a conteúdos exclusivos.</p>
                    <a href="<?= url('servicos/cursos.php') ?>" class="inline-flex items-center justify-center px-8 py-4 rounded-lg font-semibold text-primary bg-white hover:bg-slate-100 transition-all hover:-translate-y-0.5 shadow-lg group">Ver todos os cursos <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== BLOG ========== -->
    <section id="blog" class="py-24 bg-slate-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div class="max-w-2xl">
                    <span class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-sm font-semibold mb-4">Insights & Conhecimento</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4 font-display">Conheça nosso <span class="gradient-text">Blog</span></h2>
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
<?php require __DIR__ . '/inc/footer.php'; ?>
