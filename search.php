<?php
/*
Template Name: Search Page
*/
?>

<?php get_template_part('config/header_default'); ?>
<main id="pagina_busca_v1" class="pagina_busca">

    <?php get_template_part('components/menu_01'); ?>

    <?php get_template_part('components/modulo_17'); ?>
    <?php get_template_part('components/modulo_18'); ?>
    <?php get_template_part('components/modulo_06'); ?>



    <?php get_template_part('components/rodape_01'); ?>
</main>

<?php get_template_part('config/footer_default'); ?>
<script async>
    $(document).ready(function() {
        $('.menu').addClass('versao-2');
    });
    window.addEventListener('load', function() {

    });
</script>