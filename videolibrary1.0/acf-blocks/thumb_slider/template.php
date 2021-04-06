<?php
/**
 * Block Name: Thumbnail Slider
 *
 * This is the template that a thumbnail slider.
 */
// create id attribute for specific styling
$id = $block['id'];

$ptop = get_field('padding_top');
$pbottom = get_field('padding_bottom');
$mtop = get_field('margin_top');
$mbottom = get_field('margin_bottom');

?>

  <!-- Swiper -->
  <div class="link-wells thumb-swiper-container" style="padding-top: <?php echo $ptop;?>px; padding-bottom: <?php echo $pbottom;?>px; margin-top: <?php echo $mtop;?>px; margin-bottom: <?php echo $mbottom;?>px;">
  <div class="swiper-wrapper" >
	
	
	<?php while(has_sub_field("thumb_selector")): ?>
			
			<?php if(get_row_layout() == "library_thumb"):?>
				
				
				<?php 
				    $posts = get_sub_field('library_slide');
					if( $posts ): ?>
					
					<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
					   
					    <div class="swiper-slide swiper-thumb">
					    	<div class="thumb-box" style="background-image: url(<?php the_field('slider_image', $p->ID);?>)">
					    		<a href="<?php the_permalink($p->ID);?>" class="thumb-title"><span class="material-icons">play_arrow</span></a>
					    	</div>
					    </div>
								   
					<?php endforeach; ?>
												
				<?php endif; ?>	
			
		 
			<?php elseif(get_row_layout() == "custom_thumb"):?>
	 				
			 <div class="swiper-slide swiper-thumb">
		    	<div class="thumb-box" style="background-image: url(<?php the_sub_field('background_image');?>)">
		    		<div href="<?php the_sub_field('url');?>" class="thumb-title"><span class="material-icons">play_arrow</span></div>
		    	</div>
		    </div>
			
				
	<?php endif; ?>
	<?php endwhile; ?>
	
	</div>
	
    <!-- Add Pagination -->
    <div class="swiper-pagination dots-pagination"></div>
     <div class="swiper-next"><span class="material-icons"> keyboard_arrow_right </span></div>
	 <div class="swiper-prev"><span class="material-icons"> keyboard_arrow_left </span></div>
  </div>