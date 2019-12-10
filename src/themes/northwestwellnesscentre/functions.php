<?php

/*start*/

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*end*/


/* Require Includes */
include_once get_template_directory() . '/includes/gutenburg.php';
include_once get_template_directory() . '/includes/helper-functions.php';
include_once get_template_directory() . '/includes/bootstrap-wp-navwalker.php';
//include_once get_template_directory().'/includes/acf-custom-widget.php';

/* Hooks */
if (!function_exists('enqueue_scripts')) {

    add_action('wp_enqueue_scripts', 'enqueue_scripts');

    // Cache bust constants
    define('THEMESTYLE_VERSION', filemtime(get_stylesheet_directory() . '/style/style.css'));
    define('HEADERBUNDLE_VERSION', filemtime(get_stylesheet_directory() . '/js/header-bundle.js'));
    define('FOOTERBUNDLE_VERSION', filemtime(get_stylesheet_directory() . '/js/footer-bundle.js'));

    function enqueue_scripts()
    {
        // Register our own jquery
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');

        wp_enqueue_style('style_file', get_stylesheet_directory_uri() . '/style/style.css', [], THEMESTYLE_VERSION);
        wp_enqueue_script('header_js', get_stylesheet_directory_uri() . '/js/header-bundle.js', null, HEADERBUNDLE_VERSION, false);
        wp_enqueue_script('footer_js', get_stylesheet_directory_uri() . '/js/footer-bundle.js', null, FOOTERBUNDLE_VERSION, true);
    }
}

if (!function_exists('custom_after_setup_theme')) {

    add_action('after_setup_theme', 'custom_after_setup_theme', 11);

    function custom_after_setup_theme()
    {
        add_post_type_support('page', 'excerpt');

        remove_theme_support('custom-background');
        remove_theme_support('post-thumbnails');

        register_nav_menus([
            'primary' => 'Primary Menu',
            'secondary' => 'Footer Menu',
            'tertiary' => 'Legal Menu'
        ]);

        // Style Gutenberg
        add_theme_support('editor-styles');
        add_editor_style('style-editor.css');

        // Enable wide alignment for Gutenberg
        add_theme_support('align-wide');
    }
}

/* Misc */
show_admin_bar(false);
remove_action('wp_head', 'wp_generator');
add_filter('login_errors', create_function('$a', "return null;"));
add_filter('allow_dev_auto_core_updates', '__return_false');
add_filter('auto_update_plugin', '__return_true');

/* Gravity Forms */
add_filter('gform_init_scripts_footer', '__return_true');
add_filter('gform_confirmation_anchor', '__return_false');

/* ACF - Theme Options */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts',
        'position' => 80,
        'redirect' => false
    ]);
}

/* trim that excerpt */
function get_excerpt()
{
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])", '', $excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 150);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace('/\s+/', ' ', $excerpt));
    $excerpt = $excerpt . '...';
    return $excerpt;
}

/* AX - Gutenberg Blocks */
function register_acf_block_types()
{
    acf_register_block_type([
        'name' => 'sproing-banner-block',
        'title' => __('Sproing Banner Block'),
        'description' => __('Simple Image and Text Banner with Optional Buttons.'),
        'render_template' => 'includes/gutenburg/banner-block.php',
        'category' => 'formatting',
        'supports' => array('align' => false),
        'icon' => 'welcome-widgets-menus',
        'keywords' => ['banner'],
        'enqueue_style' => get_template_directory_uri() . '/includes/gutenburg/block-styles.css',
    ]);
    acf_register_block_type([
        'name' => 'simple-pingpong',
        'title' => __('Sproing Image and Text Layout Block'),
        'description' => __('A simple image and text block.'),
        'render_template' => 'includes/gutenburg/simple-pingpong.php',
        'category' => 'formatting',
        'supports' => array( 'align' => false ),
        'icon' => 'welcome-widgets-menus',
        'keywords' => ['layout'],
    ]);
    acf_register_block_type([
        'name' => 'sproing-card-carousel',
        'title' => __('Sproing Card Carousel'),
        'description' => __('A Rotating Card Carousel with Links.'),
        'render_template' => 'includes/gutenburg/card-carousel.php',
        'category' => 'formatting',
        'supports' => array('align' => false),
        'icon' => 'welcome-widgets-menus',
        'keywords' => ['carousel, card'],
    ]);
    acf_register_block_type([
        'name' => 'simple-center-block',
        'title' => __('Sproing Center Layout Block'),
        'description' => __('Simple Centered Title and Text Layout Block.'),
        'render_template' => 'includes/gutenburg/simple-center-layout.php',
        'category' => 'formatting',
        'supports' => array('align' => false),
        'icon' => 'welcome-widgets-menus',
        'keywords' => ['layout'],
    ]);
}

if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

/* show only children for Homepage Services Relationship ACF */
function my_relationship_query($args, $field, $post_id)
{
    $args['post_parent'] = 21;
    return $args;
}

add_filter('acf/fields/relationship/query', 'my_relationship_query', 10, 3);