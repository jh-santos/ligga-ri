<section class='modulo_10'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12'>
                <div class="bloco bloco-1">
                    <button class="titulo f-800 item item-1 ativo" grupo="1">Administração</button>
                    <button class="titulo f-800 item item-2" grupo="2">Diretoria</button>
                    <button class="titulo f-800 item item-3" grupo="3">Conselhos</button>
                    <button class="titulo f-800 item item-4" grupo="4">Comitês</button>
                </div>
                <div class="bloco bloco-2">
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="2">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="2">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>

                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="2">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="2">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="2">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="2">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="1">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="2">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-1" grupo="2">
                        <img loading="lazy" class="img-fluid w-100" src="<?php bloginfo('template_url'); ?>/assets/img/modulo_10_1.webp" alt="">
                    </div>
                    <div class="item item-3" grupo="3"></div>
                    <div class="item item-4" grupo="3"></div>
                    <div class="item item-5" grupo="3"></div>
                    <div class="item item-5" grupo="3"></div>
                    <div class="item item-5" grupo="3"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<script async>
    $(document).ready(function() {
        $('.modulo_10 .bloco-1 .item').on('click', function() {
            event.preventDefault();
            var temp = $(this).attr('grupo');
            $('.modulo_10 .bloco-1 .item').removeClass('ativo');
            $('.modulo_10 .bloco-2 .item').removeClass('ativo');
            $(this).addClass('ativo');
            $('.modulo_10 .bloco-2 .item[grupo="' + temp + '"]').addClass('ativo');
            // calculo da altura
            var quant = $('.modulo_10 .bloco-2 .item.ativo').length;
            // console.log(quant)
            var resp = quant / 4;
            console.log(resp)
        })

    });
    window.addEventListener('load', function() {

    });
</script>