<?php
//Begin Standard Page
if(get_field('content_display') == 'Standard Page'):
?>

<div class="loop_content-standard_page">
  
  <?php
  //Page Title
  the_title('<div class="standard_page-page_title">', '</div>');
  
  //Standard Content
  if(get_field('standard_content'))
    echo '<div class="standard_page-standard_content">'.get_field('standard_content').'</div>';
  ?>
    
  </div>  
</div>

<?php
//End Standard Page
endif;
?>