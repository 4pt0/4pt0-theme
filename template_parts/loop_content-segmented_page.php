<?php
//Start Segments
if( get_field('content_display') == 'Segmented Page' && have_rows('segments') ): 
?>

<div class="loop_content-segmented_page">
  
  <?php
  //Repeater Count
  $count = 0;  
  
  //Start Segment Repeater
  while ( have_rows('segments') ) : the_row();
    
    //Add to Count
    $count++;
    
    //Set Segment Content Classes
    if(get_sub_field('segment_display') == 'One Column' || !get_sub_field('segment_display'))
      $content_class = 'one_column_segment';
    if(get_sub_field('segment_display') == 'Two Column')
      $content_class = 'two_column_segment';
  ?>
  
  <div class="segmented_page-<?php echo $content_class;?>" id="segment-<?php echo $count;?>">
  
    <?php      
    //Add Background 
    $background = get_sub_field('background');
    if(!$background || $background == 'White')
      $background_class = 'white_background';
    if($background == 'Transparent')
      $background_class = 'transparent_background';
    if($background == 'Light Blue')
      $background_class = 'light_blue_background';
    if($background == 'Blue')
      $background_class = 'blue_background';
    if($background == 'Blue Watercolor')
      $background_class = 'blue_watercolor_background';
    if($background == 'Orange')
      $background_class = 'orange_background';
    echo '<div class="'.$content_class.'-'.$background_class.'"></div>';
    ?>
    
    <div class="<?php echo $content_class?>-content">

    <?php
    //Start Segment Text
    if( get_sub_field('segment_type') == 'Text' || get_sub_field('segment_type') == 'Text and Features' ):
    
      //Text Fields
      $title = get_sub_field('title');
      $subtitle = get_sub_field('subtitle');
      $body = get_sub_field('body');
      
      //Set Text Extentions By Body Character Count
      $body_characters = strlen(strip_tags($body));
      $body_paragraphs = substr_count($body, '<p');
      if($body_characters < 300)
        $text_class = 'brief_text';
      if( ($body_characters > 300) && ($body_characters < 800) && ($body_paragraphs < 2) )
        $text_class = 'regular_text';
      if( ($body_characters > 300) && ($body_characters < 800) && ($body_paragraphs > 1) )
        $text_class = 'regular_text_with_paragraphs';
      if($body_characters > 800)
        $text_class = 'long_text';
    ?>

      <div class="content-<?php echo $text_class;?>">
      
        <?php
        //Segment Title
        if($title)
          echo '<div class="'.$text_class.'-title">'.$title.'</div>';
      
        //Segment Subtitle
        if($subtitle)
          echo '<div class="'.$text_class.'-subtitle">'.$subtitle.'</div>';
    
        //Segment Body
        if($body)
          echo '<div class="'.$text_class.'-body">'.get_sub_field('body').'</div>';
        ?>   
         
      </div>
    
    <?php
    //End Segment Text
    endif;

    //Start Segment Features
    if(get_sub_field('segment_type') == 'Only Features' || get_sub_field('segment_type') == 'Text and Features' ):
    ?>
      
      <div class="content-features">
          
        <?php  
        //Media Blocks, Slideshow, and Circles
        get_template_part('template_parts/feature', 'media');
            
        //Mosaic
        get_template_part('template_parts/feature', 'mosaic');
        
        //Newsletter Signup
        get_template_part('template_parts/feature', 'newsletter_signup');
        ?>
        
      </div>
    
    <?php
    //End Segment Features
    endif;
    ?>
    
    </div>
    
    <?php      
    //Begin Optional Button
    if (get_sub_field('add_button')){
      //The Button
      echo '<div class="'.$content_class.'-button"><a class="button-link" href="'.get_sub_field('button_url').'" >'.get_sub_field('button_text').'</a></div>';    
    }
      
    //Optional Scroll Icon
    if(get_sub_field('add_scroll_icon'))
      echo '<div class="'.$content_class.'-scroll_icon">v</div>';    
    ?>
      
  </div>
  
  <?php
  //End Segment Repeater
  endwhile;
  ?>

</div>

<?php
//End Segments
endif;
?>