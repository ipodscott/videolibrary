<?php acf_register_block(array(
	'name'				=> 'primary_content_block',
	'title'				=> __('Primary Content Block'),
	'description'		=> __('Primary Content Block'),
	'render_template'   => 'acf-blocks/primary-content-block/template.php',
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