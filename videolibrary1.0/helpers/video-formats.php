<?php $selectVid = get_field('select_video_source'); if($selectVid == "youtube"){ ?>
						 
	<div class="video-link tube-link <?php the_field('resolution');?>" vidURL="https://www.youtube.com/embed/<?php the_field('youtube_id');?>?rel=0&autoplay=1">
		<div><i class="material-icons">video_label</i> <?php the_field('slide_title');?> </div>
	</div>
						 
<?php }else if ($selectVid == "vimeo"){ ?>
						  	
	<div class="video-link tube-link <?php the_field('resolution');?>" vidURL="https://player.vimeo.com/video/<?php the_field('vimeo_id');?>?autoplay=1">
		<div><i class="material-icons">video_label</i> <?php the_field('slide_title');?> </div>
	</div>
						  
<?php }else if ($selectVid == "wistia"){ ?>
						  	
	<div class="video-link tube-link <?php the_field('resolution');?>" vidURL="https://fast.wistia.net/embed/iframe/<?php the_field('wistia_id');?>?autoplay=1">
		<div><i class="material-icons">video_label</i> <?php the_field('slide_title');?> </div>
	</div>	
						  
<?php }else if ($selectVid == "mp4_upload"){ ?>
						   
	<div class="video-link <?php the_field('resolution');?> mp4-link" mp4Url="<?php the_field('mp4_upload');?>">
		<div><i class="material-icons">video_label</i> <?php the_field('slide_title');?> </div>
	</div>
						 
<?php }else if ($selectVid == "pbs_player"){ ?>
						 	
	<div class="video-link tube-link <?php the_field('resolution');?>" vidURL="https://player.pbs.org/widget/partnerplayer/<?php the_field('pbs_player_url');?>/?chapterbar=false&endscreen=true">
		<div><i class="material-icons">video_label</i>  <?php the_field('slide_title');?> </div>
	</div>
					
<?php }else{ ?>
						  
	<div class="video-link <?php the_field('resolution');?> mp4-link"  mp4Url="<?php the_field('remote_mp4');?>">
		<div><i class="material-icons">video_label</i><?php the_field('slide_title');?> </div>
	</div>

 <?php } ?>