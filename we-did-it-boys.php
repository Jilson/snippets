<?php

if ( function_exists( 'acf_add_options_sub_page' ) ){
 acf_add_options_sub_page(array(
  'title'      => 'Team Content',
  'parent'     => 'edit.php?post_type=team',
  'capability' => 'manage_options'
 ));
}

if( function_exists('acf_add_options_page') ) {
 acf_add_options_page();
}

?>