<?php
//Standard Content Segment
if( get_sub_field('segment_type') == 'Standard Content'):
?>

<div class="loop_content-standard_content <?php the_sub_field('segment_background');?>">

  <?php
  //Segment Title
  if(get_sub_field('segment_title'))
    echo '<div class="standard_content-segment_title">'.get_sub_field('segment_title').'</div>';

  //Segment Body
  if(get_sub_field('segment_body'))
    echo '<div class="standard_content-segment_body">'.get_sub_field('segment_body').'</div>';
    
  //Segment Link
  if (get_sub_field('add_link'))
    echo '<a class="standard_content-segment_link" href="'.get_sub_field('segment_link_url').'">'.get_sub_field('segment_link_title').'</a>';

  //Newsletter Signup
  if (get_sub_field('add_newsletter_signup'))
      echo '<form class="standard_content-newsletter_singup"><label class="newsletter_singup-label" for="newsletter_signup">Newsletter Signup:</label><div class="newsletter_singup-input_group"><input class="input_group-input" id="newsletter_signup" placeholder="Enter Email" type="text"><button class="input_group-button" type="submit">Subscribe</button></div></form>';

  ?>
  
</div>

<?php
//End Standard Content Segment
endif;
?>