<?php    
//Start Venture Header
if(is_singular('venture')):
?>

<div class="loop_content-venture_header">
  <div class="venture_header-content">
    <div class="content-title"><?php the_title();?></div>
    <div class="content-meta">
      <div class="meta-post_type"><?php echo get_post_type_object('venture')->labels->singular_name;?></div>
      
      <?php
      //Categories
      $categories = get_categories();
      foreach( $categories as $category )
        echo '<a class="meta-category" href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a>';
        
      //Location
      $location = get_field('location');
      $city = explode( "," , $location['address'])[1];
      if(get_field('location'))
        echo '<div class="meta-city">'.$city.'</div>';
      ?>
      
    </div>
  </div>
</div>

<?php
//End Venture Header
endif;
?>