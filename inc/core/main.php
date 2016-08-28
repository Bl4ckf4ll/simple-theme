<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('THEMEDIR', get_stylesheet_directory());

function simple_setup () {
	add_theme_support('post-thumbnails');
	/* Register Nav Menus */
	register_nav_menu('main-menu', 'Main menu on the header');

	/* Register Sidebars */
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'description' => 'Sidebar on the right side',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => "</h3>"
	));

	register_sidebar(array(
		'name' => 'Footer 1',
		'id' => 'footer-1',
		'description' => 'Footer block 1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => "</h3>"
	));

	register_sidebar(array(
		'name' => 'Footer 2',
		'id' => 'footer-2',
		'description' => 'Footer block 2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => "</h3>"
	));

	register_sidebar(array(
		'name' => 'Footer 3',
		'id' => 'footer-3',
		'description' => 'Footer block 3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>"
	));

	/* Register Post Types */
	register_post_type('simple_features', array(
		'label' => 'Simple Features',
		'public' => true,
		'supports' => array('thumbnail', 'title', 'revisions', 'editor')
	));
}

add_action('init', 'simple_setup');

function simple_add_scripts () {
	wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	wp_enqueue_style('main-css', get_stylesheet_uri());
	wp_enqueue_style('flickity-css', get_stylesheet_directory_uri() . '/css/vendor/flickity.css');
	wp_enqueue_script('flickity-js', get_stylesheet_directory_uri() . '/js/vendor/flickity.pkgd.min.js');
	wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'));
	wp_enqueue_script('navs-js', get_stylesheet_directory_uri() . '/js/navs.js', array('jquery'));
	wp_enqueue_script('masonry-js', get_stylesheet_directory_uri() . '/js/vendor/masonry.pkgd.min.js');
	wp_enqueue_script('loop-js', get_stylesheet_directory_uri() . '/js/loop.js', array('jquery'));
	wp_enqueue_style('fonts', '//fonts.googleapis.com/css?family=Roboto:400,900');
	wp_enqueue_style('icon-font', 'https://file.myfontastic.com/QycLBibxNQkxgfK7R6naAA/icons.css');
}

add_action('wp_enqueue_scripts', 'simple_add_scripts');

require_once('settings/customize.php');
require_once('styles/customize.php');
require_once('shortcodes/loops.php');
require_once('shortcodes/featured-posts.php');
require_once('shortcodes/features.php');
require_once('shortcodes/hero.php');

?>
