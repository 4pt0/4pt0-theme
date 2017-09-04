<?php
//Header
get_template_part('template_parts/header');
  
//Standard Layouts
get_template_part('template_parts/layout', 'single_page');
get_template_part('template_parts/layout', 'single_post');

//Custom Layouts
get_template_part('template_parts/layout', '4pt0_user');

//Footer
get_template_part('template_parts/footer');
?>