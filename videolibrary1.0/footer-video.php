

<?php wp_footer(); ?>

<style type="text/css">
.video-body {
	display: block;
	position: static !important;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100vh;
    z-index: 999;
    background-image: url(/img/test_pattern.png);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    font-family: 'Montserrat', sans-serif;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-color: #000;
}

a{
	color: #ccc;
	text-decoration: none;
}

.main-content{
	position: fixed !important;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100vh;
    z-index: 999;
    }

.movie-box{
	top: 0px;
    left: 0px;
    display: table;
    width: 100%;
    height: 100vh;
    color: #fff;
    text-align: center;
}

.movie{
	display: table-cell;
    text-align: center;
    vertical-align: middle;
}

.vid-box {
position: relative;
    text-align: center;
 display: block !important;
}

.vid-box img {
    max-height: calc(100vh - 90px);
	max-width: calc(100vw - 40px);
    position: relative;
    margin: 0 auto;
    display: block
}

.vid-holder {
    display: inline-block;
    top: 0px;
    left: 0px;
    position: relative;
    margin: 0 auto;
    -webkit-box-shadow: 0 0 30px 0 #000000;
    box-shadow: 0 0 30px 0 #000000;
    border-style: solid;
    border-width: 1px;
    border-color: #333;
    background-color: #000;
    background-image: url(/images/eclipse.svg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: 120px 120px;
}

video,
iframe,
.wistia_embed {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: calc(100% - 1px);
    height: calc(100% - 1px);
    outline: none !important;
    background-color: transparent;
}

.wistia_responsive_wrapper {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%
}



.logo {
    display: block;
    position: absolute;
    right: 10px;
    top: 10px;
    width: 20%;
    opacity: .25;
    transition: all 0.5s;
    cursor: pointer
}

.logo img {
    float: right;
    width: 20%;
    height: auto
}

.logo:hover {
    opacity: 1
}


.title {
    display: block;
    position: absolute;
    top: -30px;
    left: 0;
    width: 100%;
    text-align: right;
    font-size: 14px;
    font-weight: 100;
    transition: all 0.5s;
    color: #ccc;
    font-family: 'Montserrat', sans-serif;
    font-weight: 400;
}

.title .material-icons{
	font-size: 14px;
	float: right;
	position: relative;
    font-size: 14px;
	margin:  3px 0 0 0;
}

@media (max-width:720px) {
    .title {
        font-size: 12px;
        top: -30px
    }
}

@media (max-width:600px) {
    .title {
        font-size: 12px;
        top: -20px
    }
}

@media (max-height:530px) {
    .title {
        font-size: 12px;
        top: -30px
    }
}

@media (max-height:400px) {
    .title {
        font-size: 12px;
        top: -30px
    }
}

</style>