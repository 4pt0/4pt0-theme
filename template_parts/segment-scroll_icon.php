<?php            
//Scroll Icon
if(get_sub_field('add_scroll_icon')):

  //Set Optional Inverted Icon Class
  if(get_sub_field('invert_text_color'))
    $icon_class .= '_inverted';
?>

<div class="segment-scroll_icon">

  <?php
  //Optionally Set Inverted Content
  if(get_sub_field('invert_text_color')){
    echo '<span class="scroll_icon-inverted">v</span>';
  }else{
    echo '<span class="scroll_icon-standard">v</span>';
  }
  ?>

</div>

<?php
endif;
?>
