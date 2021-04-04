$(document).ready(function() {
	
	
	$( ".close-menu" ).click(function() {
		$('.series-menu, .page-menu, .main-navigation').fadeOut(500, function(){
			$('.default-video-cover').fadeOut(500);
			$('.menu-overlay').fadeOut(500);
		});
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
	
	
	$( ".video-link" ).click(function() {
		$('.video-link.active').removeClass( "active" );
		$(this).addClass( "active" );
		$('.vid-main-content').show();
		videoChange();
	});
	
	$( ".page-vid-link" ).click(function() {
		hideAudio();
	});

	
	
	$( ".tube-link" ).click(function() {
		$('.vidFrame').attr("src", $(this).attr("vidUrl"));
		$('.myVideo').attr("src", "empty");
		$('.myVideo').hide();
		$('.vidFrame').show();
	});
	
	
	$( ".mp4-link" ).click(function() {
		$('.vidFrame, .vimFrame').hide();
		$('.vidFrame, .vimFrame').attr("src", "empty");
		$('.myVideo').attr("src", $(this).attr("vidURL"));
		$('.myVideo').show(function(){
			 document.getElementById('myVideo').play();
		});	
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
	
	
	function hideAudio(){
		$('.audio-btn.active').removeClass("show");
        $('.audio_footer.show, .mini-audio-btn.show').removeClass("show");
        document.getElementById('audio').pause();
	}
    

    
 $(".sixteen-nine-btn").click(function() {
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".sixteen-nine").addClass("show"); 
    });
    
    $(".standard-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".standard-img").addClass("show");
    });
    
    
    
    $(".pal-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".pal-img").addClass("show");
    });
    
    
    $(".close").click(function() { 
        $(".modal-vid").fadeOut(500);
        /*document.getElementById('myVideo').pause();*/
        $('.youTube, .myVideo').attr('src', '');
    });
    
});



 window.document.onkeydown = function (e)
        {
        if (!e) e = event;
        if (e.keyCode == 27)
        {
        
            $('.vidFrame, .myVideo').attr('src', '');
            $('.modal-vid').fadeOut(500);
            document.getElementById('myVideo').pause();
        
        }
        
        
        };
