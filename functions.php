<?php
/**
 * Child theme functions
 *
 * Functions file for child theme, enqueues parent and child stylesheets by default.
 *
 * @since 	1.0.0
 * @package aa
 */
 
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'aa_enqueue_styles' ) ) {
	// Add enqueue function to the desired action.
	add_action( 'wp_enqueue_scripts', 'aa_enqueue_styles' );
	/**
	 * Enqueue Styles.
	 *
	 * Enqueue parent style and child styles where parent are the dependency
	 * for child styles so that parent styles always get enqueued first.
	 *
	 * @since 1.0.0
	 */
	function aa_enqueue_styles() {
		$parent_style = 'parent-style';
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

		wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/foundation.min.css', array( $parent_style ) );
		wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );

	}

	function adding_scripts() {
		wp_register_script('app-script', get_stylesheet_directory_uri() . '/assets/js/app.js', array('jquery'));
	}

	function printing_scripts() {
		wp_enqueue_script(array( 'app-script'));
	}

	add_action( 'wp_enqueue_scripts', 'adding_scripts' );
	add_action( 'wp_enqueue_scripts', 'printing_scripts' );

}

add_action( 'init', 'create_post_type' );
function create_post_type() {
register_post_type( 'social_media_icons',
        array(
        'labels' => array(
            'name' => __( 'Social Icons' ),
            'singular_name' => __( 'Icon' )
        ),
        'public' => true,
        'has_archive' => true,
		'menu_position' => 4,
		'menu_icon' => 'dashicons-share'
        )
    );
	register_post_type( 'videos',
        array(
        'labels' => array(
            'name' => __( 'Work Videos' ),
            'singular_name' => __( 'Video' )
        ),
        'public' => true,
        'has_archive' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-video-alt',
		'supports' => array(
			'thumbnail',
			'title',
			'revisions',
			'editor'
		),
		'taxonomies' => array( 'category' )
        )
    );
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function theme_prefix_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}