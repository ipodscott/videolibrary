		<div class="vid-main-content">
			<div class="movie-box">
				<div id="mainVideo" class="movie">
					<div class="vid-box">
						<div id="videoBox" class="vid-holder">
								<img class="sixteen-nine-img" src="<?php bloginfo('template_directory'); ?>/img/16x9_bg.png" />
								<img class="widescreen-img" src="<?php bloginfo('template_directory'); ?>/img/bg_widescreen.gif" />
								<img class="pano-img" src="<?php bloginfo('template_directory'); ?>/img/pano.gif" />
								<img class="standard-img" src="<?php bloginfo('template_directory'); ?>/img/standard_bg.png" />
								<img class="pal-img" src="<?php bloginfo('template_directory'); ?>/img/pal.png" />
								<img class="nat-arch" src="<?php bloginfo('template_directory'); ?>/img/na.gif" />
								<img class="vintage-wide" src="<?php bloginfo('template_directory'); ?>/img/vintage_wide.gif" />
								<iframe class="vidFrame" src="https://www.youtube.com/embed/DMxOk3AIAVU?rel=0&autoplay=" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>		
								<video id="myVideo" class="myVideo" src="" controls></video>							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="default-video-cover">
			
			<?php $selectMainBackground = get_field('select_main_background'); if($selectMainBackground == "custom_background"){ ?>
			
				<div class="start-right" style="background-image: url(<?php the_field('main_background_image');?>);">
					<div class="right-overlay">
					<?php $customBranding = get_field('custom_branding'); if($customBranding == "default"){ ?>
					
					<div class="right-title"><?php the_title();?></div>
					
					<?php }else if ($customBranding == "image"){ ?>
					
					<img src="<?php the_field('custom_logo'); ?>" alt="Custom Logo" />
					
					<?php }else{ ?>
					
					<div class="right-title"><?php the_field('custom_text');?></div>
					
					<?php } ?>
					
					</div>
				</div>
			 
			 
			<?php }else if ($selectMainBackground == "default"){ ?>
			  
			  	<div class="start-right">
					<img src="<?php the_field('branding_logo', 'option'); ?>" alt="Video Library 1.0" />
				</div>
			
			<?php }else{ ?>
			 
			 	<div class="start-right">
					<div class="right-title"><?php the_field('custom_title');?></div>
				</div>
			 
			<?php } ?>

		</div>