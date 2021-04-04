<?php
	$block_root = "/acf-blocks/video_button/";
	acf_register_block(array(
	'name'				=> 'video_button',
	'title'				=> __('Modal Video Button'),
	'description'		=> __('Block for modal video button'),
	'render_template'   =>  $block_root.'template.php',
	'mode'				=> 'preview',
	'category'			=> 'custom-blocks',
	'icon'				=> 'format-video',
	'keywords'			=> array( 'slide' ),
	'supports'		=> [
		'align'			=> false,
		'anchor'		=> true,
		'customClassName'	=> true,
		'mode'          => true,
		]
));

wp_enqueue_style( 'video.css', get_template_directory_uri() . $block_root. 'video.css',true,'1.1','all');
wp_enqueue_script( 'video.js', get_template_directory_uri() . $block_root. 'video.js', array('jquery'), '1.0', true );


// Add video button styles to the backend
function custom_audio_admin() {
	$block_root = "/acf-blocks/video_button/";
	wp_enqueue_style( 'video.css', get_template_directory_uri() . $block_root. 'video.css',true,'1.1','all');
}
add_action('admin_footer', 'prefix_add_video_button');
/*Import ACF Json */


// Import ACF Json File
$acf_json_data = locate_template($block_root.'/acf.json');
$custom_fields = $acf_json_data ? json_decode(file_get_contents($acf_json_data), true) : array();

foreach ($custom_fields as $custom_field) {
	acf_add_local_field_group($custom_field);
}