<?php
/*
/ Template Name: Pagina Serviços ao Investidor v1
*/

/**
 * @author [João Henrique]
 * @email [joaohenrique@jobspace.com.br]
 * @desc [Pagina Serviços ao Investidor v1]
 */
?>
<?php get_template_part('config/header_default'); ?>


<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <main id="servicos_ao_investidor_v1" class="servicos_ao_investidor">
            <?php get_template_part('components/menu_01'); ?>
            <?php get_template_part('components/modulo_04'); ?>
            <?php get_template_part('components/modulo_13'); ?>
            <?php get_template_part('components/modulo_12'); ?>



            <?php get_template_part('components/rodape_01'); ?>
        </main>
    <?php endwhile ?>
<?php endif ?>
<?php get_template_part('config/footer_default'); ?>
<!-- por definição use o script dentro de cada modulo com async -->
<script async>
    $(document).ready(function() {
        $('.menu').addClass('versao-2');
        $(this).outerHeight()
    });
    window.addEventListener('load', function() {

    });
</script>