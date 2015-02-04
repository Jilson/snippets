<?php
add_action( 'init', 'create_book_tax' );
function create_book_tax() {
	register_taxonomy(
		'genre',
		'book',
		array(
			'label' => __( 'Genre' ),
			'rewrite' => array( 'slug' => 'genre' ),
			'hierarchical' => true,
		)
	);
}

/*** Custom Post Type Recipes ***/
add_action( 'init', 'create_post_type_book' );
function create_post_type_book() {
	register_post_type( 'books',
		array( 
			'labels' => array(
				'name' => __( 'Books' ),
				'singular_name' => __( 'Book' ),
				'add_new_item' => __('Add New Book'),
				'edit_item' => __('Edit Book'),
				'new_item' => __('New Book'),
				'all_items' => __('All Books'),
				'view_item' => __('View Books'),
				'search_items' => __('Search Books'),
				'not_found' =>  __('No Books found'),
				'not_found_in_trash' => __('No Books found in Trash')
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title','editor','thumbnail','comments','revisions', 'featured' ),
			'taxonomies' => array('genre')
		)
	);
}//End CPT Registration
?>