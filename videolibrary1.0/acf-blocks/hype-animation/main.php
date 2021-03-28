<?php
/**
 * Block Name: New Custom Block
 *
 * Block to display series of thumbnail style links.
 */
// create id attribute for specific styling
$id = $block['id'];
$animation_top_margin = get_field( 'margin_top' ) ?? '';
$animation_script_path = get_field( 'script_path' ) ?? '';
	$animation_container_name = get_field( 'container_name' ) ?? '';
	$animation_font_styles = get_field( 'font_styles' ) ?? '';
	$animation_ada_content = get_field( 'ada_content' ) ?? '';
	$animation_top_margin = get_field( 'margin_top' ) ?? '';
	$animation_bottom_margin = get_field( 'margin_bottom' ) ?? '';
?>

<?php echo $animation_font_styles; ?>	
	
	<?php if (!empty($animation_top_margin)): ?>
		<div style="height: <?php echo $animation_top_margin;?>px; width: 100px; position: relative; margin: auto;"></div>
	<?php endif; ?>
	
	<div id="<?php echo $animation_container_name; ?>" class="HYPE_document" style="margin:auto;position:relative;overflow:hidden; background-color: transparent;">
		<script type="text/javascript" charset="utf-8" src="<?php echo $animation_script_path; ?>"></script>
	</div>
	
	<?php if (!empty($animation_bottom_margin)): ?>
		<div style="height: <?php echo $animation_bottom_margin;?>px; width: 100px; position: relative; margin: auto;"></div>
	<?php endif; ?>
	
	
	<div class="screen-reader-only">
		<?php echo $animation_ada_content; ?>
	</div>