<?php
	acf_register_block(array(
	'name'				=> 'big header',
	'title'				=> __('Big Header'),
	'description'		=> __('Block for a Big Header'),
	'render_template'   => 'acf-blocks/big-header/main.php',
	'category'			=> 'custom-blocks',
	'icon'				=> 'screenoptions',
	'keywords'			=> array( 'columns' ),
));