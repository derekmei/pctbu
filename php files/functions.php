<?php

function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

add_theme_support( 'menu' );
add_theme_support( 'post-thumbnails' );

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond.js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond.js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue scripts', 'theme_js' );

//add_filter( 'show_action_bar', '__return_false' );

function register_theme_menus() {

	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus');

function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<p class="title">',
		'after_title' => '</p>'
	));
}

create_widget( 'Front Page Professional', 'front-professional', 'Displays Professional Impact on the left of the homepage' );
create_widget( 'Front Page Social', 'front-social', 'Displays Social Impact in the center of the homepage' );
create_widget( 'Front Page Philanthropic', 'front-philanthropic', 'Displays Philanthropic Impact on the right of the homepage' );

require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );
?>