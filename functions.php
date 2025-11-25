<?php

/**
 * vertical functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vertical
 */

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.1');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vertical_setup()
{
    /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on vertical, use a find and replace
		* to change 'vertical' to the name of your theme in all the template files.
		*/
    load_theme_textdomain('vertical', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
    add_theme_support('title-tag');

    /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'header-menu' => esc_html__('Header Menu', 'vertical'),
        )
    );

    /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'vertical_setup');

/**
 * Enqueue scripts and styles.
 */
function vertical_scripts()
{
    wp_enqueue_style('vertical-swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), _S_VERSION);
    wp_enqueue_style('vertical-fancybox', get_template_directory_uri() . '/assets/css/fancybox.css', array(), _S_VERSION);
    wp_enqueue_style('vertical-style', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION);

    wp_enqueue_script('vertical-swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('vertical-fancybox', get_template_directory_uri() . '/assets/js/fancybox.umd.js', array(), _S_VERSION, true);
    wp_enqueue_script('vertical-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'vertical_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom walker for mega menu
 */
require_once get_template_directory() . '/inc/class-mega-menu-walker.php';
