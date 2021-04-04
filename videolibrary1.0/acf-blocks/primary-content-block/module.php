<?php 
	$block_root = "/acf-blocks/primary-content-block/";
	acf_register_block(array(
	'name'				=> 'primary_content_block',
	'title'				=> __('Primary Content Block'),
	'description'		=> __('Primary Content Block'),
	'render_template'   =>  $block_root.'template.php',
	'category'			=> 'custom-blocks',
	'icon'				=> 'table-row-before',
	'keywords'			=> array( 'slide' ),
	'supports'		=> [
		'align'			=> false,
		'anchor'		=> true,
		'customClassName'	=> true,
		'jsx' 			=> true,
	]
));

 $acf_json_data = locate_template($block_root.'/acf.json');
 $custom_fields = $acf_json_data ? json_decode(file_get_contents($acf_json_data), true) : array();
 
 foreach ($custom_fields as $custom_field) {
	 acf_add_local_field_group($custom_field);
  }