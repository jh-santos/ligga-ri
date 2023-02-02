<?php
/*
/ Template Name: Pagina Sobre v1
*/

/**
 * @author [João Henrique]
 * @email [joaohenrique@jobspace.com.br]
 * @desc [Pagina Sobre v1]
 */
?>
<?php get_template_part('config/header_default'); ?>


<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <main id="pagina_sobre_v1" class="pagina_sobre">
            <?php get_template_part('components/menu_01'); ?>


            <?php get_template_part('components/rodape_01'); ?>
        </main>
    <?php endwhile ?>
<?php endif ?>
<?php get_template_part('config/footer_default'); ?>
<!-- por definição use o script dentro de cada modulo com async -->