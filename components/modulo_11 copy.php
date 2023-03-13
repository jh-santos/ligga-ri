<section class='modulo_11'>
    <div class="container-lg">
        <div class="row ">
            <div class="col-12">
                <div class="bloco bloco-1 d-none">
                    <div class="formulario">
                        <select class="form-input" name="ano_referencia" id="" ano_referencia="">
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="bloco bloco-2">
                    <?php $modulo_11_1 = get_field('modulo_11_1'); ?>
                    <?php $term = get_term_by('id', $modulo_11_1, 'cat_doc_1'); ?>
                    <?php
                    // Define a categoria fixa
                    $categoria_fixa = $term->slug;

                    // Obter todas as categorias exceto a categoria fixa
                    $args_cat = array(
                        'taxonomy' => 'cat_doc_2',
                        'exclude' => array(get_cat_ID($categoria_fixa)),
                    );
                    $categorias = get_categories($args_cat);

                    // Loop de categorias
                    foreach ($categorias as $categoria) {
                        // Argumentos para o loop de posts
                        $args_post = array(
                            'post_type' => 'documentos',
                            'tax_query' => array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'cat_doc_1',
                                    'field' => 'slug',
                                    'terms' => $categoria_fixa
                                ),
                                array(
                                    'taxonomy' => 'cat_doc_2',
                                    'field' => 'slug',
                                    'terms' => $categoria->slug
                                )
                            ),
                            'posts_per_page' => -1
                        );

                        $query = new WP_Query($args_post);

                        // Loop de posts
                        if ($query->have_posts()) : ?>
                            <div class="grupo px-md-0 fim">
                                <h2 class="titulo f-800"><?php echo $categoria->name; ?>
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
                                        <?php while ($query->have_posts()) : $query->the_post();
                                            // Verifica se o post tem ambas as categorias
                                            $terms = wp_get_post_terms(get_the_ID(), 'cat_doc_1');
                                            $term_slugs = array();
                                            foreach ($terms as $term) {
                                                $term_slugs[] = $term->slug;
                                            }
                                            if (in_array($categoria_fixa, $term_slugs)) {
                                                $terms = wp_get_post_terms(get_the_ID(), 'cat_doc_2');
                                                $term_slugs = array();
                                                foreach ($terms as $term) {
                                                    $term_slugs[] = $term->slug;
                                                }
                                                if (in_array($categoria->slug, $term_slugs)) : ?>
                                                    <?php $arquivo = get_field('arquivo'); ?>
                                                    <a class="item" href="<?php echo esc_url($arquivo['url']); ?>" download="<?php echo date('d-M'); ?> - <?php the_title(); ?>">
                                                        <span class="sub-1 f-800 text-uppercase"><?php echo date('d-M'); ?> -</span>&nbsp;
                                                        <span class="sub-1"><?php the_title(); ?></span>&nbsp;
                                                    </a>
                                        <?php endif;
                                            }
                                        endwhile;; ?>
                                    </div>
                                </div>
                            </div>
                    <?php endif;

                        wp_reset_postdata();
                    }
                    ?>




                    <div class="grupo px-md-0 fim">
                        <h2 class="titulo f-800">Relatórios e Comunicados
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
                                <a href="#" target="_blank" download="download arquivo" class="item">
                                    <span class="sub-1 f-800">15 FEV -</span>&nbsp;
                                    <span class="sub-1">15 FEV - Lorem ipsum dolor sit amet, consectetur elit. Sed diam orcidiusleti Lorem ipsum dolor sit amet, consectetur elit. Sed diam orcidiusleti Lorem ipsum dolor sit amet, consectetur elit. Sed diam orcidiusleti Lorem ipsum dolor sit amet, consectetur elit. Sed diam orcidiusleti...</span>&nbsp;
                                </a>
                                <a href="#" target="_blank" download="download arquivo" class="item">
                                    <span class="sub-1 f-800">15 FEV -</span>&nbsp;
                                    <span class="sub-1">15 FEV - Lorem ipsum dolor sit amet, consectetur elit. Sed diam orcidiusleti...</span>&nbsp;
                                </a>
                                <a href="#" target="_blank" download="download arquivo" class="item">
                                    <span class="sub-1 f-800">15 FEV -</span>&nbsp;
                                    <span class="sub-1">15 FEV - Lorem ipsum dolor sit amet, consectetur elit. Sed diam orcidiusleti...</span>&nbsp;
                                </a>
                                <a href="#" target="_blank" download="download arquivo" class="item">
                                    <span class="sub-1 f-800">15 FEV -</span>&nbsp;
                                    <span class="sub-1">15 FEV - Lorem ipsum dolor sit amet, consectetur elit. Sed diam orcidiusleti...</span>&nbsp;
                                </a>
                                <a href="#" target="_blank" download="download arquivo" class="item">
                                    <span class="sub-1 f-800">15 FEV -</span>&nbsp;
                                    <span class="sub-1">15 FEV - Lorem ipsum dolor sit amet, consectetur elit. Sed diam orcidiusleti...</span>&nbsp;
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="grupo px-md-0">
                        <h2 class="titulo f-800">Relatórios e Comunicados
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
                                <a href="#" target="_blank" download="download arquivo" class="item">
                                    <span class="sub-1 f-800">15 FEV -</span>&nbsp;
                                    <span class="sub-1">15 FEV - Lorem ipsum dolor sit amet, consectetur elit. Sed diam orcidiusleti...</span>&nbsp;
                                </a>
                                <a href="#" target="_blank" download="download arquivo" class="item">
                                    <span class="sub-1 f-800">15 FEV -</span>&nbsp;
                                    <span class="sub-1">15 FEV - Lorem ipsum dolor sit amet, consectetur elit. Sed diam orcidiusleti...</span>&nbsp;
                                </a>
                                <a href="#" target="_blank" download="download arquivo" class="item">
                                    <span class="sub-1 f-800">15 FEV -</span>&nbsp;
                                    <span class="sub-1">15 FEV - Lorem ipsum dolor sit amet, consectetur elit. Sed diam orcidiusleti...</span>&nbsp;
                                </a>
                                <a href="#" target="_blank" download="download arquivo" class="item">
                                    <span class="sub-1 f-800">15 FEV -</span>&nbsp;
                                    <span class="sub-1">15 FEV - Lorem ipsum dolor sit amet, consectetur elit. Sed diam orcidiusleti...</span>&nbsp;
                                </a>
                                <a href="#" target="_blank" download="download arquivo" class="item">
                                    <span class="sub-1 f-800">15 FEV -</span>&nbsp;
                                    <span class="sub-1">15 FEV - Lorem ipsum dolor sit amet, consectetur elit. Sed diam orcidiusleti...</span>&nbsp;
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script async>
    $(document).ready(function() {
        $('.modulo_11 .bloco-2 .titulo').on('click', function() {
            if ($(this).hasClass('ativo')) {
                $('.modulo_11 .bloco-2 .titulo').removeClass('ativo');
                $('.modulo_11 .bloco-2 .container-lista').css('height', '0px')

            } else {
                $('.modulo_11 .bloco-2 .titulo').removeClass('ativo');
                $('.modulo_11 .bloco-2 .container-lista').css('height', '0px')
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