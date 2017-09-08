  <div class="footer">
    
    <div class="footer-content">
      
      <?php        
      //Set Up Image Variables
      $img_src = wp_get_attachment_image_url( get_theme_mod( 'theme_logo' ), 'small' ); 
      $img_srcset =  wp_get_attachment_image_srcset( get_theme_mod( 'theme_logo' ) );
      $img_sizes = '310px';  
        
      //Logo from Customizer
      if(get_theme_mod( 'theme_alternate_logo' ) ) 
        echo '<div class="content-home"><a class="home-link" href="'.get_home_url().'"><img class="link-logo" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'" alt="logo"></a></div>';
      
      //Footer Navigaton 
      wp_nav_menu('menu_id=footer_navigation&container=&menu_class=content-menu&theme_location=footer_navigation');
      ?>
      
      <?php
      //Footer Text
      if(get_theme_mod( 'theme_footer_text' ))
        echo '<div class="content-text">'.get_theme_mod( 'theme_footer_text' ).'</div>';
      ?>
      
      <div class="content-social">
      
        <?php
        //Facebook Link
        if(get_theme_mod( 'theme_facebook_url' ))
          echo '<a class="social-facebook"  href="'.get_theme_mod( 'theme_facebook_url' ).'"><span class="facebook-icon"></span></a>';
  
        //Twitter Link
        if(get_theme_mod( 'theme_twitter_url' ))
          echo '<a class="social-twitter"  href="'.get_theme_mod( 'theme_twitter_url' ).'"><span class="twitter-icon"></span></a>';
        
        //Instagram Link
        if(get_theme_mod( 'theme_instagram_url' ))
          echo '<a class="social-instagram"  href="'.get_theme_mod( 'theme_instagram_url' ).'"><span class="instagram-icon"></span></a>';
  
        //Pinterest Link
        if(get_theme_mod( 'theme_pinterest_url' ))
          echo '<a class="social-pinterest"  href="'.get_theme_mod( 'theme_pinterest_url' ).'"><span class="pinterest-icon"></span></a>';

        //Pinterest Link
        if(get_theme_mod( 'theme_youtube_url' ))
          echo '<a class="social-youtube"  href="'.get_theme_mod( 'theme_pinterest_url' ).'"><span class="youtube-icon"></span></a>';

        //Pinterest Link
        if(get_theme_mod( 'theme_medium_url' ))
          echo '<a class="social-medium"  href="'.get_theme_mod( 'theme_medium_url' ).'"><span class="medium-icon"></span></a>';
        ?>
      
      </div>
      
    </div>      
  </div>
</body>

<?php wp_footer();?>