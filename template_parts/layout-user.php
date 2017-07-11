<?php
if(is_author()):

$location = get_field('location',$post->ID);
$address = explode( "," , $location['address']);
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<div class="layout-user">
  <div class="user-header">
	  <div class="header-content">
		  <div class="content-avatar">
				<div class="avatar-headshot"><?php echo get_avatar( $curauth->ID, 1000 ); ?></div>
		  </div>
			<div class= "content-user_meta">
				<div class="user_meta-name"><?php echo $curauth->display_name; ?></div>
				<div class="user_meta-title">Founder &#8226; <a class="title-explorable" href="#"> Explorable Places</a></div>
				<div class="user_meta-tags">
				  <a class="tags-role" href="#">Tiny Alum</a> <a class="tags-location" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> New York</a>
			  </div>
		  </div>
	  </div>
  </div>
  <div class="user-quote">
		<div class="quote-body">I applied to tiny because I was excited to get support from area experts around pushing my to the next level.<!-- <?php the_field('quote', $post->ID);?> --></div>
  </div>
  <div class="user-bio">
	  <div class="bio-title">About <?php echo $curauth->first_name; ?></div>
	  <div class="bio-body">Meg Davis set product vision and direction for Explorable Places: a responsive web-based platform for finding field trips aligned to the curriculum. Conducted user testing with teachers and museum professionals to refine product and developed requirements based on user needs. Worked with technical co-founder to develop wireframes, business requirements and UX. Created a strategic marketing and communications plan. Oversaw product launch to facilitate over 400 field trip bookings for nearly 10,000 students in 4 months. Worked with city institutions to build over 25 strategic partnerships and recruit 15 paying customers for our software platform.</div>
  </div>
  <div class="user-footer">
	  <div class="footer-venture_and_contact">
		  <div class="venture_and_contact-venture">
  		  <div class="venture-content">
  			  <div class="content-heading"><?php echo $curauth->first_name; ?>'s Venture</div>
  				<div class="content-title">Explorable Places</div>
  				<div class="content-body">You know getting outside the classroom makes learning stick and creates a lasting impression on your students. But you don't have the time to do all the legwork. At Explorable Places, we've done the legwork for you. Each venue has been vetted by us to be sure there are programs that engage and inspire your students.</div>
  				<a class="content-url" href="#">Visit Explorableplaces.com</a>
  		  </div>
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
	  
		<?php if ( have_posts() ) : ?>
	  <div class="footer-posts">
  	  <div class="posts-pretext">Posts by <?php echo $curauth->first_name; ?></div>
  	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	  
  	  <a class="posts-single_post" href="#" style="<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );if ( has_post_thumbnail() ){echo 'background-image: url('. $url.')">'; } else { ?> background-image: url('<?php bloginfo("template_directory"); ?>/images/background.jpeg')" alt="<?php the_title(); ?>" <?php } ?> >
      	<div class="single_post-title"><?php the_title();?></div>  
  	  </a>
  	  
  	  <?php endwhile; endif;?>
    </div>
    <?php endif; ?>
    
  </div>
</div>

<?php 
endif;
?>