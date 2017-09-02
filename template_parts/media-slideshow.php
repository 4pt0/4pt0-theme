<?php
//Start Blocks or Slideshow
if ( get_sub_field('add_media') == 'Slideshow' ):
?>

<div class="media-slideshow">

  <a class="slideshow-next" href="#"></a>
  <a class="slideshow-previous" href="#"></a>
    
  <?php
  //Set Out of Repeater Variables
  $gallery_id = uniqid(); //To group media in fancybox
  
  //Start Media Repeater 
  if(have_rows('media')): while(have_rows('media')): the_row();
    
    //Set In-Repeater Variables
    $count++;
    $image = get_sub_field('image');
    $link_url = get_sub_field('link_url');
    $caption = get_sub_field('caption');
    
    //Set Slideshow Slide Background
    $background_url = $image['sizes']['large'];

    //Set Media Link
    $media_link = $image['sizes']['large'];
    if($link_url != null)
      $media_link = $link_url;
    ?>
    
  <a 
    class="slideshow-slide" 
    href="<?php echo $media_link ?>" 
    data-fancybox="gallery-<?php echo $gallery_id?>"
    
    <?php 
    if($caption) 
      echo 'data-caption="'.$caption.'"'; 
    if($media_type == 'PDF') 
      echo 'data-type="iframe" data-src="'.get_sub_field('pdf_url').'"'; 
    ?>
      
  >
    <div class="slide-image">
      
      <?php
      //Responsive Image
      if($image){
        
        //Set Up Image Variables
        $img_src = wp_get_attachment_image_url( $image['ID'], 'medium' );
        $img_srcset =  wp_get_attachment_image_srcset( $image['ID'], 'medium' );;
        $img_sizes = '(max-width: 672px) 424px, 657px';
        
        //The Image
        echo '<img class="image-the_image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'">';
      }
      ?>

    </div>

    
    <?php 
    //Caption
    if($caption)
      echo '<div class="slide-caption">'.$caption.'</div>';
    ?>

  </a>
    
  <?php
  //End Media Repeater
  endwhile; endif;
  ?>
  
</div>

<?php
//End Slideshow
endif;
?>