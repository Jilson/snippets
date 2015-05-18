<?php



/* Custom Thumbnail Sizes */
add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
  add_image_size( 'category-thumb', 300 ); // 300 pixels wide (and unlimited height)
  add_image_size( 'homepage-thumb', 220, 180, true ); // (cropped)
}

?>