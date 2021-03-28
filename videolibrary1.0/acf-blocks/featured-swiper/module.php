<?php 
	acf_register_block(array(
	'name'				=> 'featured_swiper_block',
	'title'				=> __('Featured Swiper Block'),
	'description'		=> __('Featured Swiper Block'),
	'render_template'   => 'acf-blocks/featured-swiper/main.php',
	'category'			=> 'custom-blocks',
	'icon'				=> 'slides',
	'keywords'			=> array( 'slider' ),
));