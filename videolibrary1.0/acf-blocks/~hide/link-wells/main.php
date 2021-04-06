<?php
/**
 * Block Name: Link Wells
 *
 * Block to display series of thumbnail style links.
 */
// create id attribute for specific styling
$id = $block['id'];
?>

<div class="link-wells" style="padding-bottom:<?php the_field('padding_bottom');?>px; margin-bottom:<?php the_field('margin_bottom');?>px; padding-top: <?php the_field('padding_top');?>px; margin-top: <?php the_field('margin_top');?>px;">
	
	<?php if(get_field('well_links')): ?>
	<?php while(has_sub_field('well_links')): ?>
						
	     <div class="well-block" style="background-image: url(<?php the_sub_field('background_image');?>);">
		     <div class="well-cover"><span class="material-icons">play_circle_outline</span></div>
	     </div> 
	     
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>