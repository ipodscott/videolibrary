<?php $posts = get_sub_field('select_from_library'); if( $posts ): ?>
<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

<?php setup_postdata($post); ?>
						     
<?php include('video-formats.php');?>
 
<?php endforeach; ?>
							    
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

<?php endif; ?>	
