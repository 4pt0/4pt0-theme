<?php
//Begin Standard Page
if(get_field('content_display') == 'Standard Page'):
?>

<div class="loop_content-standard_content">
  
  <?php
  //Page Title
  the_title('<div class="standard_content-page_title">', '</div>');
  
  //Standard Content
  if(get_field('standard_content'))
    echo '<div class="standard_content-the_content">'.get_field('standard_content').'</div>';
  ?>
    
  </div>  
</div>

<?php
//End Standard Page
endif;
?>