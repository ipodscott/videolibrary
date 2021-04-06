<?php
	acf_register_block(array(
		'name'				=> 'link_wells',
		'title'				=> __('Link Wells'),
		'description'		=> __('Block to display series of thumbnail style links.'),
		'render_template'   => 'acf-blocks/link-wells/main.php',
		'category'			=> 'custom-blocks',
		'icon'				=> 'align-center',
		'keywords'			=> array( 'slider' ),
	));