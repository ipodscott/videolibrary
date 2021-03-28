<?php 
	acf_register_block(array(
	'name'				=> 'audio_button',
	'title'				=> __('Audio Button'),
	'description'		=> __('Block for audio button'),
	'render_template'   => 'acf-blocks/audio_button/template.php',
	'category'			=> 'custom-blocks',
	'icon'				=> 'controls-volumeon',
	'keywords'			=> array( 'columns' ),
));


// Add audio button dependencies
function prefix_add_audio_button() {
    wp_enqueue_style( 'audio_css', get_template_directory_uri() . '/acf-blocks/audio_button/css/plyr.css.',true,'1.1','all');
	wp_enqueue_style( 'audio_mods_css', get_template_directory_uri() . '/acf-blocks/audio_button/css/plyr_mods.css.',true,'1.1','all');
	wp_enqueue_script( 'plyr_js', get_template_directory_uri() . '/acf-blocks/audio_button/js/plyr.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'plyr_mods_js', get_template_directory_uri() . '/acf-blocks/audio_button/js/plyr_mods.js', array('plyr_js'), '1.0', true );
};

add_action( 'get_footer', 'prefix_add_audio_button' );

// Add audio button styles to the backend
function custom_audio_admin() {
	wp_enqueue_style( 'audio_mods_css', get_template_directory_uri() . '/acf-blocks/audio_button/css/plyr_mods.css.',true,'1.1','all');
}
add_action('admin_footer', 'custom_audio_admin');

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_605756a992b88',
	'title' => 'Audio Button',
	'fields' => array(
		array(
			'key' => 'field_605756c13e83b',
			'label' => 'Block Identifier',
			'name' => 'block_identifier',
			'type' => 'clone',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'clone' => array(
				0 => 'group_605144619ba0f',
			),
			'display' => 'seamless',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
		),
		array(
			'key' => 'field_605757af274c7',
			'label' => 'Settings',
			'name' => '',
			'type' => 'accordion',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'open' => 0,
			'multi_expand' => 0,
			'endpoint' => 0,
		),
		array(
			'key' => 'field_60575a1cba803',
			'label' => 'Title',
			'name' => 'title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_605757d0274c8',
			'label' => 'Audio Source',
			'name' => 'audio_source',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '100',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'upload' => 'Upload',
				'remote' => 'Remote',
			),
			'default_value' => false,
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_6057591a383e9',
			'label' => 'Upload',
			'name' => 'upload',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_605757d0274c8',
						'operator' => '==',
						'value' => 'upload',
					),
				),
			),
			'wrapper' => array(
				'width' => '100',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => 'mp3, m4a, ogg',
		),
		array(
			'key' => 'field_60575949383ea',
			'label' => 'File URL',
			'name' => 'file_url',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_605757d0274c8',
						'operator' => '==',
						'value' => 'remote',
					),
				),
			),
			'wrapper' => array(
				'width' => '100',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/audio-button',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;