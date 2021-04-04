<?php get_header(); ?>
  
   <!-- open all --><div class="all" name="#top">
	    
	   <?php if (have_posts()) : ?>
	   <?php while (have_posts()) : the_post(); ?>
	   <?php the_content(); ?>
	   <?php endwhile; ?>
	   <?php endif; ?>
       
<!-- close all --> </div>

	<div class="big-menu-btn"><i class="material-icons">menu</i></div>
	<div class="home-btn"><a href="/"><span class="material-icons"> chevron_left </span></a></div>
	
	<?php
	include( 'acf-blocks/video_button/video.php' ); 
	include( 'acf-blocks/audio_button/audio_footer.php' );
	?>

   <?php get_footer(); ?>