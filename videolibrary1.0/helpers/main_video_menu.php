<div class="main-menu page-menu" style="display: block;">
	<div class="menu-title"> <div>
		<span class="show-page-menu"></div>
		<div>
			<div class="memu-buttons">
				<i class="material-icons show-menu">menu</i>
				<a href="/"><span class="material-icons">chevron_left</span></a>
			</div>
			<?php the_field('main_title');?></div>
		<div>
			<span class="close-menu" style="display: none;">
				<span class="material-icons">close</span>
			</span>
	</div>
</div>
		
		<?php if(get_field('video_menu_builder')): ?>
<?php while(has_sub_field('video_menu_builder')): ?>

		
		
			<div class="link-group">
				<div class="acc-head link-group-title <?php if ( 'yes' == get_sub_field('menu_active') ): ?> active <?php endif; ?>"><?php the_sub_field('menu_title');?>
				
				<span class="menu-off"><span class="material-icons">toggle_off</span></span>
				<span class="menu-on"><span class="material-icons">toggle_on</span></span>
				
				</div>
				<div class="acc-body" <?php if ( 'yes' == get_sub_field('menu_active') ): ?> style="display: block;"<?php endif; ?>>
					
					<?php if ( 'yes' == get_sub_field('include_summary') ): ?>
						<div class="video-summary"><?php the_sub_field('menu_info');?></div>
					<?php else: ?>
					
					<?php endif; ?>
		
			<?php if ( 'yes' == get_sub_field('show_video_links') ): ?>
			
				<?php while(has_sub_field("add_menu_items")): ?>
					<?php if(get_row_layout() == "select_from_library"):?>
						
						<?php include('library-links.php');?>	
							  
					<?php elseif(get_row_layout() == "select_external_video"):?>
									 			
						<?php include('external-video-links.php');?>
																		
					<?php endif; ?>
				<?php endwhile; ?>
		  
			<?php endif; ?>
					
				</div>
			</div>
			
			<?php endwhile; ?>
<?php endif; ?>
			
			<img class="footer-img" src="<?php bloginfo('template_directory'); ?>/img/video_footer_dark.svg"/>
</div>	