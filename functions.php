<?php
/**
 * USA Wheel Chair Rugby functions and definitions
 *
 * @package USA Wheel Chair Rugby
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'USAWCR_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function USAWCR_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on USA Wheel Chair Rugby, use a find and replace
	 * to change 'USAWCR' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'USAWCR', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' 	 => __( 'Primary Menu', 'USAWCR' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'USAWCR_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // USAWCR_setup
add_action( 'after_setup_theme', 'USAWCR_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function USAWCR_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Hero', 'USAWCR' ),
		'id'            => 'hero',
		'before_widget' => '<div id="hero">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="hide">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Top-A', 'USAWCR' ),
		'id'            => 'hero',
		'before_widget' => '<div id="top-a">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="hide">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Top-B', 'USAWCR' ),
		'id'            => 'hero',
		'before_widget' => '<div id="top-b">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="hide">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'USAWCR_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function USAWCR_scripts() {

	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, '1.1', 'all' );
	
	wp_enqueue_script( 'USAWCR-Foundation', get_template_directory_uri() . '/js/foundation.min.js', array(), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'USAWCR_scripts' );

// require jquery 
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
