<?php
//Start User List
if( get_field('content_display') == 'User List' && have_rows('user_list')): while( have_rows('user_list') ): the_row(); 
?>

<div class="loop_content-user_list">
  <div class="user_list-header">
    <div class="header-content">
      
      <?php
      //Text Fields
      $title = get_sub_field('title');
      $subtitle = get_sub_field('subtitle');
      $body = get_sub_field('body');
      
      //Set Text Extentions By Body Character Count
      $body_characters = strlen(strip_tags($body));
      $body_paragraphs = substr_count($body, '<p>');
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
        echo '<div class="'.$text_class.'-body'.$body_class_extention.'">'.get_sub_field('body').'</div>';
      ?>
      
      </div>
      <div class="content-options">
        <div class="options-map_toggle"><input class="map_toggle-checkbox" data-user_view="map" type="checkbox"> Map View</div>
          
        <?php
        //User Role Filters
        $user_roles = get_sub_field('user_list_roles');
        foreach ($user_roles as $user_role){
          echo '<div class="options-filter"><input class="filter-checkbox" data-user_role="'.$user_role['value'].'" type="checkbox">'.$user_role['label'].'</div>';
        }
        ?>
                
      </div>
    </div>
  </div>
  <div class="user_list-include">
    <script>
      //Load Ajax User list
      jQuery('.user_list-include').filterableContent();
    </script>
  </div>
</div>

<?php
//End User List
endwhile; endif;
?>