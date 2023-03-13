<?php if (have_rows('modulo_05_1')) : ?>
    <?php while (have_rows('modulo_05_1')) : the_row(); ?>
        <section class='modulo_05'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-xl-4 px-0'>
                        <div class="bloco bloco-1">
                            <?php if (have_rows('repetidor')) : ?>
                                <?php $cont = 1;
                                while (have_rows('repetidor')) : the_row(); ?>
                                    <div class="item item-<?php echo $cont; ?>">
                                        <h2 class="titulo-1 f-500"><span class="f-500"><?php the_sub_field('campo_1'); ?></span> <span class="f-500"><?php the_sub_field('campo_2'); ?></span></h2>
                                        <h3 class="sub-1"><?php the_sub_field('campo_3'); ?></h3>
                                    </div>
                                <?php $cont++;
                                endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-8 px-0  d-flex align-items-center pr-xl-0">
                        <div class="bloco bloco-2">
                            <div class="conteudo"><?php the_sub_field('conteudo_1'); ?></div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>