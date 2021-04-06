<?php
	$block_folder = "gallery_block"; 
	$block_path =  '/acf-blocks/' . $block_folder;
	acf_register_block(array(
	'name'				=> 'gallery_block',
	'title'				=> __('Gallery Block'),
	'description'		=> __('Block for gallery slideshow'),
	'render_template'   =>  $block_path.'/template.php',
	'category'			=> 'custom-blocks',
	'icon'				=> 'format-gallery',
	'keywords'			=> array( 'columns' ),
	'enqueue_style'     => get_template_directory_uri() . $block_path. '/css/jquery.fancybox.min.css',
	'enqueue_script'    => get_template_directory_uri() . $block_path. '/js/jquery.fancybox.min.js',
	'supports'		=> [
		'align'			=> false,
		'anchor'		=> true,
		'customClassName'	=> true,
		'mode'          => true,
		]
));

/*Import ACF Json */

$acf_json_data = locate_template($block_path.'/acf.json');
$custom_fields = $acf_json_data ? json_decode(file_get_contents($acf_json_data), true) : array();

foreach ($custom_fields as $custom_field) {
	acf_add_local_field_group($custom_field);
}