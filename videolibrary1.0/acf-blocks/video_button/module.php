<?php acf_register_block(array(
	'name'				=> 'video_button',
	'title'				=> __('Modal Video Button'),
	'description'		=> __('Block for modal video button'),
	'render_template'   => 'acf-blocks/video_button/template.php',
	'mode'				=> 'preview',
	'category'			=> 'custom-blocks',
	'icon'				=> 'format-video',
	'keywords'			=> array( 'slide' ),
	'supports'		=> [
		'align'			=> false,
		'anchor'		=> true,
		'customClassName'	=> true,
		]
));

function page_video_stuff() {
	
  if (is_single() || is_page() || is_post() ) {
	 wp_enqueue_script( 'page_video', get_template_directory_uri() . '/acf-blocks/video_button/video.js', array('jquery'), '1.0', true );
	wp_enqueue_style( 'page_video_css', get_template_directory_uri() . '/acf-blocks/video_button/video.css',false,'1.1','all'); 
  }
}
add_action( 'wp_enqueue_scripts', 'page_video_stuff' );

// Add video button styles to the backend
function custom_video_admin() {
	wp_enqueue_style( 'video_mods_css', get_template_directory_uri() . '/acf-blocks/video_button/video.css.',true,'1.1','all');
}
add_action('admin_footer', 'custom_video_admin');