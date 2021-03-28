<?php while(has_sub_field("content_selector")): ?>
	
	<?php if(get_row_layout() == "copy"):?>
					
		<?php the_sub_field('copy');?>
		
	<?php elseif(get_row_layout() == "image"):?>
						
		<?php elseif(get_row_layout() == "video"):?>
										
<?php endif; ?>
<?php endwhile; ?>