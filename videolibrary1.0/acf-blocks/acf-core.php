<?
	
function prefix_add_acf_footer_styles() {

    wp_enqueue_style( 'acf_styles', get_template_directory_uri() . '/acf-blocks/css/acf-blocks.css',true,'1.1','all');
};
add_action( 'get_footer', 'prefix_add_acf_footer_styles' );

	
	add_action('acf/init', 'my_acf_init');
		function my_acf_init() {
			
			// check function exists
			if( function_exists('acf_register_block') ) {
				include_once 'audio_button/module.php';
				include_once 'big_header/module.php';
				include_once 'elementor_block/module.php';
				include_once 'fullwidth/module.php';
				include_once 'gallery_block/module.php';
				include_once 'large_slider/module.php';
				include_once 'primary_content_block/module.php';				
				include_once 'thumb_slider/module.php';
				include_once 'video_button/module.php';
			}
		}
		
			
		
		
function my_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'custom-blocks',
				'title' => __( 'Custom Blocks', 'custom-blocks' ),
				'icon'  => 'layout',
			),
		)
	);
}
add_filter( 'block_categories', 'my_block_category',  3, 2);


function custom_block_category( $categories ) {
    $custom_block = array(
        'slug'  => 'my-blocks',
        'title' => __( 'My Test Blocks', 'my-blocks' ),
    );

    $categories_sorted = array();
    $categories_sorted[0] = $custom_block;

    foreach ($categories as $category) {
        $categories_sorted[] = $category;
    }

    return $categories_sorted;
}
add_filter( 'block_categories', 'custom_block_category', 10, 2);


function advanced_custom_field_excerpt() {
	global $post;
	$text = get_field('big_title_copy');
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length =30; // 30 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}

function custom_acf_css() {
    wp_enqueue_style( 'acf_styles', get_template_directory_uri() . '/acf-blocks/css/acf-blocks.css',true,'1.1','all');
    }
add_action('admin_footer', 'custom_acf_css');


?>