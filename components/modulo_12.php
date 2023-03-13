<!-- modulo_12 acf modulo_12_1 -->
<?php if (have_rows('modulo_12_1')) : ?>
    <?php while (have_rows('modulo_12_1')) : the_row(); ?>
        <section class='modulo_12 bg_color'>
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 px-0">
                        <div class="bloco bloco-1">
                            <h2 class="titulo-2 f-800">Perguntas frequentes</h2>
                        </div>
                    </div>
                    <div class="col-12 px-0">
                        <div class="bloco bloco-2">
                            <?php $perguntas_frequentes = get_sub_field('perguntas_frequentes'); ?>
                            <?php if ($perguntas_frequentes) : ?>
                                <?php foreach ($perguntas_frequentes as $post) :  ?>
                                    <?php setup_postdata($post); ?>
                                    <div class="grupo px-md-0">
                                        <h2 class="titulo f-800"><?php the_title(); ?>
                                            <span class="icone">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <mask id="mask0_60_1682" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                        <rect x="24" y="24" width="24" height="24" transform="rotate(-180 24 24)" fill="#D9D9D9" />
                                                    </mask>
                                                    <g mask="url(#mask0_60_1682)">
                                                        <path d="M11.9998 9.05002C12.1331 9.05002 12.2581 9.07102 12.3748 9.11302C12.4915 9.15436 12.5998 9.22502 12.6998 9.32502L17.3248 13.95C17.5081 14.1334 17.5955 14.3627 17.5868 14.638C17.5788 14.9127 17.4831 15.1417 17.2998 15.325C17.1165 15.5084 16.8831 15.6 16.5998 15.6C16.3165 15.6 16.0831 15.5084 15.8998 15.325L11.9998 11.425L8.07482 15.35C7.89148 15.5334 7.66215 15.621 7.38682 15.613C7.11215 15.6044 6.88315 15.5084 6.69982 15.325C6.51648 15.1417 6.42482 14.9084 6.42482 14.625C6.42482 14.3417 6.51648 14.1084 6.69982 13.925L11.2998 9.32502C11.3998 9.22502 11.5081 9.15436 11.6248 9.11302C11.7415 9.07102 11.8665 9.05002 11.9998 9.05002Z" fill="#EA5B0C" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </h2>
                                        <div class="container-lista">
                                            <div class="grupo-lista">
                                                <div class="item">
                                                    <span class="sub-1"><?php the_field('resposta'); ?></span>&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script async>
            $(document).ready(function() {
                $('.modulo_12 .bloco-2 .titulo').on('click', function() {
                    if ($(this).hasClass('ativo')) {
                        $('.modulo_12 .bloco-2 .titulo').removeClass('ativo');
                        $('.modulo_12 .bloco-2 .container-lista').css('height', '0px')

                    } else {
                        $('.modulo_12 .bloco-2 .titulo').removeClass('ativo');
                        $('.modulo_12 .bloco-2 .container-lista').css('height', '0px')
                        $(this).addClass('ativo')
                        var temp = $(this).siblings('.container-lista').children('.grupo-lista').outerHeight();
                        $(this).siblings('.container-lista').animate({
                            'height': temp
                        }, 200)
                    }

                })
            });
            window.addEventListener('load', function() {

            });
        </script>
    <?php endwhile; ?>
<?php endif; ?>