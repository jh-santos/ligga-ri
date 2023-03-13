<section class='modulo_13'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-6 px-0'>
                <?php if (have_rows('modulo_13_1')) : ?>
                    <?php while (have_rows('modulo_13_1')) : the_row(); ?>
                        <div class="bloco bloco-1">
                            <h2 class="titulo-1 f-800"><?php the_sub_field('titulo_1'); ?></h2>
                            <h3 class="titulo-2"><?php the_sub_field('titulo_2'); ?></h3>
                            <div class="d-flex mb-5">
                                <a class="sub-1 d-inline-flex" href="mailto:<?php the_field('email_geral', 'option'); ?>"><?php the_field('email_geral', 'option'); ?></a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-md-6 px-0">
                <div class="bloco bloco-2">
                    <div class="ninja-form">
                        <?php echo do_shortcode(" [ninja_form id='2']"); ?>
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
        $('.ninja-form .list-select-wrap .ninja-forms-field option[value="0"]').attr('disabled', 'disabled');

    });
</script>