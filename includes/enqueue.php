<?php
/**
 * Enqueue scripts and styles.
 */
function theme_scripts_and_styles() {
  
  //Styles
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );	
	
	//Scripts
	wp_enqueue_script( 'navigation-modal', get_template_directory_uri() . '/scripts/navigationModal.js', array( 'jquery',));
  wp_enqueue_script( 'theme-user_map', get_template_directory_uri() . '/scripts/userMap.js', array( 'jquery', 'google-map', 'map-markerclusterer', 'map-tiles'   ) );
  wp_enqueue_script( 'theme-user_list', get_template_directory_uri() . '/scripts/filterableContent.js', array( 'jquery', 'google-map' ) );
  wp_enqueue_script( 'map-richmarker',  get_template_directory_uri().'/scripts/richmarker.js', array( 'google-map' ) );
  wp_enqueue_script( 'map-markerclusterer',  get_template_directory_uri().'/scripts/markerclusterer.js', array( 'google-map' ) );
  wp_enqueue_script( 'map-tiles', 'http://maps.stamen.com/js/tile.stamen.js?v1.3.0', array( 'google-map' ) );
  wp_enqueue_script( 'google-map', 'http://maps.googleapis.com/maps/api/js?key=AIzaSyBekoSVXQxTDFrLifAGwzl80VllFSsZa14', array( 'jquery' ));
  wp_enqueue_script( 'theme-waypoints',  get_template_directory_uri().'/scripts/themeWaypoints.js', array( 'waypoints' ) );
  wp_enqueue_script( 'waypoints',  get_template_directory_uri().'/scripts/jquery.waypoints.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'theme-flowtype',  get_template_directory_uri().'/scripts/themeFlowtype.js', array( 'jquery' ) );
  wp_enqueue_script( 'flowtype',  get_template_directory_uri().'/scripts/flowtype.js', array( 'jquery' ) );

  //Ajax
  wp_localize_script( 'theme-user_list', 'ajax_params', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts_and_styles' );
?>