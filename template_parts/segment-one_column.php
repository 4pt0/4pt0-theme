<?php
//One Column Segment
if( (get_sub_field('segment_display') == 'One Column' || get_sub_field('segment_display') == null) && (get_sub_field('segment_type') == 'Text' || get_sub_field('segment_type') == 'Media' || get_sub_field('segment_type') == 'Text and Media' || get_sub_field('segment_type') == 'Only Media')):
?>

<div class="segment-one_column">
  
  <?php
  //Text Fields
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle'); //Added 4.0 Field
  $body = get_sub_field('body');

  //Set Text Extentions By Character and Paragraph Count
  $text_characters = strlen(strip_tags($body));
  $text_paragraphs = substr_count($body, '<p');
  if($text_characters <= 300)
    $text_class = 'brief_text';
  if( ($text_characters > 300) && ($text_characters < 800) )
    $text_class = 'regular_text';
    if( ($body_characters > 300) && ($body_characters < 800) && ($body_paragraphs > 1) ) //Added 4.0 Field
      $text_class = 'regular_text_with_paragraphs';
  if($text_characters > 800)
    $text_class = 'long_text';
    
  //Set Optional Inverted Text Class
  if(get_sub_field('invert_text_color'))
    $text_class .= '_inverted';
  
  //Start Segment Text
  if( get_sub_field('segment_type') == 'Text' || get_sub_field('segment_type') == 'Text and Media' ):
  ?>

  <div class="one_column-<?php echo $text_class;?>">
  
    <?php
    //Segment Title
    if($title)
      echo '<div class="'.$text_class.'-title">'.$title.'</div>';
      
    //Segment Subtitle - Added 4.0 Field
    if($subtitle)
      echo '<div class="'.$text_class.'-subtitle">'.$subtitle.'</div>';
      
    //Segment Body
    if($body)
      echo '<div class="'.$text_class.'-body">'.$body.'</div>';
    ?>   
     
  </div>
  
  <?php
  //End Segment Text
  endif;

  //Start Segment Media
  if(get_sub_field('segment_type') == 'Only Media' || get_sub_field('segment_type') == 'Text and Media' ):
  ?>
    
  <div class="one_column-media">
      
    <?php  
    //Media
    get_template_part('template_parts/media', 'grid');
    get_template_part('template_parts/media', 'portrait_and_landscape');
    get_template_part('template_parts/media', 'single_media_item');
    get_template_part('template_parts/media', 'slideshow');
    get_template_part('template_parts/media', 'mosaic');
    ?>
    
  </div>
  
  <?php
  //End Segment Media
  endif;
  ?>
    
</div>

<?php
//End One Column Segment
endif;
?>