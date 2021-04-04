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
	$className = 'video-link page-vid-link';
	if( !empty($block['className']) ) {
	    $className .= ' ' . $block['className'];
	}

	
	$button_title =  get_field('button_title');
	$resolution =  get_field('resolution');
	$source = get_field('select_video_source');
	$mp4_remote = get_field('remote_mp4');
	$mp4_upload = get_field('mp4_upload');
	$video_id = get_field('id');
	$youtube_id = get_field('youtube_id');
	$vimeo_id = get_field('vimeo_id');
	$wistia_id = get_field('wistia_id');
	$pbs_player_url = get_field('pbs_player_url');
		
	if( $source == 'mp4_upload' ) : 
		$vid_source = 'mp4-link';
		$vid_origin = $mp4_upload;
	 elseif( $source == 'remote_mp4' ): 
	 	$vid_source = 'mp4-link';
	 	$vid_origin = $mp4_remote;
	 elseif( $source == 'wistia' ): 
	 	$vid_source = 'tube-link';
	 	$vid_origin = 'https://fast.wistia.net/embed/iframe/'.$wistia_id.'?videoFoam=true';
	  elseif( $source == 'youtube' ): 
	 	$vid_source = 'tube-link';
	 	$vid_origin = 'https://www.youtube.com/embed/'.$youtube_id.'?autoplay=1';
	  elseif( $source == 'vimeo' ): 
	 	$vid_source = 'tube-link';
	 	$vid_origin = 'https://player.vimeo.com/video/'.$vimeo_id.'?autoplay=1';
	  elseif( $source == 'pbs_player' ): 
	 	$vid_source = 'tube-link';
	 	$vid_origin = 'https://player.pbs.org/widget/partnerplayer/'.$pbs_player_url.'/?chapterbar=false&endscreen=true';	
	 endif 	 
?>

	
	<span class="<?php echo esc_attr($className); ?> <?php echo $vid_source; ?> <?php echo $resolution; ?>" vidURL="<?php echo $vid_origin; ?>">
		<i class="material-icons">video_label</i> <span><?php echo $button_title; ?></span>
	</span>