<?php
//Start API
if( get_sub_field('segment_type') == 'API' ):
?>

<div class="loop_content-api">
	<div class="api-desc">
		<h1 class="desc-title"><?php the_sub_field('segment_title')?></h1>
		<div class="desc-body"><?php the_sub_field('segment_body')?><?php the_sub_field ('segment_body')?></div>
		
		<?php if (get_sub_field('add_link')): ?>
		
		<a class="desc-link" href="<?php the_sub_field('segment_link_url')?>"><?php the_sub_field('segment_link_title') ?></a>
		
		<?php 
		endif;
		?>
		
	</div>
<!--
	<a class="api-image" href="<?php //the_sub_field('segment_api_url')?>">
		<div class="image-title"></div>
		<div class="image-date"></div> &#9679; <div class="image-mins_to_read"></div>
	</a>
-->
</div>

<?php
//End API
endif;
?>
