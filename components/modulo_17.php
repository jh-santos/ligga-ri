<!-- acf modulo_04_1 -banner tipo 2-->

<section class='modulo_17'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-12 px-0'>
                <picture class="w-100">
                    <?php if (have_rows('modulo_17_1', 'option')) { ?>
                        <?php while (have_rows('modulo_17_1', 'option')) : the_row(); ?>
                            <?php $img_desktop = get_sub_field('img_desktop'); ?>
                            <?php $img_mobile = get_sub_field('img_mobile'); ?>
                            <?php if ($img_desktop && $img_mobile) { ?>
                                <!-- img acf -->
                                <source media='(min-width:769px)' srcset='<?php echo esc_url($img_desktop['url']); ?>'>
                                <source media='(max-width:768px)' srcset='<?php echo esc_url($img_mobile['url']); ?>'>
                                <img loading='lazy' class='img-fluid w-100' src='' alt='<?php echo esc_attr($img_desktop['alt']); ?>'>
                            <?php } else { ?>
                                <!-- img default -->
                                <source media='(min-width:769px)' srcset='<?php bloginfo('template_url'); ?>/assets/img/modulo-17-1.webp'>
                                <source media='(max-width:768px)' srcset='<?php bloginfo('template_url'); ?>/assets/img/modulo-17-2.webp'>
                                <img loading='lazy' class='img-fluid w-100' src='' alt='Banner <?php the_title(); ?> - ligga RI'>
                            <?php } ?>
                        <?php endwhile; ?>
                    <?php } else {; ?>
                        <source media='(min-width:769px)' srcset='<?php bloginfo('template_url'); ?>/assets/img/modulo-17-1.webp'>
                        <source media='(max-width:768px)' srcset='<?php bloginfo('template_url'); ?>/assets/img/modulo-17-2.webp'>
                        <img loading='lazy' class='img-fluid w-100' src='' alt='Banner <?php the_title(); ?> - ligga RI'>
                    <?php } ?>
                </picture>
            </div>
        </div>
    </div>
    <div class="bloco">
        <div class="row">
            <div class="col-xl-6 col-lg-5 col-md-8 ">
                <div class="item item-1">
                    <h2 class="titulo-1 f-800">Resultados da
                        Busca</h2>
                    <h3 class="titulo-2">Resultados para "<?php echo  get_query_var('s'); ?>"</h3>
                </div>
            </div>
        </div>
    </div>
</section>