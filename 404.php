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
<main id="p404_v1" class="p404">
    <?php get_template_part('components/menu_01'); ?>
    <?php get_template_part('components/modulo_15'); ?>
</main>
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