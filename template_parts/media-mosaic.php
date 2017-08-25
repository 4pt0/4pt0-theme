<?php
//Mosaic Segment
if( get_sub_field('add_media') == 'Mosaic'):
?>

<div class="media-mosaic">

  <?php
  //Mosaic Blocks
  if( have_rows('mosaic_blocks') ):
  ?>
  
  <div class="mosaic-blocks">
  
    <?php
    //Mosaic Block Loop
    while ( have_rows('mosaic_blocks') ) : the_row();    
    
      //Variables
      $sanitized_box_type = (str_replace(' ', '_', strtolower(get_sub_field('block_type')))); 
      $block_background = get_sub_field('block_background');
      $alumni_id = get_sub_field('alumni')[ID];
    ?>
    
    <div class="blocks-<?php echo $sanitized_box_type; ?> <?php if($block_background) echo 'with_background'; ?>" <?php if($block_background) echo 'style="background-image:url('.$block_background['sizes']['large'].')"'; ?>>
       
      <?php        
      //Page Clickable Area
      if(get_sub_field('block_type') == 'Page')
        echo '<a class="'.$sanitized_box_type.'-clickable_area" href="'.get_sub_field('page_block')->guid.'">'.get_sub_field('page_block')->post_title.'</a>';

      //Link Clickable Area
      if(get_sub_field('block_type') == 'Link')
        echo '<a class="'.$sanitized_box_type.'-clickable_area" href="'.get_sub_field('block_url').'" target="_blank">'.get_sub_field('link_text').'</a>';
        
      //Alumni Quote
      if( get_sub_field('block_type') == 'Alumni Quote'):
      ?>
      
      <div class="<?php echo $sanitized_box_type?>-user">
        <div class="user-content">
          <div class="content-quote">  
                    
            <?php 
            if (get_field('quote', 'user_'.$alumni_id)){
              the_field('quote', 'user_'.$alumni_id);
            }else{
              echo 'No quote available.';
            }
            ?>
            
          </div>
          <div class="content-name">
            
            <?php echo get_userdata($alumni_id)->display_name;?>   
                   
          </div>
          <div class="content-alumni_roles">
            
            <?php 
            //Roles
            foreach(get_userdata($alumni_id)->roles as $role):
              echo '<div class="alumni_roles-role">'.str_replace('_', ' ', strtolower($role)).'</div>';
            endforeach;
            ?>  
                    
          </div>
        </div>
      </div>
      
      <?php
      //End Alumni Quote
      endif;  
      ?>
       
    </div>

    <?php
    //End Mosaic Block Loop
    endwhile;
    ?>
    
  </div>
  
  <?php
  //End Mosaic Blocks
  endif;
  ?>
  
</div>

<?php
//End Mosaic Segment
endif; 

?>