<?php

function register_theme_menu() {
  
  //Primary Menu
  register_nav_menu('primary_menu',__( 'Primary Menu' ));
  
}
add_action( 'init', 'register_theme_menu' );
  
?>