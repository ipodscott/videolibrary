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
		 
		

		<div class="menu-btn"><span class="material-icons"> chevron_left </span> </div>
		
		<div class="menu-overlay" style="display: block;"></div>
		
				<?php include 'helpers/main_video_menu.php';?>
					
		<?php include('admin-bar.php');?>
		

<?php get_footer(); ?>
	