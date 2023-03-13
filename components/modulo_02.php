<!-- modulo_02 acf modulo_02_1 -->
<section class='modulo_02'>
    <div class='container-lg px-0 px-md-3'>
        <div class='row no-gutters mx-md-n3'>
            <div class='col-md-6 px-md-3 mx-auto'>
                <div class="grupo grupo-1">
                    <?php $modulo_02_1 = get_field('modulo_02_1'); ?>
                    <?php $term = get_term_by('id', $modulo_02_1, 'categoria'); ?>
                    <a href="<?php echo esc_url(get_term_link($term)); ?>"></a>
                    <h2 class="titulo f-800"><?php echo esc_html($term->name); ?></h2>
                    <div class="grupo-lista">
                        <?php $args = array(
                            'post_type' => 'documentos',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categoria',
                                    'field' => 'slug',
                                    'terms' => $term->slug,
                                    'post_per_page' => 5,
                                    'orderby' => 'modified',
                                    'order'   => 'DESC',
                                ),
                            ),
                        );

                        $query = new WP_Query($args);
                        if ($query->have_posts()) : while ($query->have_posts()) :
                                $query->the_post(); ?>
                                <?php $arquivo = get_field('arquivo'); ?>
                                <?php if ($arquivo) : ?>
                                    <a class="item" href="<?php echo esc_url($arquivo['url']); ?>" download="<?php echo date('d-M'); ?> - <?php the_title(); ?>">
                                        <span class="sub-1 f-800 text-uppercase"><?php echo date('d-M'); ?> -</span>&nbsp;
                                        <span class="sub-1"><?php the_title(); ?></span>&nbsp;
                                    </a>
                                <?php endif; ?>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata();; ?>

                    </div>
                    <div class="d-none justify-content-center justify-content-md-start">
                        <a class="btn-1" href="">Ver todos</a>
                    </div>
                </div>
            </div>
            <div class='col-md-6 px-md-3'>
                <div class="grupo grupo-2 px-md-0">
                    <?php $modulo_02_2 = get_field('modulo_02_2'); ?>
                    <?php $term = get_term_by('id', $modulo_02_2, 'categoria'); ?>
                    <a href="<?php echo esc_url(get_term_link($term)); ?>"></a>
                    <h2 class="titulo f-800"><?php echo esc_html($term->name); ?></h2>
                    <div class="grupo-lista">
                        <?php $args = array(
                            'post_type' => 'documentos',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categoria',
                                    'field' => 'slug',
                                    'terms' => $term->slug,
                                    'post_per_page' => 5,
                                    'orderby' => 'modified',
                                    'order'   => 'DESC',
                                ),
                            ),
                        );

                        $query = new WP_Query($args);
                        if ($query->have_posts()) : while ($query->have_posts()) :
                                $query->the_post(); ?>
                                <?php $arquivo = get_field('arquivo'); ?>
                                <?php if ($arquivo) : ?>
                                    <a class="item" href="<?php echo esc_url($arquivo['url']); ?>" target="_blank">
                                        <span class="sub-1 f-800 text-uppercase"><?php echo date('d-M'); ?> -</span>&nbsp;
                                        <span class="sub-1"><?php the_title(); ?></span>&nbsp;
                                    </a>
                                <?php endif; ?>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata();; ?>
                    </div>
                    <div class="d-none justify-content-center justify-content-md-start">
                        <a class="btn-1" href="">Ver todos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script async>
    $(document).ready(function() {

    });
    window.addEventListener('load', function() {});
</script>