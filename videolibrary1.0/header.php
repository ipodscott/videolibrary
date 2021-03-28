<html>
	<head>
	<title><?php the_title();?></title>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	
	<meta property="og:url" content="<?php the_permalink();?>" <meta property="og:type" content="Movie Serial" />
	<meta property="og:title" content="<?php the_title();?>" />
	<meta property="og:description" content="<?php the_field('social_summary');?>" />
	<meta property="og:image" content="<?php the_field('social_icon');?>" />

	
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#000000">

	
	<?php wp_head(); ?>
	<style>
		.load-overlay{
			display: flex;
			align-items: center;
			justify-content: center;
			position: fixed;
			width: 100%;
			height: 100vh;
			top:0px;
			left: 0px;
			background-color: #1a1a1a;
			z-index: 999;
			color: #fff;
			font-size: calc(18px + (18 - 14) * ((100vw - 300px) / (1600 - 300)));
			letter-spacing: 0.5em;
		}
		
		.load-overlay div{
			text-align: center;
		}
		
		.load-overlay img{
			display: none;
			position: relative;
			width: 400px;
			max-width: calc(100% - 40px);
			padding: 10px;
			margin: 0 0 0 0;
		}
		
	
	</style>

	</head>
	<body>
		
	