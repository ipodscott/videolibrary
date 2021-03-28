<?php
/**
 * Block Name: Swiper Box
 *
 * This is the template that displays a swiper.
 */


// create id attribute for specific styling
$id = $block['id'];


?>

<div class="swiper-container">
    <div class="swiper-wrapper">
		<?php if(get_field('slides')): ?>
		<?php while(has_sub_field('slides')): ?>
			
			<div class="swiper-slide">
				<div class="slide-inside" style="background-image: url(<?php the_sub_field('background_image');?>);"><?php the_sub_field('slide_name');?></div>
			</div>
			
	  <?php endwhile; ?>
	  <?php endif; ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>