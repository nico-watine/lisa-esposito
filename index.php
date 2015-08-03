<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>PAGE TITLE</title>
	<meta name="description" content="###">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="<?php autoVer('/css/style.css'); ?>"/>

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php autoVer('/css/ie.css'); ?>"/>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

</head>

<body id="index">

<header>
	<div class="verbiage">
		<h1 id="lisa">Lisa Esposito, PhD</h1>	
		<h2 id="painter">Abstract Expressionist Painter</h2>
		<nav>
			<ul class="vertical-list">
				<li><a href="/galleries/">Galleries</a></li>
				<li><a href="/upcoming-events/">Upcoming Events</a></li>
				<li><a href="#">Artist Statement</a></li>
				<li><a href="#">CV / Bio</a></li>
			</ul>
		</nav>
		<div id="contact-info">
			<div class="row">
				<h4 id="phone">832-520-4743</h4>
				<h4 id="email">info@lisaesposito.com</h4>
			</div>
			<h4>Located in the Greater Boston area</h4>
		</div>
	</div>
	<div class="angled-div" id="landing"></div>
	<aside><h4>'Escape Artist'</h4></aside>
</header>

<section class="gallery-link" id="linear-abstraction">
	<div class="verbiage">
		<h2>GALLERY</h2>
		<h3 class="gallery-title">Linear Abstraction</h3>
	</div>
	<div class="angled-div"></div>
	<aside><h4>'Lost In Transition'</h4></aside>
</section>

<section class="gallery-link" id="lyrical-abstraction">
	<div class="verbiage">
		<h2>GALLERY</h2>
		<h3 class="gallery-title">Lyrical Abstraction</h3>
	</div>
	<div class="angled-div"></div>
	<aside><h4>'Netherworld'</h4></aside>
</section>

<section class="bio">
	<!-- <div class="feature-image"> -->
		<aside><h4>'All Points West'</h4></aside>
	<!-- </div> -->
	<div class="verbiage">
		<h2>Meet Lisa Esposito</h2>
		<p>I am a self-taught, abstract expressionist artist best known for spiritually evocative, non-representational paintings. In 2005, with no prior art training, I began painting in acrylic on large-scale canvases. <br>
		Evolving as a painter, I gained gallery representation in 2006. An exhibited artist, I am inspired by the Abstract Expressionists of the early to mid-20th c. as well as Buddhism, Taoism, ancient Greek philosophy, and New England Transcendentalism. My artwork consists of vibrant, contrasting colors and abstract images drawn from 25 years of teaching Philosophy.</p>
	</div>
</section>





<script src="<?php autoVer('/js/scripts-min.js'); ?>"></script>

</body>
</html>



