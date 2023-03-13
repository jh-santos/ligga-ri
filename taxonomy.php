<?php get_template_part('config/header_default'); ?>


<main id="relatorios_anuais_v1" class="relatorios_anuais">
    <?php get_template_part('components/menu_01'); ?>
    <?php
    // Define taxonomy prefix eg category
    // Use term for all taxonomies
    $taxonomy_prefix = 'categoria';

    // Define term ID
    // Replace NULL with ID of term to be queried eg '123'
    $term_id = NULL;

    // Example: Get the term ID in a term archive template
    // $term_id = get_queried_object_id();

    // Define prefixed term ID
    $term_id_prefixed = $taxonomy_prefix . '_' . $term_id;
    ?>
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