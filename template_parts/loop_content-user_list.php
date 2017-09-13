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
                //Begin User Query
      	$users = get_users(array(
      		'number' => -1,
      		'role__in' => 'launch_fellow',
      		'meta_key' => 'location'
      	));     
      ?>
      
      </div>
    </div>
  </div>
  <div class="user_list-user_map">
    <div class="user_map-the_map"></div>
    <script>
      (function( $ ) {
        var users = [
          
        <?php 
      	 
        //Start Map Marker Loop
        foreach ( $users as $user ): 
          $location = get_field('location', 'user_'. $user->ID );
          $avatar =  get_avatar_url($user->ID);
          
          //Only show users that have location data
          if($location):
        ?>
        
          {location: { lat: <?php  echo $location['lat']; ?>, lng:  <?php echo $location['lng']; ?>}, avatar: '<?php echo $avatar;?>', url:'<?php echo get_author_posts_url($user->ID);?>', name:'Hello' },
        
        <?php 
          endif;
          
        //End Map Marker Loop
        endforeach; 
        ?>
    
        ]
          
        $('.user_map-the_map').userMap(users, '<?php echo get_template_directory_uri();?>');
        
      })(jQuery);     
    </script>
  </div>
</div>

<?php
//End User List
endwhile; endif;
?>