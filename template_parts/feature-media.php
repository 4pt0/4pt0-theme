<?php
//Start Media Blocks or Slideshow
if ( 
  (get_sub_field('add_feature') == 'Media Blocks') ||
  (get_sub_field('add_feature') == 'Media Slideshow') ||
  (get_sub_field('add_feature') == 'Circular Media')
):
?>

<div class="feature-media">
  
   <?php
  //Set Media Classes
  if ( (get_sub_field('add_feature') == 'Media Blocks') )
    $media_class = 'blocks';
  if ( (get_sub_field('add_feature') == 'Media Slideshow') )
    $media_class = 'slideshow';
  if ( (get_sub_field('add_feature') == 'Circular Media') )
    $media_class = 'circles';
  ?>
  
  <div class="media-<?php echo $media_class;?>" >
    
  <?php
  //Set Out of Repeater Variables
  $total_media = count(get_sub_field('media'));
  $count = 0;
  $gallery_id = uniqid(); //To group media in fancybox
  
  
  //Start Media Repeater 
  if(have_rows('media')): while(have_rows('media')): the_row();
    
    //Set In-Repeater Variables
    $count++;
    $media_type = get_sub_field('media_type');
    $image = get_sub_field('image');
    $link_url = get_sub_field('link_url');
    $caption = get_sub_field('caption');
    
    //Set Media Block Class Extention and Background based on count
    if ( $media_class == 'blocks' ){
      if( $total_media %1 == 0){
        $block_class = 'full_block';
        if($image)
          $background_url = $image['sizes']['large'];
      }
      if($total_media %2 == 0){
        $block_class = 'half_block';
        if($image)
          $background_url = $image['sizes']['medium'];
      }    
      if($total_media > 2){
        $block_class = 'third_block';
        if($image)
          $background_url = $image['sizes']['thumbnail'];
      }          
    }
    
    //Set Slideshow Slide  Class and Background
    if ( $media_class == 'slideshow' ){
      $block_class = 'slide';
      $background_url = $image['sizes']['large'];
    }

    //Set Cicles' Class and Background
    if ( $media_class == 'circles' ){
      if( $count %2 == 0){
        $block_class = 'full_circle';
        if($image)
          $background_url = $image['sizes']['large'];
      }else{
        $block_class = 'half_circle';
        if($image)
          $background_url = $image['sizes']['medium'];
      }    
    }
    
    //Set Media Link
    $media_link = $image['sizes']['large'];
    if($link_url != null)
      $media_link = $link_url;
    if($media_type == 'YouTube Video')
      $media_link = get_sub_field('youtube_url');
    if($media_type == 'PDF')
      $media_link = 'javascript:;';
    ?>
    
    <a 
      class="<?php echo $media_class;?>-<?php echo $block_class;?>" 
      href="<?php echo $media_link ?>" 
      data-fancybox="gallery-<?php echo $gallery_id?>"
      
      <?php 
      if($caption) 
        echo 'data-caption="'.$caption.'"'; 
      if($media_type == 'PDF') 
        echo 'data-type="iframe" data-src="'.get_sub_field('pdf_url').'"'; 
      ?>
        
    >
      
      <?php 
      //Image
      if($image)
        echo '<div class="'.$block_class.'-image" style="background-image:url('.$background_url.')"></div>';

      //YouTube Play Icon
      if($media_type == 'YouTube Video')
        echo '<div class="'.$block_class.'-play_icon"></div>';

      //PDF Icon
      if($media_type == 'PDF')
        echo '<div class="'.$block_class.'-pdf_icon"></div>';

      //Caption
      if($caption)
        echo '<div class="'.$block_class.'-caption">'.$caption.'</div>';
      ?>

    </a>
  
  <?php
  //End Media Repeater
  endwhile; endif;
  ?>
  
  </div>
</div>

<?php
//End Media Blocks
endif;
?>