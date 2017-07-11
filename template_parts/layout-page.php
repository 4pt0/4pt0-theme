<?php
if(is_page() || is_single()):
?>

<div class="layout-page">
	
	<?php
	//Start Loop
  if ( have_posts() ) : while ( have_posts() ) : the_post();  
  ?>
  
  <div class="page-loop_content <?php the_field('page_background');?>">
    
    <?php
    //Page Title
    if(get_field('show_page_title'))
      the_title('<div class="loop_content-page_title">', '</div>');
      
  	//Start Segments	
  	if( have_rows('segments') ): while ( have_rows('segments') ) : the_row();
      
      //Segment Template Parts  		
    	get_template_part('template_parts/loop_content', 'standard_content');
    	get_template_part('template_parts/loop_content', 'masthead'); 
    	get_template_part('template_parts/loop_content', 'grid'); 
    	get_template_part('template_parts/loop_content', 'api');
    	get_template_part('template_parts/loop_content', 'notice');
    	get_template_part('template_parts/loop_content', 'user_list');
    	get_template_part('template_parts/loop_content', 'mosaic');
    
    //End Segements
    endwhile; endif;
  	?>

  </div>
  
  <?php
  //End Loop
  endwhile; endif;
  ?>
  
</div>

<?php 
endif;
?>