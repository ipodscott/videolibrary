<?php 
	acf_register_block(array(
		'name'				=> 'swiper_block',
		'title'				=> __('Swiper Block'),
		'description'		=> __('Swiper Block'),
		'render_template'   => 'acf-blocks/swpier_block/main.php',
		'category'			=> 'custom-blocks',
		'icon'				=> 'slides',
		'keywords'			=> array( 'slider' ),
	));