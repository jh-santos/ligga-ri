<section class='modulo_18'>
    <div class="container-lg">
        <div class="row ">
            <div class="col-12">

            </div>
            <div class="col-12">
                <div class="bloco bloco-2">

                    <div class="grupo px-md-0">
                        <?php
                        $s = get_search_query();
                        $args = array(
                            's' => $s
                        );
                        // The Query
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) {; ?>
                            <h2 class="titulo f-800"><?php echo $total_results = $wp_query->found_posts; ?> Resultados para o Termo : "<?php echo  get_query_var('s'); ?>"</h2>
                            <div class="container-lista">
                                <div class="grupo-lista">
                                    <?php while ($the_query->have_posts()) {
                                        $the_query->the_post();
                                    ?>
                                        <?php $arquivo = get_field('arquivo'); ?>
                                        <a ano-post="<?php echo get_the_date('Y') ?>" class="item" href="<?php echo esc_url($arquivo['url']); ?>" target="_blank">
                                            <span class="sub-1 f-800 text-uppercase"><?php echo date('d-M'); ?> -</span>&nbsp;
                                            <span class="sub-1"><?php the_title(); ?></span>&nbsp;
                                        </a>
                                    <?php
                                    }; ?>
                                </div>
                            </div>

                        <?php } else {
                        ?>
                            <h2 class="titulo f-800">Nenhum resultado para o Termo : "<?php echo  get_query_var('s'); ?>"</h2>

                        <?php } ?>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<script async>
    $(document).ready(function() {

    });
    window.addEventListener('load', function() {

    });
</script>