<?php get_header(); ?>
	<?php include 'video-layer.php';?>

 <?php 
			  $catId = get_field('episode_count');
			  $the_query = new WP_Query( array(
			 'post_type' => 'video',
			 'tax_query' => array(
			 
			 array('taxonomy' => 'video_category','terms' => $catId)
			 )
			 ));
			 $count = $the_query->found_posts;?>
		 
		

		<div class="menu-btn"><i class="material-icons">menu</i></div>
		
		<div class="menu-overlay" style="display: block;"></div>
		
				
				<div class="main-menu page-menu" style="display: block;">
		<div class="menu-title"> <div><a href="/"><span class="material-icons" style="display: none;">home</span></a><span class="show-page-menu"><span class="material-icons" style="display: none;">apps</span></span></div><div><?php the_title();?></div><div><span class="close-menu" style="display: none;"><span class="material-icons">close</span></span></div></div>
		
		
		
		
			<div class="link-group">
				<div class="acc-head link-group-title  active ">About the Film				
				<span class="menu-off"><span class="material-icons">toggle_off</span></span>
				<span class="menu-on"><span class="material-icons">toggle_on</span></span>
				
				</div>
				<div class="acc-body" style="display: block;">
					
											<div class="video-summary"><?php the_field('video_copy');?></div>
							
						
						
						<?php include('helpers/video-formats.php');?>
																		 			
											 
																		
											  
								
				</div>
			</div>
			
						
			<img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/img/video_footer_dark.svg">
</div>
					
		
	

<?php get_footer(''); ?>
	