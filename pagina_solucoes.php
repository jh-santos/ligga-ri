<?php
/*
/ Template Name: Pagina Soluções v1
*/

/**
 * @author [João Henrique]
 * @email [joaohenrique@jobspace.com.br]
 * @desc [Pagina Soluções v1]
 */
?>
<?php get_template_part('config/header_default'); ?>


<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <main id="pagina_solucoes_v1" class="pagina_solucoes">
            <?php get_template_part('components/menu_01'); ?>
            <?php get_template_part('components/modulo_07'); ?>
            <?php get_template_part('components/modulo_03'); ?>
            <?php get_template_part('components/modulo_08'); ?>


            <?php get_template_part('components/rodape_01'); ?>
        </main>
    <?php endwhile ?>
<?php endif ?>
<?php get_template_part('config/footer_default'); ?>
<!-- por definição use o script dentro de cada modulo com async -->
<script async>
    $(document).ready(function() {
        $('.menu').addClass('versao-2');
        $('.modulo_03').removeClass('bg_color');
    });
    window.addEventListener('load', function() {

    });
</script>