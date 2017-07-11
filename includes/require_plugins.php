<?php
/**
 * Require Theme Dependent Plugins: ACF
 */
function require_plugins_error() {
  if( !class_exists('acf') || !class_exists('wp-user-avatar')) {
  	$class = 'notice notice-error';
  	$message = __( '<strong>Vital plugins are missing!</strong> Please contact tech support immediately to resolve the issue', 'theme' );
  	printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message ); 
  }
}
add_action( 'admin_notices', 'require_plugins_error' );
?>