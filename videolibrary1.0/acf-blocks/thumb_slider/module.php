<?php
	$block_folder = "thumb_slider"; 
	$block_path =  '/acf-blocks/' . $block_folder;
	acf_register_block(array(
		'name'				=> 'small_thumbnail_slider',
		'title'				=> __('Thumbnail Slider'),
		'description'		=> __('Block to display series of thumbnail style slider.'),
		'render_template'   =>  $block_path.'/template.php',
		'category'			=> 'custom-blocks',
		'icon'				=> 'align-center',
		'keywords'			=> array( 'slider' ),
	));
	
		// Read local acf.json
	$acf_json_data = locate_template($block_path.'/acf.json');
	$custom_fields = $acf_json_data ? json_decode(file_get_contents($acf_json_data), true) : array();
	
	foreach ($custom_fields as $custom_field) {
		acf_add_local_field_group($custom_field);
	}