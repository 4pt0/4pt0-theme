<?php
//Start Grid
if( get_sub_field('segment_type') == 'Grid'):
?>

<div class="loop_content-grid">
	<div class="grid-desc">
		<h1 class="desc-title"><?php the_sub_field('segment_title')?></h1>
		<div class="desc-body"><?php the_sub_field('segment_body')?></div>
	</div> 
	<div class="grid-cell">
		
		<?php 
		if( have_rows('segment_grid') ): while ( have_rows('segment_grid') ) : the_row();
		?>
		
		<div class="cell-info">
			<div class="cell-title"><?php the_sub_field('cell_title')?></div>
			<div class="cell-body"><?php the_sub_field('cell_body')?></div>
			
			<?php if (get_sub_field('add_link')): ?>
			
			<a href="#" class="cell-link"></a>
			
			<?php endif; ?>
			
		</div>
		
		<?php 
		endwhile;
		endif;
		?>
		
	</div>
</div>

<?php
//End Grid
endif;
?>