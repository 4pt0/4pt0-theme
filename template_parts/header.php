<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head();?>    
    
  </head>
  
  <body <?php body_class(); ?>>

    <?php
    //Header Embed Codes
    if(get_theme_mod( 'theme_header_code' ) ) 
      echo get_theme_mod( 'theme_header_code' );
    ?>

    <div class="header">  
      <div class="header-content">
        
        <?php           
        //Set Up Logo Variables 
        $img_src = wp_get_attachment_image_url( get_theme_mod( 'theme_logo' ), 'small' );
        $img_srcset =  wp_get_attachment_image_srcset( get_theme_mod( 'theme_logo' ) );
        $img_sizes = '520px';  
          
        //Logo from Customizer 
        if(get_theme_mod( 'theme_logo' ) ) 
          echo '<div class="content-logo"> <a class="logo-link" href="'.get_home_url().'"><img class="link-image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'" alt="logo"></a></div>';

         //Set Up 4.0 Alternative Logo Variables
        $alternate_img_src = wp_get_attachment_image_url( get_theme_mod( 'theme_alternate_logo' ), 'small' );
        $alternate_img_srcset =  wp_get_attachment_image_srcset( get_theme_mod( 'theme_alternate_logo' ) );
        $alternate_img_sizes = '484px';  
          
        //Logo from Customizer 
        if(get_theme_mod( 'theme_alternate_logo' ) ) 
          echo '<div class="content-alternate_logo"> <a class="alternate_logo-link" href="'.get_home_url().'"><img class="link-image" src="'.esc_url($alternate_img_src).'" srcset="'.esc_attr($alternate_img_srcset).'" sizes="'.$alternate_img_sizes.'" alt="4.0 Schools"></a></div>';
        ?>
        
        <a class="content-toggle" id="header_menu_toggle"></a>

        <?php
        //Header Navigation
        wp_nav_menu('menu_id=header_navigation&container=&menu_class=content-menu&theme_location=header_navigation');
        ?>
        
      </div>
    </div>