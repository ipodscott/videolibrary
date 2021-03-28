<?php acf_register_block(array(
	'name'				=> 'column_block',
	'title'				=> __('Column Block'),
	'description'		=> __('Column Block'),
	'render_template'   => 'acf-blocks/column-block/template.php',
	'category'			=> 'custom-blocks',
	'icon'				=> 'columns',
	'keywords'			=> array( 'slide' ),
	'supports'		=> [
		'align'			=> false,
		'anchor'		=> true,
		'customClassName'	=> true,
		'jsx' 			=> true,
	]
));