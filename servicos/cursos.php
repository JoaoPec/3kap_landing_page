<?php
require_once __DIR__ . '/../config.php';
$pageTitle = '3KAP Academy - Cursos';
$pageDescription = 'Cursos da 3KAP Academy - Tenha uma carreira de sucesso praticando Lifelong Learning.';
$pageKeywords = '3KAP Academy, cursos, treinamentos';
require __DIR__ . '/../inc/head.php';
require __DIR__ . '/../inc/header.php';
?>
<!-- ========== HERO ========== -->
    <section class="relative pt-32 pb-20 overflow-hidden">
        <a href="<?= url('index.php') ?>" class="absolute top-32 left-4 sm:left-6 lg:left-8 z-20 flex items-center gap-2 text-sm font-medium text-white/90 hover:text-white transition-colors" title="Voltar à página inicial"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg><span>Voltar</span></a>
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-primary-dark via-primary to-primary-light"></div>
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-secondary/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-[400px] h-[400px] bg-white/5 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <span
                    class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium mb-6 border border-white/20">
                    🎓 3kap Academy
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6 font-display">
                    Tenha uma carreira de <span class="text-secondary-light">sucesso</span>
                </h1>
                <p class="text-lg md:text-xl text-white/80 mb-8">
                    Torne a sua vida mais prática! Otimize suas atividades com nossos cursos e materiais.
                    Pratique Lifelong Learning e assine a 3KAP Academy.
                </p>
            </div>
        </div>
    </section>

    <!-- ========== CURSOS ========== -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span
                    class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-sm font-semibold mb-4">
                    Nossos Cursos
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-6 font-display">
                    Escolha seu <span class="gradient-text">próximo passo</span>
                </h2>
                <p class="text-lg text-slate-600">
                    Cursos desenvolvidos por especialistas para impulsionar sua carreira na área financeira e contábil.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Curso 1 -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100">
                    <div class="h-48 bg-gradient-to-br from-primary to-primary-light flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold uppercase mb-3">Cálculos</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Cálculos Trabalhista</h3>
                        <p class="text-slate-600 text-sm mb-6">Aprenda a realizar cálculos trabalhistas de forma prática
                            e eficiente.</p>
                        <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Tenho%20interesse%20no%20curso%20de%20C%C3%A1lculos%20Trabalhista"
                            target="_blank"
                            class="block w-full text-center py-3 px-6 rounded-lg font-semibold text-white bg-gradient-to-r from-primary to-primary-light hover:opacity-90 transition-all">
                            Acesse Já
                        </a>
                    </div>
                </div>

                <!-- Curso 2 -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100">
                    <div class="h-48 bg-gradient-to-br from-secondary to-secondary-light flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-secondary/10 text-secondary rounded-full text-xs font-bold uppercase mb-3">Compliance</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Compliance Trabalhista</h3>
                        <p class="text-slate-600 text-sm mb-6">Domine as melhores práticas de compliance na área
                            trabalhista.</p>
                        <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Tenho%20interesse%20no%20curso%20de%20Compliance%20Trabalhista"
                            target="_blank"
                            class="block w-full text-center py-3 px-6 rounded-lg font-semibold text-white bg-gradient-to-r from-secondary to-secondary-light hover:opacity-90 transition-all">
                            Acesse Já
                        </a>
                    </div>
                </div>

                <!-- Curso 3 -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100">
                    <div class="h-48 bg-gradient-to-br from-primary-light to-secondary flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold uppercase mb-3">Governança</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Curso Comitê de Auditoria</h3>
                        <p class="text-slate-600 text-sm mb-6">Entenda o papel e funcionamento do comitê de auditoria
                            nas organizações.</p>
                        <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Tenho%20interesse%20no%20curso%20Comit%C3%AA%20de%20Auditoria"
                            target="_blank"
                            class="block w-full text-center py-3 px-6 rounded-lg font-semibold text-white bg-gradient-to-r from-primary-light to-secondary hover:opacity-90 transition-all">
                            Acesse Já
                        </a>
                    </div>
                </div>

                <!-- Curso 4 -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100">
                    <div class="h-48 bg-gradient-to-br from-primary to-primary-light flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold uppercase mb-3">Gestão</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Curso Controladoria</h3>
                        <p class="text-slate-600 text-sm mb-6">Desenvolva habilidades essenciais para a área de
                            controladoria.</p>
                        <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Tenho%20interesse%20no%20curso%20de%20Controladoria"
                            target="_blank"
                            class="block w-full text-center py-3 px-6 rounded-lg font-semibold text-white bg-gradient-to-r from-primary to-primary-light hover:opacity-90 transition-all">
                            Acesse Já
                        </a>
                    </div>
                </div>

                <!-- Curso 5 -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100">
                    <div class="h-48 bg-gradient-to-br from-secondary to-secondary-light flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-secondary/10 text-secondary rounded-full text-xs font-bold uppercase mb-3">BI</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Curso de Power BI</h3>
                        <p class="text-slate-600 text-sm mb-6">Aprenda a criar dashboards e relatórios profissionais com
                            Power BI.</p>
                        <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Tenho%20interesse%20no%20curso%20de%20Power%20BI"
                            target="_blank"
                            class="block w-full text-center py-3 px-6 rounded-lg font-semibold text-white bg-gradient-to-r from-secondary to-secondary-light hover:opacity-90 transition-all">
                            Acesse Já
                        </a>
                    </div>
                </div>

                <!-- Curso 6 -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100">
                    <div
                        class="h-48 bg-gradient-to-br from-primary-light to-secondary flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <span
                            class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold uppercase mb-3">Investigação</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Curso Fraude Contábil</h3>
                        <p class="text-slate-600 text-sm mb-6">Identifique e previna fraudes contábeis em sua
                            organização.</p>
                        <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Tenho%20interesse%20no%20curso%20de%20Fraude%20Cont%C3%A1bil"
                            target="_blank"
                            class="block w-full text-center py-3 px-6 rounded-lg font-semibold text-white bg-gradient-to-r from-primary-light to-secondary hover:opacity-90 transition-all">
                            Acesse Já
                        </a>
                    </div>
                </div>

                <!-- Curso 7 -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100">
                    <div class="h-48 bg-gradient-to-br from-primary to-primary-light flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <span
                            class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold uppercase mb-3">Normas</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Normas de Auditoria Contábil</h3>
                        <p class="text-slate-600 text-sm mb-6">Domine as principais normas de auditoria contábil
                            aplicáveis.</p>
                        <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Tenho%20interesse%20no%20curso%20de%20Normas%20de%20Auditoria%20Cont%C3%A1bil"
                            target="_blank"
                            class="block w-full text-center py-3 px-6 rounded-lg font-semibold text-white bg-gradient-to-r from-primary to-primary-light hover:opacity-90 transition-all">
                            Acesse Já
                        </a>
                    </div>
                </div>

                <!-- Curso 8 -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100">
                    <div
                        class="h-48 bg-gradient-to-br from-secondary to-secondary-light flex items-center justify-center">
                        <svg class="w-20 h-20 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <span
                            class="inline-block px-3 py-1 bg-secondary/10 text-secondary rounded-full text-xs font-bold uppercase mb-3">Prática</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Testes de Auditoria Contábil</h3>
                        <p class="text-slate-600 text-sm mb-6">Aprenda a aplicar testes de auditoria de forma eficiente.
                        </p>
                        <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Tenho%20interesse%20no%20curso%20de%20Testes%20de%20Auditoria%20Cont%C3%A1bil"
                            target="_blank"
                            class="block w-full text-center py-3 px-6 rounded-lg font-semibold text-white bg-gradient-to-r from-secondary to-secondary-light hover:opacity-90 transition-all">
                            Acesse Já
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-gradient-to-br from-primary to-primary-light rounded-3xl p-8 md:p-16 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-secondary/20 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-white/5 rounded-full blur-3xl"></div>

                <div class="relative z-10 text-center max-w-2xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 font-display">
                        Não encontrou o que procura?
                    </h2>
                    <p class="text-lg text-white/80 mb-8">
                        Entre em contato conosco! Temos mais opções de cursos e podemos criar treinamentos
                        personalizados para sua empresa.
                    </p>
                    <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20cursos%20da%203KAP%20Academy"
                        target="_blank"
                        class="inline-flex items-center justify-center px-8 py-4 rounded-lg font-semibold text-primary bg-white hover:bg-slate-100 transition-all hover:-translate-y-0.5 shadow-lg group">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                        Falar no WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
<?php require __DIR__ . '/../inc/footer.php'; ?>