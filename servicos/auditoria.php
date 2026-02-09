<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Auditoria | Contábil e Independente - 3KAP';
$pageDescription = 'Auditoria contábil independente, demonstrações financeiras, CEBAS, valuation, due diligence. Atendimento em todo o Brasil. 3KAP.';
$pageKeywords = 'auditoria contábil, auditoria independente, auditoria demonstrações financeiras, CEBAS, valuation, 3KAP';
require __DIR__ . '/../inc/head.php';
require __DIR__ . '/../inc/header.php';
?>
<section class="relative pt-32 pb-20 overflow-hidden">
        <a href="<?= url('index.php') ?>" class="absolute top-32 left-4 sm:left-6 lg:left-8 z-20 flex items-center gap-2 text-sm font-medium text-white/90 hover:text-white transition-colors" title="Voltar à página inicial"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg><span>Voltar</span></a>
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-primary-dark via-primary to-primary-light"></div>
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-secondary/20 rounded-full blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium mb-6 border border-white/20">Auditoria</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6 font-display">Auditoria <span class="text-secondary-light">contábil e independente</span></h1>
                <p class="text-lg md:text-xl text-white/80 mb-8">Auditoria em conformidade com as melhores práticas internacionais. Indústria, comércio, serviços, condomínios e terceiro setor. Atendimento em todo o Brasil.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20servi%C3%A7os%20de%20Auditoria" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-lg font-semibold text-primary bg-white hover:bg-slate-100 transition-all shadow-lg">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Falar no WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Bloco inicial: botões âncora -->
    <section id="servicos-auditoria" class="py-24 bg-white scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl overflow-hidden shadow-xl border border-slate-200 mb-16">
                <img src="https://images.unsplash.com/photo-1454165833767-027ffea10c4b?w=1200&auto=format&fit=crop" alt="Serviços de auditoria contábil e demonstrações financeiras - 3KAP" class="w-full h-64 sm:h-80 object-cover">
            </div>
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-sm font-semibold mb-4">Nossos serviços</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-4 font-display">Nossos Serviços de <span class="gradient-text">Auditoria</span></h2>
                <p class="text-slate-600">Selecione o serviço para ver a descrição detalhada.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="#auditoria-contabil" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></span>
                    Auditoria Contábil das Demonstrações Financeiras
                </a>
                <a href="#prestacoes-contas" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg></span>
                    Auditoria de Prestações de Contas
                </a>
                <a href="#entidades-cebas" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></span>
                    Auditoria para Entidades com CEBAS
                </a>
                <a href="#valuation" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span>
                    Valuation (Avaliação Econômico-Financeira)
                </a>
                <a href="#due-diligence" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg></span>
                    Due Diligence Contábil e Financeira
                </a>
                <a href="#conformidade-legal" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2"/></svg></span>
                    Auditoria de Conformidade Legal e Regulatória
                </a>
                <a href="#controles-internos" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg></span>
                    Auditoria de Controles Internos
                </a>
                <a href="#auditoria-operacional" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></span>
                    Auditoria Operacional
                </a>
                <a href="#trabalhista-previdenciaria" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></span>
                    Auditoria Trabalhista e Previdenciária
                </a>
                <a href="#auditoria-tributaria" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></span>
                    Auditoria Tributária
                </a>
                <a href="#ativos-patrimonio" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></span>
                    Auditoria de Ativos e Patrimônio
                </a>
                <a href="#inventario-patrimonial" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg></span>
                    Inventário Patrimonial
                </a>
                <a href="#investigativa-fraude" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></span>
                    Auditoria Investigativa de Fraude
                </a>
                <a href="#contratos-convenios" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg></span>
                    Auditoria de Contratos e Convênios
                </a>
                <a href="#fins-especificos" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg></span>
                    Auditoria para Fins Específicos
                </a>
                <a href="#consultoria-tributaria" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></span>
                    Consultoria Tributária
                </a>
            </div>
        </div>
    </section>

    <!-- Consultoria Tributária (conteúdo incorporado) -->
    <section id="consultoria-tributaria" class="py-24 bg-slate-50 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-sm font-semibold mb-4">Auditoria</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-6 font-display">Consultoria <span class="gradient-text">Tributária</span></h2>
                <p class="text-slate-600">Tributos diretos e indiretos, trabalhista, previdenciário e preço de transferência. Atuamos em conformidade com a legislação e melhores práticas.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-6 rounded-2xl bg-white border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 font-display">Auditoria de demonstrações contábeis</h3>
                    <p class="text-slate-600 text-sm">Emissão de parecer em conformidade com NBC TA e normas internacionais (IFRS).</p>
                </div>
                <div class="p-6 rounded-2xl bg-white border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 font-display">Auditoria condominial</h3>
                    <p class="text-slate-600 text-sm">Revisão de gestão financeira e contábil de condomínios residenciais e comerciais.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 font-display">Auditoria do terceiro setor</h3>
                    <p class="text-slate-600 text-sm">Prestação de contas e conformidade para OSC, fundações e associações.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 font-display">Due diligence e valuation</h3>
                    <p class="text-slate-600 text-sm">Avaliação de empresas e análise de riscos em transações societárias.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 font-display">Inventário físico</h3>
                    <p class="text-slate-600 text-sm">Contagem, conciliação e relatórios em conformidade com boas práticas.</p>
                </div>
                <div class="p-6 rounded-2xl bg-white border border-slate-100">
                    <h3 class="text-lg font-bold text-slate-800 mb-2 font-display">Consultoria tributária</h3>
                    <p class="text-slate-600 text-sm">Tributos diretos e indiretos, trabalhista, previdenciário e preço de transferência.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seções de texto (uma por serviço) -->
    <section class="py-12 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
            <article id="auditoria-contabil" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Auditoria Contábil das Demonstrações Financeiras</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Exame independente das demonstrações contábeis, com o objetivo de avaliar se estão adequadamente apresentadas, em todos os aspectos relevantes, de acordo com as normas contábeis aplicáveis e com emissão de relatório de auditoria.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Auditoria%20Cont%C3%A1bil%20das%20Demonstra%C3%A7%C3%B5es%20Financeiras" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="prestacoes-contas" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Auditoria de Prestações de Contas</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Revisão e emissão de parecer sobre a prestação de contas de gestores, administradores e responsáveis por recursos públicos ou de terceiros, em conformidade com a legislação e normas técnicas aplicáveis.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Auditoria%20de%20Presta%C3%A7%C3%B5es%20de%20Contas" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="entidades-cebas" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Auditoria para Entidades com CEBAS</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Auditoria das demonstrações contábeis e da aplicação dos recursos de entidades que possuem Certificado de Entidade Beneficente de Assistência Social, em atendimento às exigências legais e regulamentares do CEBAS.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Auditoria%20para%20Entidades%20com%20CEBAS" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="valuation" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Valuation (Avaliação Econômico-Financeira)</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Avaliação do valor econômico de empresas, ativos ou participações societárias, com utilização de metodologias reconhecidas (fluxo de caixa descontado, múltiplos de mercado, valor patrimonial ajustado, entre outras), para fins de fusões, aquisições, reorganizações ou reportes.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Valuation%20(Avalia%C3%A7%C3%A3o%20Econ%C3%B4mico-Financeira)" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="due-diligence" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Due Diligence Contábil e Financeira</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Análise aprofundada da situação contábil, financeira, fiscal e trabalhista de empresas em processos de M&A, investimentos ou operações societárias, identificando riscos e oportunidades e subsidiando a tomada de decisão.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Due%20Diligence%20Cont%C3%A1bil%20e%20Financeira" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="conformidade-legal" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Auditoria de Conformidade Legal e Regulatória</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Exame dos controles e evidências que comprovam o cumprimento de leis, regulamentos, normas setoriais e contratos, com emissão de relatório sobre a conformidade da entidade perante os requisitos aplicáveis.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Auditoria%20de%20Conformidade%20Legal%20e%20Regulat%C3%B3ria" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="controles-internos" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Auditoria de Controles Internos</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Avaliação da adequação e efetividade dos controles internos (contábeis, operacionais e de governança), identificando lacunas e recomendações de melhoria para fortalecer a gestão de riscos e a confiabilidade das informações.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Auditoria%20de%20Controles%20Internos" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="auditoria-operacional" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Auditoria Operacional</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Análise da eficiência, eficácia e economicidade de processos, programas e atividades da organização, com foco em melhorias de gestão, redução de custos e alcance de objetivos estratégicos.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Auditoria%20Operacional" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="trabalhista-previdenciaria" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Auditoria Trabalhista e Previdenciária</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Revisão da conformidade das obrigações trabalhistas e previdenciárias, incluindo folha de pagamento, verbas rescisórias, eSocial e passivos trabalhistas, com identificação de riscos e passivos contingentes.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Auditoria%20Trabalhista%20e%20Previdenci%C3%A1ria" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="auditoria-tributaria" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Auditoria Tributária</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Exame da situação fiscal e tributária da entidade, abrangendo tributos federais, estaduais e municipais, cumprimento de obrigações acessórias e existência de passivos tributários, com subsídios para planejamento e compliance.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Auditoria%20Tribut%C3%A1ria" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="ativos-patrimonio" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Auditoria de Ativos e Patrimônio</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Verificação da existência, propriedade e avaliação dos ativos e do patrimônio da entidade, incluindo imobilizado, estoques e direitos, em conformidade com as normas contábeis e com emissão de relatório de auditoria.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Auditoria%20de%20Ativos%20e%20Patrim%C3%B4nio" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="inventario-patrimonial" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Inventário Patrimonial</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Procedimentos de contagem física, identificação e valoração de bens e direitos patrimoniais, com conciliação aos registros contábeis e elaboração de relatório para fins de balanço, cisões, incorporações ou due diligence.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Invent%C3%A1rio%20Patrimonial" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="investigativa-fraude" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Auditoria Investigativa de Fraude</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Investigação de indícios ou suspeitas de fraude, desvio de recursos, corrupção ou irregularidades, com coleta de evidências, análise de documentos e elaboração de relatório para suporte a decisões administrativas ou judiciais.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Auditoria%20Investigativa%20de%20Fraude" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="contratos-convenios" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Auditoria de Contratos e Convênios</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Exame da execução contratual e da aplicação de recursos em contratos e convênios com órgãos públicos ou privados, verificando o cumprimento de cláusulas, metas e prestação de contas conforme a legislação e o instrumento celebrado.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Auditoria%20de%20Contratos%20e%20Conv%C3%AAnios" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="fins-especificos" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Auditoria para Fins Específicos</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Trabalhos de auditoria sob escopo e critérios definidos para necessidades específicas, como relatórios para bancos e investidores, certificações para licitações, due diligence setorial ou atendimento a exigências regulatórias ou contratuais pontuais.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Auditoria%20para%20Fins%20Espec%C3%ADficos" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-primary to-primary-light rounded-3xl p-8 md:p-16 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-secondary/20 rounded-full blur-3xl"></div>
                <div class="relative z-10 text-center max-w-2xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 font-display">Precisa de auditoria ou consultoria?</h2>
                    <p class="text-lg text-white/80 mb-8">Fale com nossa equipe e receba uma proposta alinhada ao seu negócio.</p>
                    <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20servi%C3%A7os%20de%20Auditoria" target="_blank" class="inline-flex items-center justify-center px-8 py-4 rounded-lg font-semibold text-primary bg-white hover:bg-slate-100 transition-all shadow-lg">Falar no WhatsApp</a>
                </div>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/../inc/footer.php'; ?>