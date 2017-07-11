<?php
//Start Masthead
if( get_sub_field('segment_type') == 'Masthead' ):
?>

<div class="loop_content-masthead <?php the_sub_field('segment_background');?>">
  <div class="masthead-content">
    
  	<?php 
    //Masthead Title
    if (get_sub_field('add_link'))
      echo '<h2 class="content-title">'. get_sub_field('segment_title').'</h2>';
    ?>
    
  	<div class="content-body"><?php the_sub_field('segment_body')?></div>
  	
  	<?php if (get_sub_field('add_link')): ?>
  	
  	<a class="content-button" href="<?php the_sub_field('segment_link_url')?>"><?php the_sub_field('segment_link_title') ?></a>
  	
  	<?php endif; ?>
  	
  </div>
</div>

<?php
//End Masthead
endif;
?>