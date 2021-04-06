<?php
/**
 * Medium Header Block
 *
 * This is the template for a modal audio button.
 */

	
// create id attribute for specific styling
$id = $block['id'];
$classes = [''];
	
	if( !empty( $block['className'] ) )
	    $classes = array_merge( $classes, explode( ' ', $block['className'] ) );
		$anchor = '';
	if( !empty( $block['anchor'] ) )
		$anchor = '' . sanitize_title( $block['anchor'] ) . '';
	$background_image = get_field( 'background_image' ); 
	
	?>


	
<div class="<?php echo '' . join( ' ', $classes ) . ''; ?>" name="<?php echo $anchor; ?>" style="background-image: url(<?php echo $background_image; ?>);">
	<div class="panel-overlay dark"></div>
    	<div class="middle">
	    	<a class="slide-details fadey-fast move-down" href="https://www.staging.dieselpunkindustries.com/tv_series/the-stranger/">
										<div class="slide-title"><div class="left-title"></div><div class="borders">Carole Lombard on the Radio	</div><div class="right-title"></div></div>
										<div class="slide-copy">A schoolmaster finds an unconscious man on his doorstep, takes him in and looks after him. A firm friendship develops between the stranger and the headmaster&#8217;s children Bernard and Jean and their friend Peter, leading them to discover the stranger&#8217;s secret: that he is from another planet. Originally aired: April 5, 1964 on ABC Australia.</div>
										<div class="slide-button">= Watch Now =</div>
									</a>
       </div>
</div>