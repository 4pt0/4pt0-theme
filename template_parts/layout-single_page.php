<?php
if(is_page() || is_single() || is_singular()):
?>

<div class="layout-single_page">
	
	<?php
	//Start Loop
  if ( have_posts() ) : while ( have_posts() ) : the_post();  
  
    //4.0 Background Options
    if( get_field('page_background') == 'Blue Watercolor')
      $background_class_addition = 'blue_watercolor_';
  ?>
  
  <div class="single_page-<?php echo $background_class_addition;?>content">
    <div class="<?php echo $background_class_addition;?>content-loop_content">
    
    <?php
    //4.0 Venture Header		
  	get_template_part('template_parts/loop_content', 'venture_header');

    //Standard Page		
  	get_template_part('template_parts/loop_content', 'standard_content');
  	
    //Segmented Page		
  	get_template_part('template_parts/loop_content', 'segments');
  	
    //4.0 User List		
  	get_template_part('template_parts/loop_content', 'user_list');
    ?>  	
    
    </div>
  </div>

  <?php
  //End Loop
  endwhile; 
  else:
  
    //Error Message		
  	get_template_part('template_parts/loop_content', 'error_message');
  
  endif;
  ?>
  
</div>

<?php 
endif;
?>