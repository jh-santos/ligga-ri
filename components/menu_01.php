<header class="menu_01 menu">
    <div class="menu-top">
        <div class="d-flex align-items-center justify-content-between h-100">
            <div class="grupo grupo-1">
                <a class="titulo f-900" href="<?php echo home_url(); ?>">LIGGA</a>
            </div>
            <div class="grupo grupo-2">
                <a class="titulo f-900" href="<?php echo home_url(); ?>">ACESSIBILIDADE</a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg menu-central">
        <div class="bloco bloco-1">
            <a href="<?php echo home_url(); ?>">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/icone-ligga-investidores.svg" alt="" class="logo">
            </a>
        </div>
        <?php wp_nav_menu(array(
            'theme_location'  => 'menu-padrao',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'menu-padrao',
            'menu_class'      => 'navbar-nav  bloco bloco-2 ml-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        )); ?>
        <div class="btn-nav">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#menu-padrao" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
        </div>
        <div class="bloco bloco-3">
            <div class="grupo grupo-1">
                <div class="item-2">
                    <div class="busca">
                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.97941 10.5779L0.124082 13.4326L1.06741 14.3759L3.92208 11.5206C4.98425 12.3721 6.30541 12.8352 7.66675 12.8333C10.9787 12.8333 13.6667 10.1453 13.6667 6.83325C13.6667 3.52125 10.9787 0.833252 7.66675 0.833252C4.35475 0.833252 1.66675 3.52125 1.66675 6.83325C1.66481 8.19459 2.12793 9.51575 2.97941 10.5779ZM4.31675 10.0833C3.47067 9.21318 2.99817 8.04687 3.00008 6.83325C3.00008 4.25459 5.08875 2.16659 7.66675 2.16659C10.2454 2.16659 12.3334 4.25459 12.3334 6.83325C12.3334 9.41125 10.2454 11.4999 7.66675 11.4999C6.45313 11.5018 5.28682 11.0293 4.41675 10.1833L4.31675 10.0833Z" fill="white" />
                        </svg>
                        <input class="form-input" class="w-100" type="text">
                    </div>
                    <button class="btn-2" busca="close">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 8L3 3M8 8L13 13M8 8L13 3M8 8L3 13" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="item-1">
                    <button class="btn-2" busca="open">
                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.97941 10.5779L0.124082 13.4326L1.06741 14.3759L3.92208 11.5206C4.98425 12.3721 6.30541 12.8352 7.66675 12.8333C10.9787 12.8333 13.6667 10.1453 13.6667 6.83325C13.6667 3.52125 10.9787 0.833252 7.66675 0.833252C4.35475 0.833252 1.66675 3.52125 1.66675 6.83325C1.66481 8.19459 2.12793 9.51575 2.97941 10.5779ZM4.31675 10.0833C3.47067 9.21318 2.99817 8.04687 3.00008 6.83325C3.00008 4.25459 5.08875 2.16659 7.66675 2.16659C10.2454 2.16659 12.3334 4.25459 12.3334 6.83325C12.3334 9.41125 10.2454 11.4999 7.66675 11.4999C6.45313 11.5018 5.28682 11.0293 4.41675 10.1833L4.31675 10.0833Z" fill="white" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="bloco bloco-4"></div>

    </nav>

    <div class="overlay"></div>
</header>

<h1 hidden style="opacity: 0;width:0;height:0;">
    <?php if (get_field('tag_h1')) {; ?>
        <?php the_field('tag_h1'); ?>
    <?php } else { ?>
        <?php the_title(); ?>
    <?php }; ?>
</h1>
<script async>
    $(document).ready(function() {
        $('.menu_01 .dropdown .nav-link').on('click', function() {

            var temp = $(this).attr('aria-expanded'),
                pai = $(this).parent('li'),
                tamanho = pai.find('.dropdown-menu .nav-item').outerHeight(),
                quant = $(this).siblings('.dropdown-menu').find('.dropdown-item').length,
                resp = tamanho * quant;
            // console.log(temp, tamanho, quant, resp, pai);
            closeAll();
            if (temp == 'false') {
                $(this).siblings('.dropdown-menu').css('height', resp).addClass('ativo');
                $('.menu_01 .overlay').addClass('ativo');
                $('.menu_01 .collapse').addClass('show');
            }
        })
        $('.menu_01 .overlay').on('click', function() {
            closeAll();
        })
        $('.menu_01 .bloco-3 .btn-2').on('click', function() {
            var temp = $(this).attr('busca');
            if (temp == 'open') {
                closeAll();
                // abrir busca
                $('.menu_01 .bloco-3 .grupo-1').addClass('ativo');
                $('.menu_01 .bloco-2').addClass('disabled');
                $('.menu_01 .bloco-3 .grupo-1 .busca .form-input').val('');
                $('.menu_01 .bloco-3 .grupo-1 .busca .form-input').focus();
                $('.menu_01 .overlay').addClass('ativo');
            } else if (temp == 'close') {
                closeAll();
            }

        });

        function closeAll() {

            // fechar menus
            $('.menu_01 .nav-item .dropdown-menu').css('height', '0').removeClass('ativo');
            $('.menu_01 .overlay').removeClass('ativo');
            $('.menu_01 .overlay').removeClass('ativo');
            $('.menu_01 .bloco-2').removeClass('disabled');
            // fechar busca
            $('.menu_01 .bloco-3 .grupo-1 .busca .form-input').val('');
            $('.menu_01 .bloco-3 .grupo-1').removeClass('ativo');
            $('.menu_01 .overlay').removeClass('ativo');
            // menu mobile
            $('menu_01 .collapse').removeClass('show');

        }
    });
    window.addEventListener('load', function() {

    });
</script>