<?php
//Start Notice
if( get_sub_field('segment_type') == 'Notice'):
?>

<div class="loop_content-notice">
	<div class="notice-text"><?php the_sub_field('segment_body')?></div>
	<a class="notice-button"  href="<?php the_sub_field('segment_link_url')?>"><?php the_sub_field('segment_link_title') ?></a>
</div>

<?php
//End Notice
endif;
?>
