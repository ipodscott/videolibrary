<?php 
	acf_register_block(array(
	'name'				=> 'section heading',
	'title'				=> __('Section Heading'),
	'description'		=> __('Block for Section Heading'),
	'render_template'   => 'acf-blocks/section-heading/main.php',
	'category'			=> 'custom-blocks',
	'icon'				=> 'screenoptions',
	'keywords'			=> array( 'columns' ),
));