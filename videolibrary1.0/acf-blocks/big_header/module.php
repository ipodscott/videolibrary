<?php
	$block_folder = "big_header"; 
	$block_path =  '/acf-blocks/' . $block_folder;
	acf_register_block(array(
	'name'				=> 'big header',
	'title'				=> __('Big Header'),
	'description'		=> __('Block for a Big Header'),
	'render_template'   =>  $block_path.'/template.php',
	'category'			=> 'custom-blocks',
	'icon'				=> 'screenoptions',
	'keywords'			=> array( 'columns' ),
));

	// Read local acf.json
	$acf_json_data = locate_template($block_path.'/acf.json');
	$custom_fields = $acf_json_data ? json_decode(file_get_contents($acf_json_data), true) : array();
	
	foreach ($custom_fields as $custom_field) {
		acf_add_local_field_group($custom_field);
	}