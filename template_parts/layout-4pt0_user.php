<?php
if(is_author()):

  //User Data
  $user_data = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

  //ACF Fields
  $venture = get_field('venture', 'user_'.$user_data->ID);
  $location = get_field('location', 'user_'.$user_data->ID);
  $job_title = get_field('job_title', 'user_'.$user_data->ID);
  $quote = get_field('quote', 'user_'.$user_data->ID);
  $facebook_url = get_field('facebook_url', 'user_'.$user_data->ID);
  $twitter_handle = get_field('twitter_handle', 'user_'.$user_data->ID);
  $linkedin_url = get_field('linkedin_url', 'user_'.$user_data->ID);
  
  //User Meta
  $first_name = $user_data->first_name;    
  if(empty($first_name))
    $first_name = $user_data->display_name;

  //Last Name
  $last_name = $user_data->last_name;    
  if(empty($last_name))
    $last_name = $user_data->display_name;
  
  //Standard User Fields
  $bio = get_the_author_meta('description', $user_data->ID);
  $website = get_the_author_meta('website', $user_data->ID);
 
?>

<div class="layout-user">
  <div class="user-header">
	  <div class="header-content">
		  <div class="content-avatar">
				<div class="avatar-headshot"><?php echo get_avatar( $user_data->ID, 400 ); ?></div>
		  </div>
			<div class= "content-meta">
				<div class="meta-name"><?php echo $first_name.' '.$last_name; ?></div>
				<div class="meta-title_and_venture">
  				
  				<?php
          //Job Title
          if($job_title)
  				  echo '<div class="title_and_venture-title">'.$job_title.'</div>';

          //Begin Venture
  				if($venture):
  				?>
          
          <div class="title_and_venture-venture">
            
            <?php
            //Venture 
            $post = $venture;
            setup_postdata( $post ); 
            echo '<a class="venture-link" href="'.get_permalink().'">'.get_the_title().'</a>';
            wp_reset_postdata();
            ?>
            
          </div>
          
          <?php
          //End Ventures
  				endif;
  				?>

        </div>
				<div class="meta-tags">
  				
				  <?php
  				//Show Roles              
  				if(!empty($user_data->roles)){
    				
    				//Remove any Mention of WordPress Standard Roles
    				$filtered_roles = array_diff($user_data->roles, array('subscriber', 'administrator', 'author', 'editor'));
    				
    				//Show Each Role
    				foreach( $filtered_roles as $role)
    			    echo '<div class="tags-role">'.str_replace ('_', ' ', $role).'</div>'; 
    			    
  				}
				  ?>
				  
			  </div>
		  </div>
	  </div>
  </div>
  
  <?php
  //Quote
  if($quote)
    echo '<div class="user-quote"><div class="quote-body">'.$quote.'</div></div>';
  
  //Bio
  if(!empty($bio))
   echo '<div class="user-bio"><div class="bio-title">About '.$first_name.'</div><div class="bio-body">'.$bio.'</div></div>';
  ?>
  
  <div class="user-footer">
	  <div class="footer-venture_and_contact">
			  
		  <?php
      //Start Venture
			if($venture):
			?>

		  <div class="venture_and_contact-venture">
			  <div class="venture-heading"><?php echo $first_name; ?>'s Venture</div>
				
				<?php
        //Setup Venture Object
        $post = $venture;
        setup_postdata( $post ); 
        ?>

				<div class="venture-title"><?php the_title(); ?></div>
				<div class="venture-body"><?php the_field('brief_description');?></div>
				
				<?php
        //Venture Website
        if(get_field('official_website'))
				  echo '<a class="venture-url" href="'.get_field('official_website').'">Visit '.str_replace (array('http://', '/'), '', get_field('official_website')).'</a>';
				
  		  //Reset Venture Data
  		  wp_reset_postdata();
  		  ?>		
			
			</div>
		  
		  <?php
      //End Venture
			endif;
			
			//Start Contact Info
			if(!empty($user_data->user_url) || $twitter_handle || $facebook_url):
			?>	
					
			<div class="venture_and_contact-contact">
				<div class="contact-title">Contact <?php echo $first_name; ?></div>
				<div class="contact-links">
  				
  				<?php
          //Website
          if(!empty($user_data->user_url))
					  echo '<a class="links-website" href="'.esc_url( $user_data->user_url ).'" target="_blank">'.$user_data->user_url.'</a>';
				  
				  //Begin Social
				  if($twitter_handle || $facebook_url):
				  ?>
					
					<div class="links-social_media">
  					
  					<?php
    				//Twitter
    				if($twitter_handle)
						  echo '<a class="social_media-link" href="http://twitter.com/'.str_replace ('@', '', $twitter_handle).'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
						
						//Facebook 
    				if($facebook_url)
  						echo '<a class="social_media-link" href="'.$facebook_url.'" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>';

						//LinkedIn 
    				if($linkedin_url)
  						echo '<a class="social_media-link" href="'.$linkedin_url.'" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
  						?>
						
				  </div>
				  
				  <?php
          //End Social
  				endif;  
				  ?>
				  
				</div>
			</div>
			
			<?php
  		//End Contact Info
  		endif;
  		?>
  		
	  </div>    
  </div>
</div>

<?php 
endif;
?>