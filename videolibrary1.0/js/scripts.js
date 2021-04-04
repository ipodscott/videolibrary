$( document ).ready(function() {
   
    $('.load-overlay .login img').delay(1000).fadeIn(500, function(){
	    $('.load-overlay .login img').fadeIn(1000,function(){
		    $('.load-overlay').delay(1000).fadeOut(500);
	    });
    })
   
   $( "button" ).click(function() {
	   $('.load-overlay').fadeOut(500);
   });
   
    
    $( ".menu-btn" ).click(function() {
	    
		$('.menu-overlay').fadeIn(500, function(){
			$('.default-video-cover').fadeIn(500);
			$('.main-menu').fadeIn(500);
			$('.close-menu').fadeIn(500);
		});
		
		 document.getElementById('myVideo').pause();
	});
	
	 $( ".big-menu-btn, .show-menu" ).click(function() {
		$('.home-btn').fadeIn();
		$('.main-navigation').fadeIn(500);
		document.getElementById('myVideo').pause();
	});
	
	
	 $( ".show-page-menu" ).click(function() {
		
		$('.main-navigation').fadeIn(500);
		document.getElementById('myVideo').pause();
	});
	
	$( ".close-page-nav" ).click(function() {
		$('.main-navigation').fadeOut(500, function(){
			
		});
	});
	
	
	
	
	var $container = jQuery('.acc-body'), $acc_head = jQuery('.acc-head');

		$acc_head.last().addClass('last');
		
		$acc_head.on('click', function(e) {
			if( jQuery(this).next().is(':hidden') ) {
			    //Comment or uncomment the line below to control other open accordions when acc-head is clicked.
				$acc_head.removeClass('active').next().slideUp(750);
				jQuery(this).toggleClass('active').next().slideDown(750);
				
			}
          else{
              //Comment or Uncomment out the line below to add or remove the toggle function from acc-head
            jQuery(this).toggleClass('active').next().slideToggle(750);
          }
			e.preventDefault();
		});
		
       
     /**
 * Author: Heather Corey
 * jQuery Simple Parallax Plugin
 *
 */
 
(function($) {
 
    $.fn.parallax = function(options) {
 
        var windowHeight = $(window).height();
 
        // Establish default settings
        var settings = $.extend({
            speed        : 0.15
        }, options);
 
        // Iterate over each object in collection
        return this.each( function() {
 
        	// Save a reference to the element
        	var $this = $(this);
 
        	// Set up Scroll Handler
        	$(document).scroll(function(){
 
    		        var scrollTop = $(window).scrollTop();
            	        var offset = $this.offset().top;
            	        var height = $this.outerHeight();
 
    		// Check if above or below viewport
			if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
				return;
			}
 
			var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
 
                 // Apply the Y Background Position to Set the Parallax Effect
    			$this.css('background-position', 'center ' + yBgPosition + 'px');
                
        	});
        });
    };
  
	  
	  $(window).scroll(function(){
	    $(".top").css("opacity", 1 - $(window).scrollTop() / 750);
	    $(".fadey").css("opacity", 1 - $(window).scrollTop() / 1500);
	  });
	  
	}(jQuery));
	
	
	
	$('.bg-1').parallax({
		speed :	-0.2
	});
	
	$('.bg-2').parallax({
		speed :	0.125
	});

    
});
        
	
$(window).scroll(function() {
    $(".fadey").css("opacity", 1 - $(window).scrollTop() / 1500);
    $(".fadey-fast").css("opacity", 1 - $(window).scrollTop() / 750);
    $(".move-down").css("margin-top", 1 + $(window).scrollTop() * 0.25);
    $(".move-up").css("margin-top", 1 - $(window).scrollTop() * 0.25);
    $(".slide-right").css("left", 1 + $(window).scrollTop() * 0.25);
    $(".slide-right").css("left", 1 + $(window).scrollTop() * 0.25);
    var pixs = $(document).scrollTop()
    pixs = pixs / 250;
    $(".blurry").css({
        "-webkit-filter": "blur(" + pixs + "px)",
        "filter": "blur(" + pixs + "px)"
    })
    var scaleUp = 1 + $(document).scrollTop() / 3000;
    var scaleDown = 1 - $(document).scrollTop() / 3000;
    $(".scale-up").css("transform", "scale( " + scaleUp + ")");
    $(".scale-down").css("transform", "scale( " + scaleDown + ")");
    var theta = $(window).scrollTop() / 300 % Math.PI;
    $('.rotate').css({
        transform: 'rotate(' + theta + 'rad)'
    });
    $('#rightgear').css({
        transform: 'rotate(-' + theta + 'rad)'
    });
});
	
			