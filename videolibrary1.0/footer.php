		<?php include('helpers/main-page-nav.php');?>
		
		
		
		<div class="load-overlay">
			<div class="login">
				
				
				<?php $selectLoadImage = get_field('select_load_image'); if($selectLoadImage == "default"){ ?>
					
					<img src="<?php the_field('branding_logo', 'option'); ?>" alt="Logo" />
				
				<?php }else{ ?>
				  	
				  	<img src="<?php the_field('branding_logo','option'); ?>" alt="Logo" />
				
				<?php } ?>
								
			</div>
		</div>
	
	
	
	<?php wp_footer(); ?>
	<?php include('admin-bar.php');?>	
	<div id="pageVideo" class="page-movie"></div>
	<?php 
		if (is_single() || is_page() || is_post() ) {
	
		include( 'acf-blocks/audio_button/audio_footer.php' ); 
		}
	 ?>

			 <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.featured-swiper-container', {
	  autoplay: {
	  	delay: 5000,
		},
  	  slidesPerView: 1,
      spaceBetween: 0,
      direction: 'horizontal',
      loop: true,
      speed: 1500,
      effect: 'slide',
      pagination: {
	     type: 'progressbar',
        el: '.progress-swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
    });
   
   /* thumb swiper */ 
    
    var thumbSwiper = new Swiper('.thumb-swiper-container', {
     slidesPerView: 5,
  spaceBetween: 30,
  // Responsive breakpoints
	  breakpoints: {
	    // when window width is >= 320px
	    500: {
	      slidesPerView: 1
	    },
	    // when window width is >= 480px
	    
	    920: {
	      slidesPerView: 4
	       },
	    // when window width is >= 640px
	   1200: {
	      slidesPerView: 5
	    }
	  },
     
      loop: true,
      pagination: {
       	el: '.swiper-pagination',
        dynamicBullets: true,
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
      },
    });

    
  </script>

		
         <script>
	        function poll(poll_url, poll_timeout) {
			
			    setInterval( function() {
			
			        $.ajax({
			        	dataType: "json",
			        	url: poll_url,
			        	success: function (data){
			
				       	if(data.modified != date_modified){
				       		if(!date_modified){
				       			date_modified = data.modified;
				       		}
				       		else{
				       			location.reload();
				       		}
				       	}
				       	
			
			        	}
			        });
			    }, poll_timeout);
			}
			
			
				var date_modified = null; poll("<?php echo site_url() ?>/wp-json/wp/v2/<?php echo $post->post_type ?>s/<?php echo $post->ID ?>", 3000);

        </script>
	</body>
</html>