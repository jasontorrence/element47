<?php
/**
 * Fly Keystone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fly_Keystone
 */

if ( ! function_exists( 'fly_keystone_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function element_47_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Fly Keystone, use a find and replace
		 * to change 'element-47' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'element-47', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		//add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'element-47' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 61,
			'width'       => 175,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'element_47_setup' );

/**
 * Enqueue scripts and styles.
 */
function element_47_scripts() {
	wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');
	// Version CSS file in a theme
	wp_enqueue_style(
		'element-47-style',
		get_stylesheet_directory_uri() . '/assets/css/style.css',
		array(),
		filemtime( get_stylesheet_directory() . '/assets/css/style.css' )
	);

	wp_enqueue_script( 'element-47-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'element_47_scripts' );

require get_template_directory() . '/inc/ajax_loadmore_work.php';
require get_template_directory() . '/inc/ajax_loadmore_posts.php';
require get_template_directory() . '/inc/template_functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/custom_fields.php';
require get_template_directory() . '/inc/custom_post_types.php';