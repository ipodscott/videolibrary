<?php
/**
 * Block Name: Fullwidth Block
 *
 * This is the template that displays two multiwidth columns.
 */


// create id attribute for specific styling
$id = $block['id'];


?>


<div class="column-container" style="padding-bottom:<?php the_field('padding_bottom');?>px; padding-top: <?php the_field('padding_top');?>px;">
	
	<div class="column-box">
		<div class="full-copy">
	
			<?php while(has_sub_field("content_selector")): ?>
							
				<?php if(get_row_layout() == "copy"):?>
					
					<?php the_sub_field('copy');?>
					
				<?php elseif(get_row_layout() == "image"):?>
									
				<?php elseif(get_row_layout() == "video"):?>
				
														
			<?php endif; ?>
			<?php endwhile; ?>
	 		
		</div>
	</div>
	
</div>