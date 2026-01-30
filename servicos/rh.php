<?php
require_once __DIR__ . '/../config.php';
$pageTitle = 'Consultoria em RH | Folha e Gestão de Pessoas - 3KAP';
$pageDescription = 'Consultoria em Recursos Humanos: folha de pagamento, compliance trabalhista e gestão de pessoas. Atendimento em todo o Brasil. 3KAP.';
$pageKeywords = 'consultoria RH, folha de pagamento, compliance trabalhista, gestão de pessoas, 3KAP';
require __DIR__ . '/../inc/head.php';
require __DIR__ . '/../inc/header.php';
?>
<section class="relative pt-32 pb-20 overflow-hidden">
        <a href="<?= url('index.php') ?>" class="absolute top-32 left-4 sm:left-6 lg:left-8 z-20 flex items-center gap-2 text-sm font-medium text-white/90 hover:text-white transition-colors" title="Voltar à página inicial"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg><span>Voltar</span></a>
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-primary-dark via-primary to-primary-light"></div>
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-secondary/20 rounded-full blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium mb-6 border border-white/20">RH</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6 font-display">Recursos <span class="text-secondary-light">Humanos</span></h1>
                <p class="text-lg md:text-xl text-white/80 mb-8">Consultoria em gestão de pessoas, folha de pagamento, compliance trabalhista e treinamentos. Soluções alinhadas à sua empresa.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20servi%C3%A7os%20de%20Recursos%20Humanos" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-lg font-semibold text-primary bg-white hover:bg-slate-100 transition-all shadow-lg"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>Falar no WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- Bloco inicial: botões âncora -->
    <section id="servicos-rh" class="py-24 bg-white scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-sm font-semibold mb-4">Nossos serviços</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-4 font-display">Serviços de <span class="gradient-text">Recursos Humanos</span></h2>
                <p class="text-slate-600">Selecione o serviço para ver a descrição detalhada.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="#nr-1-gro" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></span>
                    NR-1 – Gerenciamento de Riscos Ocupacionais (GRO)
                </a>
                <a href="#recrutamento-selecao" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></span>
                    Recrutamento e Seleção
                </a>
                <a href="#avaliacao-disc" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></span>
                    Avaliação Comportamental – DISC
                </a>
                <a href="#consultoria-gestao-pessoas" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></span>
                    Consultoria em Gestão de Pessoas
                </a>
                <a href="#cargos-salarios-carreira" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span>
                    Estruturação de Cargos, Salários e Carreira
                </a>
                <a href="#avaliacao-desempenho" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></span>
                    Avaliação de Desempenho
                </a>
                <a href="#treinamento-desenvolvimento" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg></span>
                    Treinamento e Desenvolvimento de Pessoas
                </a>
                <a href="#clima-organizacional" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span>
                    Clima Organizacional
                </a>
                <a href="#compliance-trabalhista" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></span>
                    Compliance Trabalhista
                </a>
                <a href="#apoio-lideranca" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></span>
                    Apoio à Liderança e Gestão de Equipes
                </a>
                <a href="#rh-financas-contabilidade" class="flex items-center gap-3 p-5 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/30 hover:bg-secondary/5 transition-all text-left font-medium text-slate-800">
                    <span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></span>
                    RH para Finanças e Contabilidade
                </a>
            </div>
        </div>
    </section>

    <!-- Seções de texto (uma por serviço) -->
    <section class="py-12 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
            <article id="nr-1-gro" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">NR-1 – Gerenciamento de Riscos Ocupacionais (GRO)</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Atuação no apoio à implementação e ao acompanhamento da NR-1, com foco na identificação, avaliação e gestão dos riscos ocupacionais. O trabalho contribui para a conformidade legal, a prevenção de riscos e o fortalecimento da cultura de segurança e saúde no trabalho.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20NR-1%20%E2%80%93%20Gerenciamento%20de%20Riscos%20Ocupacionais%20(GRO)" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="recrutamento-selecao" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Recrutamento e Seleção</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Condução de processos de recrutamento e seleção alinhados ao perfil técnico, comportamental e cultural da organização. O serviço visa apoiar decisões assertivas na contratação, reduzindo riscos e aumentando a aderência entre pessoas e funções.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Recrutamento%20e%20Sele%C3%A7%C3%A3o" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="avaliacao-disc" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Avaliação Comportamental – DISC</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Aplicação de ferramentas de avaliação comportamental baseadas na metodologia DISC, com foco no autoconhecimento, no desenvolvimento de equipes, na melhoria da comunicação e no apoio a processos de liderança, seleção e gestão de pessoas.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Avalia%C3%A7%C3%A3o%20Comportamental%20%E2%80%93%20DISC" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="consultoria-gestao-pessoas" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Consultoria em Gestão de Pessoas</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Apoio técnico na estruturação e no aprimoramento dos processos de RH, incluindo políticas, práticas e rotinas de gestão de pessoas, alinhadas aos objetivos estratégicos da organização.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Consultoria%20em%20Gest%C3%A3o%20de%20Pessoas" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="cargos-salarios-carreira" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Estruturação de Cargos, Salários e Carreira</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Desenvolvimento de estruturas de cargos, salários e planos de carreira, com critérios claros e objetivos, visando equidade interna, competitividade de mercado e apoio à retenção de talentos.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Estrutura%C3%A7%C3%A3o%20de%20Cargos%2C%20Sal%C3%A1rios%20e%20Carreira" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="avaliacao-desempenho" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Avaliação de Desempenho</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Implantação e acompanhamento de processos de avaliação de desempenho, com definição de critérios, indicadores e ciclos de avaliação, apoiando a gestão, o desenvolvimento profissional e a tomada de decisão.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Avalia%C3%A7%C3%A3o%20de%20Desempenho" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="treinamento-desenvolvimento" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Treinamento e Desenvolvimento de Pessoas</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Planejamento e execução de ações de treinamento e desenvolvimento, voltadas ao aprimoramento de competências técnicas e comportamentais, alinhadas às necessidades da organização.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Treinamento%20e%20Desenvolvimento%20de%20Pessoas" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="clima-organizacional" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Clima Organizacional</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Realização de pesquisas de clima organizacional, com análise dos resultados e apoio na definição de ações de melhoria, visando fortalecer o engajamento, a comunicação e o ambiente de trabalho.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Clima%20Organizacional" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="compliance-trabalhista" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Compliance Trabalhista</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Avaliação dos processos e rotinas de RH sob a ótica da legislação trabalhista e previdenciária, identificando riscos, inconsistências e oportunidades de melhoria na conformidade legal.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Compliance%20Trabalhista" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="apoio-lideranca" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">Apoio à Liderança e Gestão de Equipes</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Atuação junto a líderes e gestores no desenvolvimento de habilidades de gestão, comunicação, tomada de decisão e condução de equipes, contribuindo para melhores resultados organizacionais.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20Apoio%20%C3%A0%20Lideran%C3%A7a%20e%20Gest%C3%A3o%20de%20Equipes" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
            <article id="rh-financas-contabilidade" class="scroll-mt-28 bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-sm">
                <div class="flex items-center gap-3 mb-4"><span class="flex-shrink-0 w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></span><h3 class="text-xl md:text-2xl font-bold text-slate-800 font-display">RH para Finanças e Contabilidade</h3></div>
                <p class="text-slate-600 leading-relaxed mb-6">Atuação especializada em gestão de pessoas para áreas financeiras e contábeis, considerando o nível de responsabilidade técnica, ética profissional, segregação de funções e exigências de controle e governança. O serviço apoia recrutamento, desenvolvimento, avaliação e estruturação de equipes financeiras e contábeis.</p>
                <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20RH%20para%20Finan%C3%A7as%20e%20Contabilidade" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-medium text-secondary hover:text-secondary-dark transition-colors">Falar no WhatsApp sobre este serviço</a>
            </article>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-primary to-primary-light rounded-3xl p-8 md:p-16 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-secondary/20 rounded-full blur-3xl"></div>
                <div class="relative z-10 text-center max-w-2xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 font-display">Quer falar sobre RH na sua empresa?</h2>
                    <p class="text-lg text-white/80 mb-8">Nossa equipe está pronta para entender sua necessidade e propor a melhor solução.</p>
                    <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20servi%C3%A7os%20de%20Recursos%20Humanos" target="_blank" class="inline-flex items-center justify-center px-8 py-4 rounded-lg font-semibold text-primary bg-white hover:bg-slate-100 transition-all shadow-lg">Falar no WhatsApp</a>
                </div>
            </div>
        </div>
    </section>
<?php require __DIR__ . '/../inc/footer.php'; ?>