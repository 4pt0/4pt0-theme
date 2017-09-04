<?php
/**
 * Enqueue scripts and styles.
 */
function theme_scripts_and_styles() {
  
  //Styles
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );	
		
	//Scripts
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/scripts/jquery.fancybox.min.js', array( 'jquery',));
	wp_enqueue_script( 'theme-navigation', get_template_directory_uri() . '/scripts/themeNavigation.js', array( 'jquery',));
  wp_enqueue_script( 'theme-user_map', get_template_directory_uri() . '/scripts/userMap.js', array( 'jquery', 'google-map', 'map-markerclusterer', 'map-tiles'   ) );
  wp_enqueue_script( 'theme-filterable_content', get_template_directory_uri() . '/scripts/themeFilterableContent.js', array( 'jquery', 'google-map' ) );
  wp_enqueue_script( 'theme-slideshow',  get_template_directory_uri().'/scripts/themeSlideshow.js', array( 'jquery' ) );
	wp_enqueue_script( 'theme-image_scaling', get_template_directory_uri() . '/scripts/themeImageScaling.js', array( 'jquery', 'modernizer-custom_build'));
  wp_enqueue_script( 'map-richmarker',  get_template_directory_uri().'/scripts/richmarker.js', array( 'google-map' ) );
  wp_enqueue_script( 'map-markerclusterer',  get_template_directory_uri().'/scripts/markerclusterer.js', array( 'google-map' ) );
  wp_enqueue_script( 'map-tiles', 'http://maps.stamen.com/js/tile.stamen.js?v1.3.0', array( 'google-map' ) );
  wp_enqueue_script( 'google-map', 'http://maps.googleapis.com/maps/api/js?key=AIzaSyBekoSVXQxTDFrLifAGwzl80VllFSsZa14', array( 'jquery' ));
  wp_enqueue_script( 'theme-waypoints',  get_template_directory_uri().'/scripts/themeWaypoints.js', array( 'waypoints' ) );
  wp_enqueue_script( 'waypoints',  get_template_directory_uri().'/scripts/jquery.waypoints.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'modernizer-custom_build',  get_template_directory_uri().'/scripts/modernizr-customBuild.js' );
  
  //Ajax
  wp_localize_script( 'theme-filterable_content', 'ajax_params', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts_and_styles' );
?>