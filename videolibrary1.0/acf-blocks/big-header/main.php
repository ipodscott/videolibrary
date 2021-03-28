<?php
/**
 * Block Name: Big Header
 *
 * This is the template for a Big Header.
 */
// create id attribute for specific styling
$id = $block['id'];
?>
<div class="big-header fadey-fast">
	<div style="background-image: url(<?php the_field('big_header_image');?>);" class="big-header-image bg-1">
		<div class="big-header-overlay">
			<div class="slide-details fadey-fast">
				<div class="slide-title"><div class="left-title"></div><div class="borders"><?php the_field('header_title');?></div><div class="right-title"></div></div>
					<div class="slide-copy"><?php the_field('header_copy');?></div>
										
			</div>
		</div>
	</div>
</div>