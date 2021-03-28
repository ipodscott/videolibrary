<? 
	acf_register_block(array(
		'name'				=> 'text area',
		'title'				=> __('Fullwidth Text Area'),
		'description'		=> __('Fullwidth Text Area Content'),
		'render_template'   => 'acf-blocks/text-area/main.php',
		'category'			=> 'custom-blocks',
		'icon'				=> 'media-text',
		'keywords'			=> array( 'columns' ),
	));