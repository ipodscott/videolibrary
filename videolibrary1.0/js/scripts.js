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
	
	 $( ".big-menu-btn" ).click(function() {
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
	
	
	$( ".close-menu" ).click(function() {
		$('.series-menu, .page-menu, .main-navigation').fadeOut(500, function(){
			$('.default-video-cover').fadeOut(500);
			$('.menu-overlay').fadeOut(500);
		});
	});
	
	$( ".video-link" ).click(function() {
		$('.video-link.active').removeClass( "active" );
		$(this).addClass( "active" );
		$('.vid-main-content').show();
	});
	
	
	$( ".tube-link" ).click(function() {
		videoChange();
		$('.vidFrame').attr("src", $(this).attr("vidUrl"));
		$('.myVideo').attr("src", "empty");
		$('.myVideo').hide();
		$('.vidFrame').show();
	});
	
	
	$( ".mp4-link" ).click(function() {
		videoChange();
		$('.vidFrame, .vimFrame').hide();
		$('.vidFrame, .vimFrame').attr("src", "empty");
		$('.myVideo').attr("src", $(this).attr("mp4url"));
		$('.myVideo').show(function(){
			 document.getElementById('myVideo').play();
		});
		
	});
	
	$(".widescreen-btn").click(function() {
        $(".vid-holder img").removeClass("show");
        $(".widescreen-img").addClass("show")
    });
    
    $(".pano-btn").click(function() {
        $(".vid-holder img").removeClass("show");
        $(".pano-img").addClass("show")
    });
    
    $(".standard-btn").click(function() {
        $(".vid-holder img").removeClass("show");
        $(".standard-img").addClass("show")
    });
    
    $(".sixteen-nine-btn").click(function() {
        $(".vid-holder img").removeClass("show");
        $(".sixteen-nine-img").addClass("show")
    });
    
    $(".pal-btn").click(function() {
        $(".vid-holder img").removeClass("show");
        $(".pal-img").addClass("show")
    });
    
     $(".na-btn").click(function() {
        $(".vid-holder img").removeClass("show");
        $(".nat-arch").addClass("show")
    });
    
    $(".vintage-wide-btn").click(function() {
        $(".vid-holder img").removeClass("show");
        $(".vintage-wide").addClass("show")
    });
	
	function videoChange(){
		$('.default-video-cover').fadeOut(500);
		
		$('.vid-box').fadeOut(500, function(){
			$('.vid-box').delay(500).fadeIn(500);
		});
	
		$('.main-menu').delay(500).fadeOut(500, function(){
			$('.menu-overlay').fadeOut(500);
		});
	}
	
	
	 $(".video-menu li").click(function() {
        $(".video-menu li").removeClass("show");
        $(this).addClass("show")
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
		
    function fsToggle(){
	     $('.fullscreen-btn').toggleClass('active');
    }
    
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
        

	function toggleFullscreen(elem) {
	  elem = elem || document.documentElement;
	  if (!document.fullscreenElement && !document.mozFullScreenElement &&
	    !document.webkitFullscreenElement && !document.msFullscreenElement) {
	    if (elem.requestFullscreen) {
	      elem.requestFullscreen();
	    } else if (elem.msRequestFullscreen) {
	      elem.msRequestFullscreen();
	    } else if (elem.mozRequestFullScreen) {
	      elem.mozRequestFullScreen();
	    } else if (elem.webkitRequestFullscreen) {
	      elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
	    }
	    
	  } else {
	    if (document.exitFullscreen) {
	      document.exitFullscreen();
	    } else if (document.msExitFullscreen) {
	      document.msExitFullscreen();
	    } else if (document.mozCancelFullScreen) {
	      document.mozCancelFullScreen();
	    } else if (document.webkitExitFullscreen) {
	      document.webkitExitFullscreen();
	    }
	  }
	}
	
	document.getElementById('btnFullscreen').addEventListener('click', function() {
	  toggleFullscreen();
	  fsToggle();
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
    })
})
	
			