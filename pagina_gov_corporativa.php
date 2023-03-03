<?php
/*
/ Template Name: Pagina Gov corporativa v1
*/

/**
 * @author [João Henrique]
 * @email [joaohenrique@jobspace.com.br]
 * @desc [Pagina Gov corporativa v1]
 */
?>
<?php get_template_part('config/header_default'); ?>


<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <main id="gov_corporativa_v1" class="gov_corporativa">
            <?php get_template_part('components/menu_01'); ?>
            <?php get_template_part('components/modulo_04'); ?>
            <?php get_template_part('components/modulo_10'); ?>
            <?php get_template_part('components/modulo_03'); ?>
            <?php get_template_part('components/modulo_09'); ?>


            <?php get_template_part('components/rodape_01'); ?>
        </main>
    <?php endwhile ?>
<?php endif ?>
<?php get_template_part('config/footer_default'); ?>
<!-- por definição use o script dentro de cada modulo com async -->
<script async>
    $(document).ready(function() {
        $('.menu').addClass('versao-2');
    });
    window.addEventListener('load', function() {

    });
</script>