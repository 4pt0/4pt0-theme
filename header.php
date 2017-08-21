<!DOCTYPE html>
<html lang="en-us">
  
  <head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head();?>    
    
  </head>
  
  <body>
  <div class="header">
    <div class="header-header_content">
      <div class="header_content-nav_toggle"></div>        
      <a class="header_content-logo" href="<?php echo site_url()?>">
        <img class="logo-image" src="<?php echo get_template_directory_uri(); ?>/images/header-logo.svg">
      </a>	  		  
      <?php
      if ( get_theme_mod( 'header_action_text' ) ) 
        echo '<a class="header_content-action_button" href="'.get_theme_mod( 'header_action_url' ).'">'.get_theme_mod( 'header_action_text' ).'</a>';
      ?>
    </div>
    
    <?php 
    wp_nav_menu( array(
			'theme_location' => 'primary_menu',
			'container_class' => 'header-navigation',
			'menu_class' => 'navigation-menu',
			'depth' => 1
    ) ); 
	  ?>
	  
  </div>
