<?php
add_action( 'init', 'create_location_tax' );
function create_location_tax() {
	register_taxonomy(
		'city',
		'location',
		array(
			'label' => __( 'City' ),
			'rewrite' => array( 'slug' => 'city' ),
			'hierarchical' => true,
		)
	);
}

/*** Custom Post Type Locations ***/
add_action( 'init', 'create_post_type_locations' );
function create_post_type_locations() {
	register_post_type( 'locations',
		array( 
			'menu_icon' => 'dashicons-location', /** list of icons: https://developer.wordpress.org/resource/dashicons/ **/
			'labels' => array(
				'name' => __( 'Locations' ),
				'singular_name' => __( 'Location' ),
				'add_new_item' => __('Add New Location'),
				'edit_item' => __('Edit Location'),
				'new_item' => __('New Location'),
				'all_items' => __('All Locations'),
				'view_item' => __('View Locations'),
				'search_items' => __('Search Locations'),
				'not_found' =>  __('No Locations found'),
				'not_found_in_trash' => __('No Locations found in Trash')
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title','editor','thumbnail','comments','revisions', 'featured' ),
			'taxonomies' => array('city')
		)
	);
}//End CPT Registration
?>