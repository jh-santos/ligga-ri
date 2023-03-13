<section class='modulo_10'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12 px-0 px-md-3'>

                <div class="bloco bloco-1">
                    <?php
                    $args = array(
                        'taxonomy' => 'departamentos',
                        'hide_empty' => false,
                    );

                    $categories = get_terms($args);

                    if (!empty($categories) && !is_wp_error($categories)) : ?>
                        <?php $cont = 1;
                        foreach ($categories as $category) : ?>
                            <?php ($cont === 1) ? $valor = 'ativo' : $valor = ''; ?>
                            <button class="titulo f-800 item item-<?php echo $cont; ?> <?php echo $valor; ?>" grupo="<?php echo $cont; ?>"><?php echo esc_html($category->name); ?></button>
                        <?php
                            $cont++;
                        endforeach; ?>
                    <?php wp_reset_postdata();
                    endif; ?>
                </div>
                <div class="bloco bloco-2">
                    <?php $contador = 1;

                    $args = array('taxonomy' => 'departamentos', 'orderby' => 'modified', 'order'   => 'DESC');
                    $my_categories
                        = get_categories($args);
                    ?>
                    <!-- por categoria -->
                    <?php foreach ($my_categories as $category) : ?>
                        <?php ($contador === 1) ? $valor = 'ativo' : $valor = ''; ?>
                        <div class="item item-<?php echo $contador; ?> <?php echo $valor; ?>" grupo="<?php echo $contador; ?>">
                            <?php
                            $args = array(
                                'post_type' => 'colaboradores', 'orderby' => 'modified', 'order'   => 'DESC', 'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'departamentos',
                                        'field' => 'term_id',
                                        'terms' => $category->term_id
                                    )
                                )
                            );
                            $wp_query = new WP_Query($args);
                            $total = $wp_query;
                            $cont = 1;
                            if (have_posts()) :
                                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                                    <div class="colab">
                                        <div class="efeito-img">
                                            <?php $img_colab_1 = get_field('img_colab_1'); ?>
                                            <?php $img_colab_2 = get_field('img_colab_2'); ?>
                                            <img loading="eager" class="img-1 img-fluid w-100" src="<?php echo esc_url($img_colab_1['url']); ?>" alt="<?php echo esc_attr($img_colab_1['alt']); ?>">
                                            <img loading="eager" class="img-2 img-fluid w-100" src="<?php echo esc_url($img_colab_2['url']); ?>" alt="<?php echo esc_attr($img_colab_2['alt']); ?>">
                                        </div>
                                        <h2 class="titulo-2 f-800"><?php the_title(); ?></h2>
                                        <h3 class="sub-1"><?php the_field('cargo'); ?></h3>
                                    </div>
                                    <?php $cont++; ?>
                                <?php endwhile;
                            else : ?>
                            <?php endif; ?>
                        </div>
                        <?php wp_reset_query(); ?>
                    <?php $contador++;
                    endforeach; ?>

                </div>


            </div>
        </div>
    </div>
</section>
<script async>
    function resizeModulo10() {
        var temp = $('.modulo_10 .bloco-2 .item.ativo').outerHeight();
        console.log(temp)
        if (temp) {
            $('.modulo_10 .bloco-2').css('height', temp)
        }
        temp = 0;
    }
    $(document).ready(function() {
        $('.modulo_10 .bloco-1 .item').on('click', function() {
            event.preventDefault();
            var temp = $(this).attr('grupo');
            $('.modulo_10 .bloco-1 .item').removeClass('ativo');
            $('.modulo_10 .bloco-2 .item').removeClass('ativo');
            $(this).addClass('ativo');
            $('.modulo_10 .bloco-2 .item[grupo="' + temp + '"]').addClass('ativo');
            temp = $('.modulo_10 .bloco-2 .item.ativo').outerHeight();
            if (temp) {
                $('.modulo_10 .bloco-2').animate({
                    'height': temp
                }, 200)
            }
            temp = 0;
        })
    });
    window.addEventListener('load', function() {
        resizeModulo10();
        $(window).resize(function() {
            resizeModulo10();
        });
    });
</script>