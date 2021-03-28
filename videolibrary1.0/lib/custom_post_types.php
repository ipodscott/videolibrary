<?	
	// -------------------------------- Our custom post type function movie  --------------------------------

function create_posttype_movies() {

	register_post_type( 'movie',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Movies' ),
				'singular_name' => __( 'Movie' ),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'movie'),
			'menu_icon' => 'dashicons-editor-video',
			'show_in_rest' => true
		)
	);
}

add_action( 'init', 'create_posttype_movies' );

	
function my_taxonomies_movies() {
	$labels = array(
		'name'              => _x( 'Movies Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Movie Category', 'taxonomy singular name' ),
		'menu_name'         => __( 'Movie Categories' ),
	);
	$args = array(
		'show_in_rest' => true,
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'movies_category', 'movie', $args );
}
add_action( 'init', 'my_taxonomies_movies', 0 );


	// -------------------------------- Create Movies Collection Post Type  --------------------------------

function create_posttype_movies_collection() {

	register_post_type( 'movies_collection',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Movies Collection' ),
				'singular_name' => __( 'Movie Collection' ),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'movie_collection'),
			'menu_icon' => 'dashicons-table-col-after',
			'show_in_rest' => true
		)
	);
}

add_action( 'init', 'create_posttype_movies_collection' );


// Create Serials Collection Taxonomy
function my_taxonomies_movies_collection() {
	$labels = array(
		'name'              => _x( 'Collection Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Collection Category', 'taxonomy singular name' ),
		'menu_name'         => __( 'Collection Categories' ),
		'show_in_rest' => true
		
	);
	$args = array(
		'show_in_rest' => true,
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'movie_collection_category', 'movies_collection', $args );
}
add_action( 'init', 'my_taxonomies_movies_collection', 0 );


	// -------------------------------- Create Seials Post Type  --------------------------------

function create_posttype_serials() {

	register_post_type( 'serial',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Serials' ),
				'singular_name' => __( 'Serial' ),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'serial'),
			'menu_icon' => 'dashicons-superhero',
			'show_in_rest' => true
		)
	);
}

add_action( 'init', 'create_posttype_serials' );


// Create Serials Taxonomy
function my_taxonomies_serial() {
	$labels = array(
		'name'              => _x( 'Serial Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Serial Category', 'taxonomy singular name' ),
		'menu_name'         => __( 'Serial Categories' ),
		'show_in_rest' => true
	);
	$args = array(
		'show_in_rest' => true,
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'serial_category', 'serial', $args );
}
add_action( 'init', 'my_taxonomies_serial', 0 );



	// -------------------------------- Create Seials Collection Post Type  --------------------------------

function create_posttype_serials_collection() {

	register_post_type( 'serials_collection',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Serials Collection' ),
				'singular_name' => __( 'Serial Collection' ),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'serial_collection'),
			'menu_icon' => 'dashicons-table-col-after',
			'show_in_rest' => true
		)
	);
}

add_action( 'init', 'create_posttype_serials_collection' );


// Create Serials Collection Taxonomy
function my_taxonomies_serial_collection() {
	$labels = array(
		'name'              => _x( 'Collection Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Collection Category', 'taxonomy singular name' ),
		'menu_name'         => __( 'Collection Categories' ),
		'show_in_rest' => true
		
	);
	$args = array(
		'show_in_rest' => true,
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'serial_collection_category', 'serials_collection', $args );
}
add_action( 'init', 'my_taxonomies_serial_collection', 0 );



	// -------------------------------- Create Post Type TV  --------------------------------

function create_posttype_tv() {

	register_post_type( 'tv_shows',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'TV Shows' ),
				'singular_name' => __( 'TV Show' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'tv_show'),
			'menu_icon' => 'dashicons-desktop',
			'show_in_rest' => true
		)
	);
}

add_action( 'init', 'create_posttype_tv' );


// Create TV Show Taxonomy
function my_taxonomies_tv() {
	$labels = array(
		'name'              => _x( 'TV Show Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'TV Show Category', 'taxonomy singular name' ),
		'menu_name'         => __( 'TV Show Categories' ),
		'show_in_rest' => true
	);
	$args = array(
		'show_in_rest' => true,
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'tv_category', 'tv_shows', $args );
}
add_action( 'init', 'my_taxonomies_tv', 0 );



	// -------------------------------- Create TV Series Post Type -------------------------------- 

function create_posttype_tv_series() {

	register_post_type( 'tv_series',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'TV Series' ),
				'singular_name' => __( 'TV Series' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'tv_series'),
			'menu_icon' => 'dashicons-table-col-after',
			'show_in_rest' => true
		)
	);
}

add_action( 'init', 'create_posttype_tv_series' );


// Create TV Series Taxonomy
function my_taxonomies_tv_series() {
	$labels = array(
		'name'              => _x( 'TV Series Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'TV Series Category', 'taxonomy singular name' ),
		'menu_name'         => __( 'TV Series Categories' ),
	);
	$args = array(
		'show_in_rest' => true,
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'tv_series_category', 'tv_series', $args );
}
add_action( 'init', 'my_taxonomies_tv_series', 0 );



	// -------------------------------- Create Promos Post Type -------------------------------- 

function create_posttype_promos() {

	register_post_type( 'promo',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Promos' ),
				'singular_name' => __( 'Promo' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'promo'),
			'menu_icon' => 'dashicons-awards',
			'show_in_rest' => true
		)
	);
}

add_action( 'init', 'create_posttype_promos' );


// Create TV Series Taxonomy
function my_taxonomies_promos() {
	$labels = array(
		'name'              => _x( 'Promos Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Promos Category', 'taxonomy singular name' ),
		'menu_name'         => __( 'Promos Categories' ),
	);
	$args = array(
		'show_in_rest' => true,
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'promo_category', 'promo', $args );
}
add_action( 'init', 'my_taxonomies_promos', 0 );

