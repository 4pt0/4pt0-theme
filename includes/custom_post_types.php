<?php 

//======================================================================
// "VENTURES" CUSTOM POST TYPE
//======================================================================

function create_posttype() {
  register_post_type( 'ventures',
    array(
      'labels' => array(
	      'name' => __( 'Ventures' ),
	      'singular_name' => __( 'Venture' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'ventures'),
      'taxonomies' => array('category' ),
    )
  );
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

?>