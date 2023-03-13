<?php if (have_rows('modulo_06_1')) : ?>
    <?php while (have_rows('modulo_06_1')) : the_row(); ?>
        <section class='modulo_06 bg_color'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-xl-3 px-0 pr-md-5'>
                        <div class="bloco bloco-1">
                            <h2 class="titulo-1 f-900"> <?php the_sub_field('titulo_1'); ?></h2>
                        </div>
                    </div>
                    <div class="col-xl-9 px-0">
                        <div class="row w-100 mx-auto bloco bloco-2">
                            <?php if (have_rows('repetidor')) : ?>
                                <?php while (have_rows('repetidor')) : the_row(); ?>
                                    <div class="col-md-4 col-sm-6 px-0 px-md-3">
                                        <div class="item item-1">
                                            <h3 class="titulo-2 f-800"><?php the_sub_field('titulo_2'); ?></h3>
                                            <h4 class="sub-1"><?php the_sub_field('titulo_3'); ?></h4>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>