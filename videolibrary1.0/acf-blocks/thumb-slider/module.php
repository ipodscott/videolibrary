<?php
	acf_register_block(array(
		'name'				=> 'small_thumbnail_slider',
		'title'				=> __('Thumbnail Slider'),
		'description'		=> __('Block to display series of thumbnail style slider.'),
		'render_template'   => 'acf-blocks/thumb-slider/main.php',
		'category'			=> 'custom-blocks',
		'icon'				=> 'align-center',
		'keywords'			=> array( 'slider' ),
	));