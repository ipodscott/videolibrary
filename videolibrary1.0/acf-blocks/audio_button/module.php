<?php 
	$block_root = "/acf-blocks/audio_button/";
	acf_register_block(array(
	'name'				=> 'audio_button',
	'title'				=> __('Audio Button'),
	'description'		=> __('Block for audio button'),
	'render_template'   =>  $block_root.'template.php',
	'category'			=> 'custom-blocks',
	'icon'				=> 'controls-volumeon',
	'keywords'			=> array( 'columns' ),
	'supports'		=> [
		'align'			=> false,
		'anchor'		=> true,
		'customClassName'	=> true,
		'mode'          => true,
		]
));
	
	// Add audio button dependencies we do it like this because sometimes you have to.
	function prefix_add_audio_button() {
		$block_root = "/acf-blocks/audio_button/";
	    wp_enqueue_style( 'audio_css', get_template_directory_uri() . $block_root. 'css/plyr.css',true,'1.1','all');
		wp_enqueue_style( 'audio_mods_css', get_template_directory_uri() . $block_root. 'css/plyr_mods.css',true,'1.1','all');
		wp_enqueue_script( 'plyr_js', get_template_directory_uri() . $block_root. 'js/plyr.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'plyr_mods_js', get_template_directory_uri() . $block_root. 'js/plyr_mods.js', array('plyr_js'), '1.0', true );
	};

	add_action( 'get_footer', 'prefix_add_audio_button' );
	
	// Add audio button styles to the backend so we can preview the button
	function custom_plyr_admin() {
		$block_root = "/acf-blocks/audio_button/";
		wp_enqueue_style( 'admin_video_mods_css', get_template_directory_uri() . $block_root. 'css/plyr_mods.css',true,'1.1','all');
	}
	add_action('admin_footer', 'custom_plyr_admin');
	
	// Read local acf.json
	$acf_json_data = locate_template($block_root.'/acf.json');
	$custom_fields = $acf_json_data ? json_decode(file_get_contents($acf_json_data), true) : array();
	
	foreach ($custom_fields as $custom_field) {
		acf_add_local_field_group($custom_field);
	}