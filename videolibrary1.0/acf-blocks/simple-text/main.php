<?php
/**
 * Block Name: Simple Text
 *
 * This is the template for simple text.
 */


// create id attribute for specific styling
$id = $block['id'];


?>


<div class="column-container">
	
	<div class="column-box">
		<div class="full-copy">
				<?php the_field('simple_text');?>			
		</div>
	</div>
	
</div>