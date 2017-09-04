<?php
//Segment Background 
$background = get_sub_field('background');
if($background):
?>

<div class="segment-background">
  
  <?php    
  //4.0 Background Variables
  $background = get_sub_field('background');
  if(!$background || $background == 'White')
    $background_class = 'white';
  if($background == 'Transparent')
    $background_class = 'transparent';
  if($background == 'Light Blue')
    $background_class = 'light_blue';
  if($background == 'Blue')
    $background_class = 'blue_background';
  if($background == 'Blue Watercolor')
    $background_class = 'blue_watercolor';
  if($background == 'Orange')
    $background_class = 'orange';
  ?>
  
  <div class="background-<?php echo $background_class;?>"></div>
</div>

<?php
//End Segment Background
endif;
?>