<?php if (!defined('BASE_PATH')) require __DIR__ . '/../config.php';
$script = str_replace('\\', '/', $_SERVER['PHP_SELF'] ?? '');
$isAuditoria = (strpos($script, 'auditoria') !== false);
$isRh = (strpos($script, 'rh.php') !== false || (strpos($script, 'rh') !== false && strpos($script, 'rh.html') === false && strpos($script, 'rh') !== false));
$isTi = (strpos($script, 'ti') !== false);
$isBlog = (strpos($script, 'blog') !== false && strpos($script, 'blog-post') === false);
$isCursos = (strpos($script, 'cursos') !== false);
?>
    <!-- ========== HEADER ========== -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="<?= url('index.php') ?>" class="flex items-center gap-2">
                    <span class="text-3xl font-bold font-display text-primary">3<span class="gradient-text">kap</span></span>
                    <span class="text-xs uppercase tracking-widest text-slate-400 font-medium">Group</span>
                </a>
                <nav class="hidden lg:flex items-center gap-8">
                    <a href="<?= url('index.php') ?>" class="relative text-sm font-medium <?= (strpos($script, 'index') !== false && strpos($script, 'servicos') === false ? 'text-primary' : 'text-slate-600 hover:text-primary') ?> transition-colors nav-link">Home</a>
                    <a href="<?= url('index.php') ?>#sobre" class="relative text-sm font-medium text-slate-600 hover:text-primary transition-colors nav-link">Quem Somos</a>
                    <div class="relative group">
                        <button class="flex items-center gap-1 text-sm font-medium text-slate-600 hover:text-primary transition-colors">Áreas de Atuação <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button>
                        <div class="absolute top-full left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-2 min-w-[240px]">
                                <a href="<?= url('servicos/auditoria.php') ?>" class="block px-4 py-2.5 text-sm <?= $isAuditoria ? 'text-primary font-medium bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50' ?> rounded-lg transition-colors">Auditoria</a>
                                <a href="<?= url('servicos/rh.php') ?>" class="block px-4 py-2.5 text-sm <?= $isRh ? 'text-primary font-medium bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50' ?> rounded-lg transition-colors">Recursos Humanos (RH)</a>
                                <a href="<?= url('servicos/ti.php') ?>" class="block px-4 py-2.5 text-sm <?= $isTi ? 'text-primary font-medium bg-slate-50' : 'text-slate-600 hover:text-primary hover:bg-slate-50' ?> rounded-lg transition-colors">Tecnologia da Informação (TI)</a>
                            </div>
                        </div>
                    </div>
                    <a href="<?= url('servicos/cursos.php') ?>" class="relative text-sm font-medium <?= $isCursos ? 'text-primary' : 'text-slate-600 hover:text-primary' ?> transition-colors nav-link">3KAP Academy</a>
                    <a href="<?= url('blog.php') ?>" class="relative text-sm font-medium <?= $isBlog ? 'text-primary' : 'text-slate-600 hover:text-primary' ?> transition-colors nav-link">Artigos</a>
                    <div class="flex items-center gap-2">
                        <a href="https://www.linkedin.com/company/3kap-auditoria-e-consultoria/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 bg-slate-100 rounded-lg flex items-center justify-center hover:bg-secondary hover:text-white text-slate-600 transition-colors" title="LinkedIn"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                        <a href="https://www.instagram.com/3kap_auditoria/" target="_blank" rel="noopener noreferrer" class="w-9 h-9 bg-slate-100 rounded-lg flex items-center justify-center hover:bg-secondary hover:text-white text-slate-600 transition-colors" title="Instagram"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                    </div>
                    <a href="<?= url('index.php') ?>#contato" class="inline-flex items-center justify-center px-6 py-2.5 rounded-lg font-semibold text-white text-sm bg-gradient-to-r from-secondary to-secondary-light hover:opacity-90 transition-all hover:-translate-y-0.5 shadow-lg shadow-secondary/25">Contato</a>
                </nav>
                <button id="mobile-menu-btn" class="lg:hidden p-2 text-slate-700"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg></button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-slate-100">
            <nav class="max-w-7xl mx-auto px-4 py-4 space-y-1">
                <a href="<?= url('index.php') ?>" class="block py-3 px-4 text-slate-600 hover:text-primary transition-colors">Home</a>
                <a href="<?= url('index.php') ?>#sobre" class="block py-3 px-4 text-slate-600 hover:text-primary transition-colors">Quem Somos</a>
                <span class="block py-2 px-4 text-xs font-semibold text-slate-400 uppercase">Áreas de Atuação</span>
                <a href="<?= url('servicos/auditoria.php') ?>" class="block py-2 pl-6 pr-4 text-slate-600 hover:text-primary transition-colors">Auditoria</a>
                <a href="<?= url('servicos/rh.php') ?>" class="block py-2 pl-6 pr-4 text-slate-600 hover:text-primary transition-colors">Recursos Humanos (RH)</a>
                <a href="<?= url('servicos/ti.php') ?>" class="block py-2 pl-6 pr-4 text-slate-600 hover:text-primary transition-colors">Tecnologia da Informação (TI)</a>
                <a href="<?= url('servicos/cursos.php') ?>" class="block py-3 px-4 text-slate-600 hover:text-primary transition-colors">3kap Academy</a>
                <a href="<?= url('blog.php') ?>" class="block py-3 px-4 text-slate-600 hover:text-primary transition-colors">Artigos</a>
                <div class="pt-4 flex justify-center gap-3">
                    <a href="https://www.linkedin.com/company/3kap-auditoria-e-consultoria/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-slate-100 rounded-lg flex items-center justify-center hover:bg-secondary hover:text-white text-slate-600 transition-colors" title="LinkedIn"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                    <a href="https://www.instagram.com/3kap_auditoria/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-slate-100 rounded-lg flex items-center justify-center hover:bg-secondary hover:text-white text-slate-600 transition-colors" title="Instagram"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                </div>
                <div class="pt-2"><a href="<?= url('index.php') ?>#contato" class="block w-full text-center py-3 px-6 rounded-lg font-semibold text-white bg-gradient-to-r from-secondary to-secondary-light">Contato</a></div>
            </nav>
        </div>
    </header>
