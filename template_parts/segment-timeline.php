<?php
//Timeline Segment
if(get_sub_field('segment_type') == 'Only Timeline' || get_sub_field('segment_type') == 'Text and Timeline'):
  
  //Timeline Position
  if(get_sub_field('timeline_position') == 'Horizontal'){
    $timeline_class = 'make_horizontal';
  }else{
    $timeline_class = 'make_vertical';
  }  
?>

<div class="segment-timeline <?php echo $timeline_class;?>">
  
  <?php
  //Begin Timeline Markers' Section
  if(have_rows('timeline_markers')):
  ?>
  
  <div class="timeline-markers">
    
    <?php
    //Begin Timeline Markers' Loop
    while(have_rows('timeline_markers')): the_row();  
    
      //Marker Class
      if(get_sub_field('marker_state') == 'Accomplished'){
        $marker_class = 'make_accomplished';
      }else{
        $marker_class = 'make_unaccomplished';
      }  
    ?>
    
    <div class="markers-single_marker <?php echo $marker_class;?>">
      <div class="single_marker-the_marker">
        
        <?php
        //Marker Text
        if(get_sub_field('marker_text'))
          echo '<div class="the_marker-text">'.get_sub_field('marker_text').'</div>';
        ?>
        
      </div>
      
      <?php
      //Start Marker Content
      if(get_sub_field('marker_content_title') || get_sub_field('marker_content_body') || get_sub_field('add_marker_link')):
      ?>

      <div class="single_marker-content">
        
        <?php
        //Marker Title
        if(get_sub_field('marker_content_title'))
          echo '<div class="content-marker_title">'.get_sub_field('marker_content_title').'</div>';
        
        //Marker Body
        if(get_sub_field('marker_content_body'))
          echo '<div class="content-marker_body">'.get_sub_field('marker_content_body').'</div>';
        
        //Marker Link
        if(get_sub_field('add_marker_link'))
          echo '<a href="'.get_sub_field('marker_link_url').'" target="'.get_sub_field('marker_link_target').'" class="content-marker_link">'.get_sub_field('marker_link_text').'</a>';
        ?>
        
      </div>
      
      <?php
      //End Marker content
      endif;
      ?>
      
    </div>

    <?php
    //End Timeline Markers' Loop
    endwhile;
    ?>
    
  </div>
  
  <?php
  //End Timeline Markers' Section
  endif;
  ?>

  
</div>

<?php
//Two Column Segment
endif;
?>