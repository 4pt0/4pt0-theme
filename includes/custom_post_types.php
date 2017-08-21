<?php 

//======================================================================
// "VENTURE" CUSTOM POST TYPE
//======================================================================

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function create_posttype() {
  register_post_type( 'venture',
    array(
      'labels' => array(
	      'name' => __( 'Ventures' ),
	      'singular_name' => __( 'Venture' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'venture'),
      'taxonomies' => array('category'),
    )
  );
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
?>