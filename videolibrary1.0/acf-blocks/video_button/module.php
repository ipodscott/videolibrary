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


// Import ACF Json File
$acf_json_data = locate_template($block_root.'/acf.json');
$custom_fields = $acf_json_data ? json_decode(file_get_contents($acf_json_data), true) : array();

foreach ($custom_fields as $custom_field) {
	acf_add_local_field_group($custom_field);
}