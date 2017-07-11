<?php
  
if ( ! function_exists( 'theme_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function theme_setup() {
  	 
  	// Add default posts and comments RSS feed links to head.
  	add_theme_support( 'automatic-feed-links' );
  
  	/*
  	 * Let WordPress manage the document title.
  	 * By adding theme support, we declare that this theme does not use a
  	 * hard-coded <title> tag in the document head, and expect WordPress to
  	 * provide it for us.
  	 */
  	add_theme_support( 'title-tag' );
    
  	/*
  	 * Switch default core markup for search form
  	 * to output valid HTML5.
  	 */
  	add_theme_support( 'html5', array(
  		'search-form'
  	) );
    
  }
endif;
add_action( 'after_setup_theme', 'theme_setup' );  

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'content_width', 1200 );
}
add_action( 'after_setup_theme', 'theme_content_width', 0 );

/**
 * Set excerpt display.
 */
function theme_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'theme_excerpt_more' );

/**
 * Set excerpt length.
 */
function theme_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'theme_custom_excerpt_length' );

?>