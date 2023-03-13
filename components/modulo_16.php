<!-- acf modulo_16_1 - banner-tipo 2 categorias documentos-->
<?php if (have_rows('modulo_16_1')) { ?>
    <?php while (have_rows('modulo_16_1')) : the_row(); ?>
        <section class='modulo_16'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 px-0 position-relative d-flex justify-content-center align-items-center'>
                        <picture class="w-100">
                            <?php $img_desktop = get_sub_field('img_desktop'); ?>
                            <?php $img_mobile = get_sub_field('img_mobile'); ?>
                            <?php if ($img_desktop && $img_mobile) { ?>
                                <!-- img acf -->
                                <source media='(min-width:769px)' srcset='<?php echo esc_url($img_desktop['url']); ?>'>
                                <source media='(max-width:768px)' srcset='<?php echo esc_url($img_mobile['url']); ?>'>
                                <img loading='lazy' class='img-fluid w-100' src='' alt='<?php echo esc_attr($img_desktop['alt']); ?>'>
                            <?php } else { ?>
                                <!-- img default -->
                                <source media='(min-width:769px)' srcset='<?php bloginfo('template_url'); ?>/assets/img/modulo_07_1.webp'>
                                <source media='(max-width:768px)' srcset='<?php bloginfo('template_url'); ?>/assets/img/modulo_07_2.webp'>
                                <img loading='lazy' class='img-fluid w-100' src='' alt='Banner <?php the_title(); ?> - ligga RI'>
                            <?php } ?>
                        </picture>
                        <div class="bloco bloco-1 text-center">
                            <?php
                            $current_category = get_queried_object();
                            $titulo_1 = $current_category->name;
                            ?>
                            <?php $titulo_2 = get_sub_field('titulo_2') ?>
                            <h2 class="titulo-1 f-800"><?php echo $titulo_1; ?></h2>
                            <h3 class="titulo-2"><?php echo $titulo_2; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php } else {; ?>
    <section class='modulo_16'>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-12 px-0 position-relative d-flex justify-content-center align-items-center'>
                    <picture class="w-100">
                        <!-- img default -->
                        <source media='(min-width:769px)' srcset='<?php bloginfo('template_url'); ?>/assets/img/modulo_07_1.webp'>
                        <source media='(max-width:768px)' srcset='<?php bloginfo('template_url'); ?>/assets/img/modulo_07_2.webp'>
                        <img loading='lazy' class='img-fluid w-100' src='' alt='Banner <?php the_title(); ?> - ligga RI'>

                    </picture>
                    <div class="bloco bloco-1 text-center">
                        <?php $current_category = get_queried_object();
                        $titulo_1 = $current_category->name; ?>
                        <h2 class="titulo-1 f-800"><?php echo $titulo_1; ?></h2>
                        <h3 class="titulo-2"></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php  } ?>