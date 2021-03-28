<?php $selectVid = get_sub_field('select_video_source'); if($selectVid == "youtube"){ ?>
 	
 	<div class="video-link tube-link <?php the_sub_field('resolution');?>" vidURL="https://www.youtube.com/embed/<?php the_sub_field('youtube_id');?>?rel=0&autoplay=1">
	 	<div><i class="material-icons">video_label</i> <?php the_title();?></div>
	</div>
					  	
<?php }else if ($selectVid == "vimeo"){ ?>
	
	<div class="video-link tube-link <?php the_sub_field('resolution');?>" vidURL="https://player.vimeo.com/video/<?php the_sub_field('vimeo_id');?>?autoplay=1">
		<div><i class="material-icons">video_label</i> <?php the_title();?></div>
	</div>

<?php }else if ($selectVid == "wistia"){ ?>
						  	
	<div class="video-link tube-link <?php the_sub_field('resolution');?>" vidURL="https://fast.wistia.net/embed/iframe/<?php the_sub_field('wistia_id');?>?autoplay=1">
		<div><i class="material-icons">video_label</i> <?php the_title();?></div>
	</div>
			
<?php }else if ($selectVid == "mp4_upload"){ ?>
					   
	<div class="video-link <?php the_sub_field('resolution');?> mp4-link" mp4Url="<?php the_sub_field('mp4_upload');?>">
		<div><i class="material-icons">video_label</i> <?php the_title();?></div>
	</div>
					   	
<?php }else if ($selectVid == "pbs_player"){ ?>
	
	<iframe src="https://player.pbs.org/widget/partnerplayer/<?php the_field('pbs_player_url');?>/?chapterbar=false&endscreen=true" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" seamless allowfullscreen></iframe>
					  
<?php }else{ ?>
					  
	<div class="video-link <?php the_sub_field('resolution');?> mp4-link"  mp4Url="<?php the_sub_field('remote_mp4');?>">
		<div><i class="material-icons">video_label</i> <?php the_sub_field('video_title');?></div>
	</div>
					
<?php } ?>