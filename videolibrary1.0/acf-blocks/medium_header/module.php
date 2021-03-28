<?php 
	acf_register_block(array(
	'name'				=> 'medium_header',
	'title'				=> __('Medium Header'),
	'description'		=> __('Block for medium header'),
	'render_template'   => 'acf-blocks/medium_header/template.php',
	'category'			=> 'custom-blocks',
	'icon'				=> 'cover-image',
	'keywords'			=> array( 'columns' ),
	'supports'		=> [
		'align'			=> false,
		'anchor'		=> true,
		'customClassName'	=> true,
		'jsx' 			=> true,
	]
));

