<?php
//Start User List
if( get_sub_field('segment_type') == 'User List' ):
?>


<div class="loop_content-user_list">
  <div class="user_list-header <?php the_sub_field('segment_background');?>">
    <div class="header-title"><?php the_sub_field('segment_title');?></div>
    
    <?php
    if(get_field('segment_body'))
      echo '<div class="header-body">'.get_sub_field('segment_body').'</div>';
    ?>
    
    <div class="header-options">
      <div class="options-map_toggle"><input class="map_toggle-checkbox" data-user_view="map" type="checkbox"> Map View</div>
        
      <?php
      //User Role Filters
      $user_roles = get_sub_field('segment_user_roles');
      foreach ($user_roles as $user_role){
        echo '<div class="options-filter"><input class="filter-checkbox" data-user_role="'.$user_role['value'].'" type="checkbox">'.$user_role['label'].'</div>';
      }
      ?>
              
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
endif;
?>