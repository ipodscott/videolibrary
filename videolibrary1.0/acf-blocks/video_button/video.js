$(document).ready(function() {
	
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

	
	function hideAudio(){
		$('.audio-btn.active').removeClass("show");
        $('.audio_footer.show, .mini-audio-btn.show').removeClass("show");
        document.getElementById('audio').pause();
	}
    
    $( ".movie-btn" ).click(function() {
        $('.myVideo').attr("src", $(this).attr("vidUrl"));
        document.getElementById('myVideo').play();
        $('.myVideo').removeClass("hide");
        $('.myVideo').addClass("show");
        $('.youTube').addClass("hide");
        $('.youTube').removeClass("show"); 
        hideAudio();
    });
    
    $( ".tube-link" ).click(function() {
        $('.youTube').removeClass("hide");
        $('.youTube').addClass("show");
        $('.myVideo').addClass("hide");
        $('.myVideo').removeClass("show");
        $('.youTube').attr("src", $(this).attr("vidUrl"));
        hideAudio();
     });
    
    $(".widscreen-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".widescreen-img").addClass("show");
    });
    
    $(".standard-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".standard-img").addClass("show");
    });
    
     $(".sixteen-nine-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".sixteen-nine").addClass("show");
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
        
            $('.youTube, .myVideo').attr('src', '');
            $('.modal-vid').fadeOut(500);
            document.getElementById('myVideo').pause();
        
        }
        
        
        };
