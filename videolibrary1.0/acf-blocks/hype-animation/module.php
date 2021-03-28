<?php
	acf_register_block(array(
	'name'				=> 'hype animation',
	'title'				=> __('Hype Animation'),
	'description'		=> __('Block for Hype Animation'),
	'render_template'   => 'acf-blocks/hype-animation/main.php',
	'category'			=> 'custom-blocks',
	'icon'				=> 'buddicons-tracking',
	'keywords'			=> array( 'columns' ),
));