<?php
	
	remove_theme_support('core-block-patterns');
	
	function add_scipts() {

// Add Scripts
	if (!is_admin()) {
		wp_deregister_script( 'jquery' );
	
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', '', true, '');
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true );
		wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper.css',false,'1.1','all');
		wp_enqueue_script( 'swiper_js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array('jquery'), '1.0', true );
		//wp_enqueue_script( 'video_js', get_template_directory_uri() . '/video/video.js', array('jquery'), '1.0', true );
	}
}
add_action('init', 'add_scipts');



// Add Styles
function prefix_add_footer_styles() {
	wp_enqueue_style( 'material_icons', '//fonts.googleapis.com/css?family=Material+Icons',true,'1.1','all');
	wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap',true,'1.1','all');
	wp_enqueue_style( 'oswald', 'https://fonts.googleapis.com/css2?family=Oswald&display=swap',true,'1.1','all');
    wp_enqueue_style( 'mods', get_template_directory_uri() . '/css/mods.css',true,'1.1','all');
	wp_enqueue_style( 'liberator', get_template_directory_uri() . '/fonts/stylesheet.css',true,'1.1','all');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/style.css',true,'1.1','all');
    
    //wp_enqueue_style( 'video', get_template_directory_uri() . '/video/video.css',true,'1.1','all');

};

add_action( 'get_footer', 'prefix_add_footer_styles' );

function add_reusable_blocks_admin_menu() {
    add_menu_page( 'Reusable Blocks', 'Reusable Blocks', 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-controls-repeat', 22 );
}
add_action( 'admin_menu', 'add_reusable_blocks_admin_menu' );


// Remove WP Version From Styles	
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Function to remove version numbers
function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

//Register Menus

function register_my_menu() {
  register_nav_menu('main_menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Add Featured Image to Pages

 add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

//Add SVG Mime Type

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// Add ACF Options Page

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Custom CSS Styles

function custom_admin_js() {

    wp_enqueue_style( 'admin_styles','https://www.hazzardlabs.com/libs/wp/admin.css',true,'1.1','all');
    wp_enqueue_style( 'admin-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Material+Icons',true,'1.1','all');
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/admin.js', array('jquery'), '1.0', true );
    //wp_enqueue_style( 'video', get_template_directory_uri() . '/video/video.css',true,'1.1','all');
}
add_action('admin_footer', 'custom_admin_js');

require_once( get_stylesheet_directory() . '/lib/custom_post_types.php' );

include 'acf-blocks/acf-core.php';

@ini_set( 'upload_max_size' , '300M' );
@ini_set( 'post_max_size', '300M');
@ini_set( 'max_execution_time', '300' );