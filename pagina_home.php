<?php
/*
/ Template Name: Pagina Home v1
*/

/**
 * @author [João Henrique]
 * @email [joaohenrique@jobspace.com.br]
 * @desc [Pagina Home v1]
 */
?>
<?php get_template_part('config/header_default'); ?>


<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <main id="pagina_home_v1" class="pagina_home">
            <?php get_template_part('components/menu_01'); ?>
            <?php if (have_rows('modulo_01')) : ?>
                <?php while (have_rows('modulo_01')) : the_row(); ?>
                    <?php get_template_part('components/modulo_01'); ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php get_template_part('components/rodape_01'); ?>
        </main>
    <?php endwhile ?>
<?php endif ?>
<?php get_template_part('config/footer_default'); ?>
<!-- por definição use o script dentro de cada modulo com async -->