
  <?php get_header(); ?>
  
   <!-- open all --><div class="all" name="#top">
	    
	   <?php if (have_posts()) : ?>
	   <?php while (have_posts()) : the_post(); ?>
	   <?php the_content(); ?>
	   <?php endwhile; ?>
	   <?php endif; ?>
  

      <div class="page-footer"><img class="footer-img" src="https://www.staging.dieselpunkindustries.com/wp-content/themes/videolibrary1.0/img/video_footer_dark.svg"></div>
<!-- close all --> </div>
	<div class="big-menu-btn"><i class="material-icons">menu</i></div>
<div class="home-btn"><a href="/"><span class="material-icons"> arrow_back </span></a></div>


   <?php get_footer(); ?>