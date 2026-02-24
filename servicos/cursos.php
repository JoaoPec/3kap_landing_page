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
                    🎓 3KAP Academy
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6 font-display">
                    Universo de aprendizado em <span class="text-secondary-light">Contabilidade, Power BI, Auditoria e Excel</span>
                </h1>
                <p class="text-lg md:text-xl text-white/80 mb-8">
                    Plataforma de assinatura com trilhas completas em IFRS / CPC, ISA / NBC TA, Excel, Power BI e ferramentas de gestão,
                    para você praticar educação continuada e fortalecer sua carreira.
                </p>
            </div>
        </div>
    </section>

    <!-- ========== CURSOS ========== -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl overflow-hidden shadow-xl border border-slate-200 mb-16 bg-black">
                <div class="aspect-video">
                    <iframe title="Apresentação 3KAP Academy" src="https://player.vimeo.com/video/950880547?h=be4f9edbc3"
                        class="w-full h-full" frameborder="0"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span
                    class="inline-block px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-sm font-semibold mb-4">
                    Trilhas de aprendizado
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-6 font-display">
                    Cursos que acompanham a <span class="gradient-text">sua carreira</span>
                </h2>
                <p class="text-lg text-slate-600">
                    Acesso a um universo de conteúdos em contabilidade, auditoria, Excel, Power BI e ferramentas de gestão,
                    com atualizações semanais e certificados para educação continuada.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Trilha IFRS / CPC -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100 flex flex-col">
                    <div class="h-40 bg-gradient-to-br from-primary to-primary-light flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7h6m0 4H9m0 4h3m8 2a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h7l5 5v9z"/>
                        </svg>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <span class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold uppercase mb-3">IFRS / CPC</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Normas Internacionais de Contabilidade</h3>
                        <p class="text-slate-600 text-sm mb-4 flex-1">
                            Trilhas com CPC 00, CPC 01, CPC 03, CPC 04, CPC 05, CPC 06, CPC 07, CPC 16, CPC 20, CPC 23, CPC 24, CPC 25,
                            CPC 27, CPC 31, CPC 47 e atualizações.
                        </p>
                        <p class="text-xs text-slate-500 mb-4">Disponível nos planos: <span class="font-semibold">Sênior, Gestor e Corporativo</span>.</p>
                        <a href="https://www.3kap.com.br/treinamentos#ifrs-cpc" target="_blank"
                            class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-gradient-to-r from-primary to-primary-light hover:opacity-90 transition-all">
                            Ver detalhes na 3KAP Academy
                        </a>
                    </div>
                </div>

                <!-- Trilha Power BI -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100 flex flex-col">
                    <div class="h-40 bg-gradient-to-br from-secondary to-secondary-light flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5h4v14H4zM10 9h4v10h-4zM16 3h4v16h-4z"/>
                        </svg>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <span class="inline-block px-3 py-1 bg-secondary/10 text-secondary rounded-full text-xs font-bold uppercase mb-3">Power BI</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Power BI Essencial / Power 80/20</h3>
                        <p class="text-slate-600 text-sm mb-4 flex-1">
                            Módulos do básico ao avançado: funcionamento do Power BI, importação e tratamento de dados,
                            relações, fórmulas DAX, criação de relatórios e dashboards, além de modelos criativos.
                        </p>
                        <p class="text-xs text-slate-500 mb-4">Disponível nos planos: <span class="font-semibold">Sênior, Gestor e Corporativo</span>.</p>
                        <a href="https://www.3kap.com.br/treinamentos#power-bi" target="_blank"
                            class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-gradient-to-r from-secondary to-secondary-light hover:opacity-90 transition-all">
                            Ver trilha de Power BI
                        </a>
                    </div>
                </div>

                <!-- Trilha Excel -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100 flex flex-col">
                    <div class="h-40 bg-gradient-to-br from-emerald-500 to-primary flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4h16v16H4zM4 9h16M9 4v16"/>
                        </svg>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <span class="inline-block px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-xs font-bold uppercase mb-3">Excel</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Excel Essencial / Excel 80/20</h3>
                        <p class="text-slate-600 text-sm mb-4 flex-1">
                            Fundamentos de Excel mais usados na contabilidade e finanças, com foco em produtividade prática
                            para o dia a dia.
                        </p>
                        <p class="text-xs text-slate-500 mb-4">Disponível nos planos: <span class="font-semibold">Sênior, Gestor e Corporativo</span>.</p>
                        <a href="https://www.3kap.com.br/treinamentos#excel" target="_blank"
                            class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-gradient-to-r from-emerald-500 to-primary hover:opacity-90 transition-all">
                            Ver conteúdos de Excel
                        </a>
                    </div>
                </div>

                <!-- Trilha ISA / NBC TA -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100 flex flex-col">
                    <div class="h-40 bg-gradient-to-br from-primary to-slate-700 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v12m-6-6h12M5 4h14v16H5z"/>
                        </svg>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <span class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold uppercase mb-3">ISA / NBC TA</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Normas Técnicas de Auditoria</h3>
                        <p class="text-slate-600 text-sm mb-4 flex-1">
                            Estrutura Conceitual e principais NBC TAs (200, 210, 220, 230, 240, 250, 260, 265, 300, 315, 320,
                            330, 450, 500, 501, 505, 510, 520, 530, 540, 550, 560, 570, 580, 610, 620, 701, 705, 706).
                        </p>
                        <p class="text-xs text-slate-500 mb-4">Disponível nos planos: <span class="font-semibold">Sênior, Gestor e Corporativo</span>.</p>
                        <a href="https://www.3kap.com.br/treinamentos#isa-nbc" target="_blank"
                            class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-gradient-to-r from-primary to-slate-700 hover:opacity-90 transition-all">
                            Ver normas de auditoria
                        </a>
                    </div>
                </div>

                <!-- Ferramentas de Gestão em Excel -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100 flex flex-col">
                    <div class="h-40 bg-gradient-to-br from-orange-400 to-secondary flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13h6m-6-4h6m-9 8h12M5 7h.01M5 11h.01M5 15h.01"/>
                        </svg>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <span class="inline-block px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-bold uppercase mb-3">Ferramentas</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Ferramentas de Gestão em Excel</h3>
                        <p class="text-slate-600 text-sm mb-4 flex-1">
                            Diagrama de Ishikawa, diagnóstico empresarial, PDCA, POP, metas S.M.A.R.T, gráficos de tendência e outras ferramentas.
                        </p>
                        <p class="text-xs text-slate-500 mb-4">Disponível nos planos: <span class="font-semibold">Gestor e Corporativo</span>.</p>
                        <a href="https://www.3kap.com.br/treinamentos#ferramentas-excel" target="_blank"
                            class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-gradient-to-r from-orange-400 to-secondary hover:opacity-90 transition-all">
                            Ver ferramentas em Excel
                        </a>
                    </div>
                </div>

                <!-- Plano Instrucional de Desenvolvimento -->
                <div class="course-card bg-slate-50 rounded-2xl overflow-hidden border border-slate-100 flex flex-col">
                    <div class="h-40 bg-gradient-to-br from-slate-700 to-primary-dark flex items-center justify-center">
                        <svg class="w-16 h-16 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v8m0 0l-3-3m3 3l3-3M5 4h14v4H5zM5 20h14v-4H5z"/>
                        </svg>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <span class="inline-block px-3 py-1 bg-slate-200 text-slate-800 rounded-full text-xs font-bold uppercase mb-3">Desenvolvimento</span>
                        <h3 class="text-xl font-bold text-slate-800 mb-3 font-display">Plano Instrucional de Desenvolvimento</h3>
                        <p class="text-slate-600 text-sm mb-4 flex-1">
                            Avaliação de perfil, plano de ação personalizado, estudo de casos práticos e trilhas alinhadas
                            às necessidades da sua equipe.
                        </p>
                        <p class="text-xs text-slate-500 mb-4">Disponível apenas no plano: <span class="font-semibold">Corporativo</span>.</p>
                        <a href="https://www.3kap.com.br/treinamentos#plano-instrucional" target="_blank"
                            class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-gradient-to-r from-slate-700 to-primary-dark hover:opacity-90 transition-all">
                            Falar sobre plano corporativo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== PLANOS ========== -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block px-4 py-1.5 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-4">
                    Planos da 3KAP Academy
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4 font-display">
                    Escolha a assinatura que melhor combina com você
                </h2>
                <p class="text-lg text-slate-600">
                    Assinatura anual com acesso imediato às trilhas de Excel, Power BI, IFRS / CPC e ISA / NBC TA,
                    com atualizações semanais.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-10">
                <!-- Plano Sênior -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-8 flex flex-col">
                    <h3 class="text-xl font-bold text-slate-800 mb-1 font-display">Plano Sênior</h3>
                    <p class="text-sm text-slate-500 mb-4">Assinatura anual</p>
                    <p class="text-3xl font-bold text-primary mb-6">R$ 197,00</p>
                    <ul class="space-y-2 text-sm text-slate-600 flex-1">
                        <li class="flex items-start gap-2"><span class="mt-1 text-emerald-500">✔</span> Curso de Excel Essencial / Excel 80/20</li>
                        <li class="flex items-start gap-2"><span class="mt-1 text-emerald-500">✔</span> Power BI Essencial / Power 80/20</li>
                        <li class="flex items-start gap-2"><span class="mt-1 text-emerald-500">✔</span> IFRS / CPC – principais pronunciamentos</li>
                        <li class="flex items-start gap-2"><span class="mt-1 text-emerald-500">✔</span> ISA / NBC TA – normas de auditoria</li>
                        <li class="flex items-start gap-2"><span class="mt-1 text-emerald-500">✔</span> Atualizações semanais com novos conteúdos</li>
                        <li class="flex items-start gap-2 text-slate-400"><span class="mt-1">✖</span> Ferramentas de gestão em Excel</li>
                        <li class="flex items-start gap-2 text-slate-400"><span class="mt-1">✖</span> Plano instrucional de desenvolvimento</li>
                    </ul>
                    <a href="https://www.3kap.com.br/treinamentos#planos" target="_blank"
                        class="mt-6 inline-flex items-center justify-center px-6 py-3 rounded-lg font-semibold text-white bg-gradient-to-r from-primary to-primary-light hover:opacity-90 transition-all">
                        Assinar Plano Sênior
                    </a>
                </div>

                <!-- Plano Gestor -->
                <div class="bg-white rounded-2xl border-2 border-secondary shadow-md p-8 flex flex-col relative">
                    <div class="absolute -top-3 right-6 px-3 py-1 rounded-full bg-secondary text-white text-xs font-semibold shadow-sm">
                        Mais escolhido
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-1 font-display">Plano Gestor</h3>
                    <p class="text-sm text-slate-500 mb-4">Assinatura anual</p>
                    <p class="text-3xl font-bold text-secondary mb-6">R$ 297,00</p>
                    <ul class="space-y-2 text-sm text-slate-600 flex-1">
                        <li class="flex items-start gap-2"><span class="mt-1 text-emerald-500">✔</span> Tudo do Plano Sênior</li>
                        <li class="flex items-start gap-2"><span class="mt-1 text-emerald-500">✔</span> Ferramentas de gestão em Excel (Ishikawa, PDCA, Diagnóstico, S.M.A.R.T, gráficos de tendência etc.)</li>
                        <li class="flex items-start gap-2 text-slate-400"><span class="mt-1">✖</span> Plano instrucional de desenvolvimento</li>
                    </ul>
                    <a href="https://www.3kap.com.br/treinamentos#planos" target="_blank"
                        class="mt-6 inline-flex items-center justify-center px-6 py-3 rounded-lg font-semibold text-white bg-gradient-to-r from-secondary to-secondary-light hover:opacity-90 transition-all">
                        Assinar Plano Gestor
                    </a>
                </div>

                <!-- Plano Corporativo -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-8 flex flex-col">
                    <h3 class="text-xl font-bold text-slate-800 mb-1 font-display">Plano Corporativo</h3>
                    <p class="text-sm text-slate-500 mb-4">Assinatura anual</p>
                    <p class="text-3xl font-bold text-slate-800 mb-2">A consultar</p>
                    <p class="text-sm text-slate-500 mb-6">Ideal para empresas que querem desenvolver times inteiros.</p>
                    <ul class="space-y-2 text-sm text-slate-600 flex-1">
                        <li class="flex items-start gap-2"><span class="mt-1 text-emerald-500">✔</span> Tudo do Plano Gestor</li>
                        <li class="flex items-start gap-2"><span class="mt-1 text-emerald-500">✔</span> Plano instrucional de desenvolvimento</li>
                        <li class="flex items-start gap-2"><span class="mt-1 text-emerald-500">✔</span> Avaliação de perfil dos colaboradores</li>
                        <li class="flex items-start gap-2"><span class="mt-1 text-emerald-500">✔</span> Plano de ação de desenvolvimento personalizado</li>
                        <li class="flex items-start gap-2"><span class="mt-1 text-emerald-500">✔</span> Estudos de casos práticos e trilhas sob medida</li>
                    </ul>
                    <a href="https://wa.me/5571999153592?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20o%20Plano%20Corporativo%20da%203KAP%20Academy"
                        target="_blank"
                        class="mt-6 inline-flex items-center justify-center px-6 py-3 rounded-lg font-semibold text-primary bg-slate-100 hover:bg-slate-200 transition-all">
                        Falar com o time comercial
                    </a>
                </div>
            </div>

            <p class="text-center text-sm text-slate-500 max-w-3xl mx-auto">
                Formas de pagamento, emissão de nota fiscal e demais detalhes seguem as condições apresentadas na página oficial da
                <a href="https://www.3kap.com.br/treinamentos" target="_blank" class="text-secondary font-semibold hover:underline">3KAP Academy</a>.
            </p>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
<?php require __DIR__ . '/../inc/footer.php'; ?>