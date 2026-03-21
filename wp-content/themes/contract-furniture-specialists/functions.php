<?php
/**
 * Contract Furniture Specialists Theme Functions
 *
 * @package CFS_Theme
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('CFS_THEME_VERSION', '1.0.0');
define('CFS_THEME_DIR', get_template_directory());
define('CFS_THEME_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function cfs_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'cfs-theme'),
        'footer'    => __('Footer Menu', 'cfs-theme'),
    ));

    add_image_size('hero-slide', 1920, 1080, true);
    add_image_size('industry-thumb', 800, 600, true);
    add_image_size('gallery-thumb', 600, 400, true);
}
add_action('after_setup_theme', 'cfs_theme_setup');

/**
 * Enqueue Styles & Scripts
 */
function cfs_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'cfs-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap',
        array(),
        null
    );

    // Main Stylesheet
    wp_enqueue_style('cfs-style', get_stylesheet_uri(), array(), CFS_THEME_VERSION);

    // Custom CSS
    wp_enqueue_style('cfs-custom', CFS_THEME_URI . '/assets/css/custom.css', array('cfs-style'), CFS_THEME_VERSION);

    // Main JS
    wp_enqueue_script('cfs-main', CFS_THEME_URI . '/assets/js/main.js', array(), CFS_THEME_VERSION, true);

    wp_localize_script('cfs-main', 'cfsData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('cfs_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'cfs_enqueue_assets');

/**
 * Custom Walker for Navigation
 */
class CFS_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= '<a' . $class_names . ' href="' . esc_url($item->url) . '">';
        $output .= apply_filters('the_title', $item->title, $item->ID);
        $output .= '</a>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        // No wrapping li needed
    }

    public function start_lvl(&$output, $depth = 0, $args = null) {}
    public function end_lvl(&$output, $depth = 0, $args = null) {}
}

/**
 * Fallback menu if no menu is set
 */
function cfs_fallback_menu() {
    echo '<a href="' . esc_url(home_url('/')) . '" class="active">Home</a>';
    echo '<a href="#services">Products</a>';
    echo '<a href="#industries">Sectors</a>';
    echo '<a href="#banquette">Banquette</a>';
    echo '<a href="#about">About</a>';
    echo '<a href="#contact">Contact</a>';
}

/**
 * Register widget areas
 */
function cfs_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'cfs-theme'),
        'id'            => 'footer-widgets',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'cfs_widgets_init');

/**
 * Add preconnect for Google Fonts
 */
function cfs_resource_hints($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin' => true,
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => true,
        );
    }
    return $urls;
}
add_filter('wp_resource_hints', 'cfs_resource_hints', 10, 2);

/**
 * Disable emoji scripts for performance
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/**
 * Remove WordPress version for security
 */
remove_action('wp_head', 'wp_generator');
