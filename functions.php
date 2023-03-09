<?php

/**
 *
 * @João Henrique
 * 26/03/2018
 * Definindo variaveis da agencia
 *
 * */
define('AG_NAME', 'Jobspace');

// E-mail da Agência
define('AG_EMAIL', 'dev@jobspace.com.br');

// REMOVE WP EMOJI
// remove_action('wp_head', 'print_emoji_detection_script', 7);
// remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
/**
 *
 * @João Henrique
 * 26/03/2018
 * Customizando footer
 *
 * */
function remove_footer_admin()
{
    echo '<a  target="_blank">' . AG_NAME . '</a>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

//Remover versao do wordpress e feeds links
function vc_remove_wp_ver_css_js($src)
{
    if (strpos($src, 'ver=' . get_bloginfo('version')))
        $src = remove_query_arg('ver', $src);
    return $src;
}
add_filter('style_loader_src', 'vc_remove_wp_ver_css_js', 9999);
add_filter('script_loader_src', 'vc_remove_wp_ver_css_js', 9999);

// remover versoes do wp
remove_action('wp_head', 'wp_generator');
function wpbeginner_remove_version()
{
    return '';
}
add_filter('the_generator', 'wpbeginner_remove_version');

function itsme_disable_feed()
{
    wp_die($message = 'Feed Desativado', $title = 'Feed Desativado',  $args = array());
}

add_action('do_feed', 'itsme_disable_feed', 1);
add_action('do_feed_rdf', 'itsme_disable_feed', 1);
add_action('do_feed_rss', 'itsme_disable_feed', 1);
add_action('do_feed_rss2', 'itsme_disable_feed', 1);
add_action('do_feed_atom', 'itsme_disable_feed', 1);
add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);

remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);

function disable_media_comment($open, $post_id)
{
    $post = get_post($post_id);
    if ($post->post_type == 'attachment') {
        return false;
    }
    return $open;
}
add_filter('comments_open', 'disable_media_comment', 10, 2);

// fim para remover versao e feeds


/**
 *
 * @João Henrique
 * 21/09/2017
 * Carregando Scripts
 *
 * */
