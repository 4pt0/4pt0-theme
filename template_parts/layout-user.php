<?php
if(is_author()):

  //Author Variables
  $user_data = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
  $location = get_field('location', 'user_'.$user_data->ID);
  $city = explode( "," , $location['address'])[1];
?>

<div class="layout-user">
  <div class="user-header">
	  <div class="header-content">
		  <div class="content-avatar">
				<div class="avatar-headshot"><?php echo get_avatar( $user_data->ID, 1000 ); ?></div>
		  </div>
			<div class= "content-meta">
				<div class="meta-name"><?php echo $user_data->display_name; ?></div>
				<div class="meta-title_and_venture">
  				
  				<?php
          //Job Title
          if(get_field('job_title', 'user_'.$user_data->ID))
  				  echo '<div class="title_and_venture-title">'.get_field('job_title', 'user_'.$user_data->ID).'</div>';
  				?>
  				<div class="title_and_venture-venture">
            <a class="venture-link" href="#">Explorable Places</a>
  				</div>
        </div>
				<div class="meta-tags">
				  <a class="tags-role" href="#">Tiny Alum</a> 
				  <?php
  				//Roles
  				  
  				//Location
  				if($location)
				    echo '<div class="tags-location" href="#">'.$city.'</a>';
				  ?>
			  </div>
		  </div>
	  </div>
  </div>
  <div class="user-quote">
		<div class="quote-body">I applied to tiny because I was excited to get support from area experts around pushing my to the next level.<!-- <?php the_field('quote', $post->ID);?> --></div>
  </div>
  <div class="user-bio">
	  <div class="bio-title">About <?php echo $curauth->first_name; ?></div>
	  <div class="bio-body">This user set product vision and direction for Explorable Places: a responsive web-based platform for finding field trips aligned to the curriculum. Conducted user testing with teachers and museum professionals to refine product and developed requirements based on user needs. Worked with technical co-founder to develop wireframes, business requirements and UX. Created a strategic marketing and communications plan. Oversaw product launch to facilitate over 400 field trip bookings for nearly 10,000 students in 4 months. Worked with city institutions to build over 25 strategic partnerships and recruit 15 paying customers for our software platform.</div>
  </div>
  <div class="user-footer">
	  <div class="footer-venture_and_contact">
		  <div class="venture_and_contact-venture">
			  <div class="venture-heading"><?php echo $user_data->first_name; ?>'s Venture</div>
				<div class="venture-title">Explorable Places</div>
				<div class="venture-body">You know getting outside the classroom makes learning stick and creates a lasting impression on your students. But you don't have the time to do all the legwork. At Explorable Places, we've done the legwork for you. Each venue has been vetted by us to be sure there are programs that engage and inspire your students.</div>
				<a class="venture-url" href="#">Visit Explorableplaces.com</a>
			</div>
			<div class="venture_and_contact-contact">
				<div class="contact-title">Contact <?php echo $curauth->first_name; ?></div>
				<div class="contact-links">
					<a class="links-website" href="#">http://fakelink.com</a>
					<div class="links-social_media">
						<a class="social_media-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
						<a class="social_media-link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>  
				  </div>
				</div>
			</div>
	  </div>    
  </div>
</div>

<?php 
endif;
?>