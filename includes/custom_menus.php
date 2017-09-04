<?php

//Add theme menu
function register_theme_menu() {
  register_nav_menu('header_navigation',__( 'Header Navigation' ));
  register_nav_menu('footer_navigation',__( 'Footer Navigation' ));

}
add_action( 'init', 'register_theme_menu' );
  
?>