function theme_scripts()
{
    // Load right jquery library.
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.6.0', false);
    wp_enqueue_script('axios', get_template_directory_uri() . '/assets/js/axios.min.js', array(), '1.1.2', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.1.0', true);
    wp_enqueue_script('mask-jquery', get_template_directory_uri() . '/assets/js/jquery.mask.min.js', array(), '1.1.0', true);
    wp_enqueue_script('lity-js', get_template_directory_uri() . '/assets/js/lity.min.js', array(), '1.1.0', true);
    wp_enqueue_script('slick-js', get_template_directory_uri() .  '/includes/slick/slick.min.js', array(), '1.1.0', true);
    // custom js
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');
/**
 *
 * @João Henrique
 * 21/09/2017
 * Carregando styles
 *
 * */
function theme_styles()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/includes/slick/slick.css');
    wp_enqueue_style('lity-css', get_template_directory_uri() . '/assets/css/lity.min.css');
    // customs css project
    wp_enqueue_style('menus-css', get_template_directory_uri() . '/assets/css/menu_rodape.min.css');
    wp_enqueue_style('custom-components', get_template_directory_uri() . '/assets/css/custom-components.min.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');
/**
 *
 * @João Henrique
 * 26/03/2018
 * Customizando box personalizado
 *
 * */
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
function my_custom_dashboard_widgets()
{
    global $wp_meta_boxes;

    wp_add_dashboard_widget('custom_help_widget', AG_NAME, 'custom_dashboard_help');
}
function custom_dashboard_help()
{
    echo '<p style="text-align:center"><img src="data:image/jpeg;base64,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9NObuVtyz25cPoeGZgv/ALpHf+x8gua7P1jIaiKWRpcxjrkDfuNjbjY2Pgt5tvtGypEcULiWN9ZxILbu3Aa8hfzVOJs7dfDgMB3MXO409qCw58Vbhz9WPjOI3sGjgPzfHkFiUu2dXGzs87XcnObdw8ePitLUTyTSFzi58j/EnuH7LGXTKCrpMNgYHEGZ7Q5waA5xJF9/wjvstCO6HKmsKHVzsmilczyVCC18zaJEo1uZNeSwtmJ6+GAQto8wuSxzndnlvqbg+8L9yzdlsEqYqmSpqS0ukaRcOublzTw0AsFpcQ2/mdcQsbGOZ9d38DyWkdtJVF7ZDUOJab2vZvi0aEKmZOaih53WM38cSfyB4K33qXhll3v3cMAPYE+Kte0WylTUVTp43NynLlu5wIytH06agravqa1sQbLRNmc22rZG2JHEscN/ctNPPFibWuZN2FU0WylxDXdx49+/osemwXFYnepI63PtGub5O/hV90vY1kdzAW/0uBb/AHB1wcahd6hr3PgteQ7NpDvNpBoefqtBtHVVEsl6lrmkaNaWlrWjk0H8rBoK18EjZY3ZXN4/kEcQuu1zoxTAVpj90Z+RdbXIN9+Vlx2a2Y5b5bm199r6X62Wjs+ZbMQyzcoBb/iRp1wVCel3QIgdv1Jvezhz68FYztBTSOzz0IMh3va9zA48y1MR2ykdH2NPG2CPdZu+3fYW8B4qsKVY7jAqCRWmAJJA8CSPRcDORqEA0riQACfEAFQpRFcVVERFCIiIiIiIihEREREREUhApUBSpRERERFClQigoiIoUooJUopRQpRFCKFlx4jM0WbK8DkHOH4KxUQgGxUgkYL3LM5xu5xceZJJ8yvClFNFChFKIihFKIihFKIihFKIihERQoRERERERFIQKVAUqURERERQpUIoKIiKFKIiIiIiIiKVClSiIiIiIiIiIiIiIiIiIiIihERQoRERERERFIQKVAUqURERERQpUIoKIiKFKIiIiIiIiKVClSiIiIiIiIiIiIiIiIiIiIihERQoRERERERFIQKURSiIiIiKERFBRERQpRERERERERSiKUREREREREREREREREREREX/2Q==" alt="' . AG_NAME . '" style="max-width:85%;"/></p>';
    echo '<p>Seja bem vindo ao painel de administração de seu site. Navegue pelo menu lateral para ter acesso às funcionalidades do site e se precisar, entre em contato com a gente.';

    if (defined('AG_EMAIL')) {
        echo "<a href='mailto:" . AG_EMAIL . "' target='_blank' style='display: block'>";
        echo AG_EMAIL;
        echo "</a>";
    }
}

/**
 *
 * @João Henrique
 * 28/10/2015
 * Thumbs Imagens
 *
 * */
// desabilitar tumbs para gerar varias imagens
add_filter('big_image_size_threshold', '__return_false');
add_filter('intermediate_image_sizes', '__return_empty_array');
add_theme_support('post-thumbnails');
/**
 *
 * @João Henrique
 * 28/10/2015
 * Removendo metabox
 *
 * */
add_action('wp_dashboard_setup', 'wpmidia_remove_dashboard_widgets');
function wpmidia_remove_dashboard_widgets()
{
    global $wp_meta_boxes;
    // Remove o widget "Links de entrada" (Incomming links)
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    // remove o widget "Plugins"
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
    unset($wp_meta_boxes['dashboard']['side']['core']['wpdm_dashboard_widget']);
    // remove o widget "Rascunhos recentes" (Recent drafts)
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
    // remove o widget "QuickPress"
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    // remove o widget "Agora" (Right now)
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    // remove o widget "Blog do WordPress" (Primary)
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    // remove o widget "Outras notícias do WordPress" (Secondary)
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
/**
 *
 * @João Henrique
 * 28/10/2015
 * Adicionando Metabox
 *
 * */
add_action('wp_dashboard_setup', 'wpmidia_custom_dashboard_widgets');
function wpmidia_custom_dashboard_widgets()
{
    global $wp_meta_boxes;
    wp_add_dashboard_widget('custom_help_widget', 'Suporte', 'wpmidia_custom_dashboard_help');
}
function wpmidia_custom_dashboard_help()
{
    echo 'Se você tiver qualquer dúvida ou precisar de ajuda, por favor, entre em contato.';
}

/**
 *
 * @João Henrique
 * 28/10/2015
 * Removendo itens do menu
 *
 * */
function remove_menus()
{

    remove_menu_page('edit.php'); //Posts
    remove_menu_page('edit-comments.php'); //Comments
    //remove_menu_page('themepunch-google-fonts');
    //remove_menu_page('edit.php?post_type=acf-field-group');
    //remove_menu_page('themes.php'); //Appearance
    // remove_menu_page('plugins.php'); //Plugins
    // remove_menu_page('users.php'); //Users
    //remove_menu_page('tools.php'); //Tools
    //remove_menu_page('options-general.php'); //Settings
    // plugins
    remove_menu_page('mo_firebase_authentication'); //firebase
}
add_action('admin_menu', 'remove_menus');

/**
 *
 * @João Henrique
 * 28/10/2015
 * Registrando menu bootstrap
 *
 * */
// require_once('wp_bootstrap_navwalker.php');
/**
 *
 * @João Henrique
 * 13/03/2016
 * Adicioando itens no menu
 *
 * */
if (function_exists('acf_add_options_page')) {
    $page = acf_add_options_page(array(
        'page_title'     => 'Geral',
        'menu_title'     => 'Configurações </br>Gerais do Tema',
        'menu_slug'     => 'geral',
        'capability'     => 'edit_posts',
        'redirect'     => false
    ));
}

function wpdocs_custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Limitando caracteres
 *
 * */
function excerpt($limit)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
    return $excerpt;
}

/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Breadcrum
 *
 * */
function wp_custom_breadcrumbs()
{
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '>'; // delimiter between crumbs
    $home = 'Home'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current" itemprop="title">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb
    global $post;
    $homeLink = get_bloginfo('url');
    if (is_home() || is_front_page()) {
        if ($showOnHome == 1) echo '<a href="' . $homeLink . '" itemprop="url">' . $home . '</a>';
    } else {
        echo '<a href="' . $homeLink . '" itemprop="url">' . $home . '</a> ' . $delimiter . ' ';
        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
            echo $before . 'categoria "' . single_cat_title('', false) . '"' . $after;
        } elseif (is_search()) {
            echo $before . 'Search results for "' . get_search_query() . '"' . $after;
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '" itemprop="url">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '" itemprop="url">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '" itemprop="url">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/" itemprop="url">' . $post_type->labels->singular_name . '</a>';
                if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                echo $cats;
                if ($showCurrent == 1) echo $before . get_the_title() . $after;
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '" itemprop="url">' . $parent->post_title . '</a>';
            if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1) echo $before . get_the_title() . $after;
        } elseif (is_page() && $post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '" itemprop="url">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
                if ($i != count($breadcrumbs) - 1) echo ' ' . $delimiter . ' ';
            }
            if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
        } elseif (is_tag()) {
            echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . 'Articles posted by ' . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . 'Error 404' . $after;
        }
        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ' (';
            echo __('Page') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) echo ')';
        }
        echo '';
    }
}

function cwp_desativa_comentarios_frontend()
{
    return false;
}
add_filter('comments_open', 'cwp_desativa_comentarios_frontend', 20, 2);
add_filter('pings_open', 'cwp_desativa_comentarios_frontend', 20, 2);

// We load the array of items in the variable $items
require_once get_template_directory() . '/config/class-wp-bootstrap-navwalker.php';
register_nav_menus(
    array(
        'menu-padrao' => __('Menu Home', 'meu-text-domain'),
    )
);
