<?php
/**
 * Block Name: Fullwidth Block
 *
 * This is the template that displays two multiwidth columns.
 */


// create id attribute for specific styling
$id = $block['id'];
$classes = [''];
	
	if( !empty( $block['className'] ) )
	    $classes = array_merge( $classes, explode( ' ', $block['className'] ) );
		$anchor = '';
	if( !empty( $block['anchor'] ) )
		$anchor = '' . sanitize_title( $block['anchor'] ) . '';

?>


<div class="<?php echo '' . join( ' ', $classes ) . ''; ?>" name="<?php echo $anchor; ?>">
	<?php echo '<InnerBlocks />';?>
</div>