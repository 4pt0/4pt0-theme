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
        <a href="<?php echo site_url()?>" class="header_content-logo"><img class="logo-image" src="<?php echo get_template_directory_uri(); ?>/images/header-logo.svg"></a>	
        <div class="header_content-nav_toggle"><div class="nav_toggle-bars"></div><div class="nav_toggle-x"></div></div>

          <?php 
          wp_nav_menu( array(
    				'theme_location' => 'primary_menu',
    				'container_id' => 'overlay',
    				'container_class' => 'header_content-links',
    				'menu_class' => 'links-navigation',
    				'depth' => 1
          ) ); 
    		  ?>

      </div>
    </div>
