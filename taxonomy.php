<?php get_template_part('config/header_default'); ?>


<main id="relatorios_anuais_v1" class="relatorios_anuais">
    <?php get_template_part('components/menu_01'); ?>
    <?php get_template_part('components/modulo_16'); ?>
    <?php get_template_part('components/modulo_11'); ?>



    <?php get_template_part('components/rodape_01'); ?>
</main>
<?php get_template_part('config/footer_default'); ?>
<!-- por definição use o script dentro de cada modulo com async -->
<script async>
    $(document).ready(function() {
        $('.menu').addClass('versao-2');
    });
    window.addEventListener('load', function() {

    });
</script>