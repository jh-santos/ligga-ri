<?php
/*
/ Template Name: Pagina Relatorios anuais v1
*/

/**
 * @author [João Henrique]
 * @email [joaohenrique@jobspace.com.br]
 * @desc [Pagina Relatorios anuais v1]
 */
?>
<?php get_template_part('config/header_default'); ?>


<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <main id="assembleias-e-reunioes_v1" class="assembleias-e-reunioes">
            <?php get_template_part('components/menu_01'); ?>
            <?php get_template_part('components/modulo_07'); ?>
            <?php get_template_part('components/modulo_11'); ?>



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