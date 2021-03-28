<?php
/**
 * Modal Video Block
 *
 * This is the template for a modal video button.
 */

	// Create id attribute allowing for custom "anchor" value.
	$id = $block['id'];
	if( !empty($block['anchor']) ) {
	    $id = $block['anchor'];
	}
	
	// Create class attribute allowing for custom "className" and "align" values.
	$className = 'testimonial';
	if( !empty($block['className']) ) {
	    $className .= ' ' . $block['className'];
	}

	
	// create id attribute for specific styling
	$id = $block['id'];
	$button_title =  get_field('button_title');
	$resolution =  get_field('resolution');
	$source = get_field('source');
	$mp4_url = get_field('mp4_url');
	$mp4_upload = get_field('mp4_upload');
	$video_id = get_field('id');
		
	if( $source == 'mp4_upload' ) : 
		$vid_source = 'movie-btn';
		$vid_origin = $mp4_upload;
	 elseif( $source == 'mp4_remote' ): 
	 	$vid_source = 'movie-btn';
	 	$vid_origin = $mp4_url;
	 elseif( $source == 'wistia' ): 
	 	$vid_source = 'tube-link';
	 	$vid_origin = 'https://fast.wistia.net/embed/iframe/'.$video_id.'?videoFoam=true';
	  elseif( $source == 'youtube' ): 
	 	$vid_source = 'tube-link';
	 	$vid_origin = 'https://www.youtube.com/embed/'.$video_id.'?autoplay=1';
	  elseif( $source == 'vimeo' ): 
	 	$vid_source = 'tube-link';
	 	$vid_origin = 'https://player.vimeo.com/video/'.$video_id.'?autoplay=1';	
	 endif 	 
?>


	<div class="video-btn noselect <?php echo esc_attr($className); ?> <?php echo $vid_source; ?> <?php echo $resolution; ?>" vidUrl="<?php echo $vid_origin ?>"><span class="material-icons"> movie </span> <?php echo $button_title; ?></div>
