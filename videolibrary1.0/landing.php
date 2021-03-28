<?php
	/*Template Name: Landing Page*/
	get_header('landing'); ?>

<style type="text/css">
	.video{
	position: fixed;
	height: 100%;
	width: 100%;
	background-color: #000;
}
	
	#video_background { 
	position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
    transform: translateX(calc((100% - 100vw) / 2));
}

.video-overlay{
	position: fixed;
	height: 100vh;
	width: 100%;
	background-color: #000;
	opacity: 0.8;
	z-index: 999;
	background-position: center center;
	background-size: cover;
	background-repeat: no-repeat;
}


.video-image-overlay{
	position: fixed;
	left: 25vh;
	top: 25%;
	height: 75vh;
	width: 75%;
	background-color: #000;
	opacity: 0.6;
	z-index: 999;
	background-position: center center;
	background-size: cover;
	background-repeat: no-repeat;
	background-image: url(../img/test_pattern.png);
	mix-blend-mode: screen;
}

.reflection{
	width: calc(100% - 60px);
	margin: 30px;
	border-radius: 30px 30px 0px 0px;
	height: 40vh;
	/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#1e5799+0,ffffff+0,ffffff+100&0.5+0,0+100 */
	background: -moz-linear-gradient(top,  rgba(255,255,255,0.5) 0%, rgba(255,255,255,0) 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#80ffffff', endColorstr='#00ffffff',GradientType=0 ); /* IE6-9 */
}

.screen{
	position: fixed;
	height: 100vh;
	width: 100%;
	opacity: 1;
	z-index: 999;
	background-position: center center;
	background-size: cover;
	background-repeat: no-repeat;
	background-image: url(https://tv.dieselpunkindustries.com/img/screen.png);
	z-index: 999;

}

</style>

<div class="video">
	<video muted id="video_background" autoplay="autoplay" loop="loop">
		 <source src="https://archive.org/download/Video-Ranger-Ring-3/Video-Ranger-Ring2_512kb.mp4" type="video/mp4">
	</video>
</div>

	<div class="screen"></div>	
 
<?php get_footer(); ?>
	