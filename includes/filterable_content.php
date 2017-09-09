<?php

//Add Ajax Actions to User List
add_action('wp_ajax_filter', 'filterable_content');
add_action('wp_ajax_nopriv_filter', 'filterable_content');

//Construct Ajax Loop & Results for User List
function filterable_content(){
  
  //Get User Data
	$query_data = $_GET;	
	$user_roles = ($query_data['userRoles']) ? explode(',',$query_data['userRoles']) : false;
	$user_view = $query_data['userView'];
  $user_number = $query_data['userNumber'];
    
  //Set Default User Number
  if(!$user_number)
    $user_number = 9;
    
  //Begin User Query
	$users = get_users(array(
		'number' => $user_number,
		'role__in' => $user_roles
	));
?>

<div class="include-filterable_content">

  <?php
	//Map View
  if($user_view == 'map'):
  ?>

  <div class="filterable_content-map"></div>
  <div class="filterable_content-instructions">
    Select a <img class="instructions-point" src="<?php echo get_template_directory_uri();?>/images/map-cluster1.png">.
  </div>
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
        
      $('.filterable_content-map').userMap(users, '<?php echo get_template_directory_uri();?>');
      
    })(jQuery);     
  </script>

  <?php
	//List View
	else:
	?>
	
	<div class="filterable_content-list">
	  
	  <?php
  	//User Loop
    foreach ( $users as $user ):
    ?>

    <a class="list-single_user" href="<?php echo get_author_posts_url($user->ID);?>">
      <div class="single_user-avatar" style="background-image: url(<?php echo get_avatar_url($user->ID, 'size=600');?>)"></div>
      <div class="single_user-full_name"><?php echo $user->display_name;?></div>
      <div class="single_user-title"><?php echo str_replace('_', ' ', implode(', ', $user->roles));?></div>
    </a>

    <?php    
    //End User Loop
    endforeach;
    ?>
    
	</div>

  <?php
  //End List View
  endif;  

  //Set User Number
  $user_count = count(get_users(array(
		'role__in' => $user_roles
  )));

  if($user_number < $user_count){
    $user_number = $user_number+6;
    //echo '<button class="content-load_more" data-user_number="'.$user_number.'">Load More</button>';
  }
  
  //End functions
  die();
  ?>
  
</div>

<?php
//End Ajax User Filter
}
?>