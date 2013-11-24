<?php 
// Load forms class
require_once('lib/forms/form.class.php');

// Start a session
if ( !isset($_SESSION) ) session_start();
?>
<!DOCTYPE html> 
<html dir="ltr" lang="en-US"> 
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Wedding - Robert &amp; Adele</title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="media/css/reset.css" />
    <link rel="stylesheet" type="text/css" media="all" href="media/css/common.css" />
    <link rel="stylesheet" type="text/css" media="all" href="media/css/colorbox.css" />
    <link rel="stylesheet" type="text/css" media="all" href="media/css/font-awesome.css" />

    <!-- Skin -->
    <link rel="stylesheet" type="text/css" media="all" id="skin_css" href="media/css/peach_chocolate.css" />

   <link rel="stylesheet" type="text/css"
        media="screen and (max-width: 600px)"
        href="media/css/mobile.css" />        
    
    <link rel="stylesheet" type="text/css"
        media="screen and (min-width: 601px)"
        href="media/css/default.css" />

    <link rel="stylesheet" type="text/css"
    	media="screen and (max-width: 700px)"
    	href="media/css/small.css" />  

    <!-- Google Web Fonts (Bitter & Sofia) -->
 	<link href='http://fonts.googleapis.com/css?family=Bitter:400,400italic,700|Sofia' rel='stylesheet' type='text/css'>
    
    <!-- Adaptive Images -->
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>    

    <!-- HTML5 Support in IE8 and lower -->
    <!--[if lt IE 9]>
        <script src="media/js/html5shiv.js" type="text/javascript"></script>
        <script src="media/js/selectivizr-min.js" type="text/javascript"></script>
        <script src="media/js/PIE.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" media="all" href="media/css/default.css" />
        <link rel="stylesheet" type="text/css" media="all" href="media/css/ie8.css" />
    <![endif]-->

    <!--[if IE 7]>
    	<link rel="stylesheet" type="text/css" media="all" href="media/css/font-awesome-ie7.css" />
	<![endif]-->    	
</head>
<body class="home wood onepage">

	<!-- Navigation -->
	<nav id="primary_nav">
		<div class="menu-button">Menu <i class="float_right icon-chevron-down icon-large"></i></div>	
		<ul class="responsive_menu" role="navigation">
			<li><a href="#container">Home</a></li>
			<li><a href="#our-story">Our Story</a></li>			
			<li><a href="#wedding">Wedding</a></li>
			<li><a href="#photos">Photos</a></li>			
			<li><a href="#rsvp">RSVP</a></li>
			<li><a href="index.php>Multi-page</a></li>
		</ul>
	</nav>
	<!-- End navigation -->

	<div id="container" class="wrapper">		

		<!-- Header -->
		<header id="header" class="home">

			<hgroup>
				<h1 id="site_title">Robert <span class="ampersand">&</span> Adele</h1>
				<h3>24th March 2012 &#8212; Healesville, Victoria</h3>
			</hgroup>

			<!-- Slider -->
			<div id="slider">
				<ul class="rslides">
					<li><img src="path/to/image" alt="Picture 1" /></li>
					<li><img src="path/to/image" alt="Picture 1" /></li>
					<li><img src="path/to/image" alt="Picture 1" /></li>
				</ul>
			</div>
			<!-- End slider -->

		</header>
		<!-- End header -->

		<!-- Our story -->	
		<div class="panel" id="our-story">

			<div class="column_100">
			
				<h2 class="section_label">Our Story</h2>

				<div class="column_33 divider">
					<h4 class="column_header">A chance encounter</h4>
					<p>Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio. Et ipsant por aut ea nonseque pore quiaepr oribus seniaec tateces tessequide excerferciis cuptatem aut a saniae dolut eos dolores peliquod Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio.</p>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<img src="path/to/image" alt="Picture 1" class="fullwidth" />
				</div>
				<div class="column_33 divider">
					<h4 class="column_header">Love at first sight</h4>
					<img src="path/to/image" alt="Picture 1" class="fullwidth" />
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<p>Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio. Et ipsant por aut ea nonseque pore quiaepr oribus seniaec tateces tessequide excerferciis cuptatem aut a saniae dolut eos dolores peliquod Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio.</p>					
				</div>
				<div class="column_33 column_last">
					<h4 class="column_header">The proposal</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<img src="path/to/image" alt="Picture 3" class="fullwidth" />
					<p>Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio. Et ipsant por aut ea nonseque pore quiaepr oribus seniaec tateces tessequide excerferciis cuptatem aut a saniae dolut eos dolores peliquod Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio.</p>					
				</div>

			</div>

			<div class="waves"></div>

		</div>
		<!-- End our story -->

		<!-- Wedding -->
		<div class="panel" id="wedding">			

			<div class="column_100">

				<h2 class="section_label">Wedding</h2>

				<div class="column_33 divider">

					<h4 class="column_header">Ceremony</h4>
					<p>Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio.</p>
					<p><strong>Saturday 24th March 2012</strong><br />
						Two o'clock in the afternoon<br />
						Wind in the Willows<br />
						Healesville, Victoria
					</p>													
					<p>Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio. Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio.</p>

				</div>

				<div class="column_33 divider">
					<h4 class="column_header">Reception</h4>
					<p>Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio.</p>
					<p>Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio. Et ipsant por aut ea nonseque pore quiaepr oribus seniaec tateces tessequide excerferciis cuptatem.</p>
					<p>Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio. Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio.</p>
				</div>

				<!-- Google map -->
				<div class="column_33 column_last">
					<h4 class="column_header">Map</h4>
					<div class="google_map" 
						data-longtitude="130.8417694" 
						data-latitude="-12.4628198" 
						data-zoom="11" 
						data-marker="This is my marker text">
					</div>
				</div>
				<!-- End Google map -->				

			</div>			

			<div class="waves"></div>

		</div>
		<!-- End wedding -->

		<!-- Photos -->	
		<ul class="gallery medium carousel colorbox_gallery" id="photos">

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

			<li>
				<a href="path/to/image">
					<img src="path/to/image" alt="An image caption" />
				</a>
			</li>

		</ul>
		<!-- End photos -->		

		<!-- RSVP -->
		<div class="panel panel_last" id="rsvp">

			<div class="column_66 divider">

				<h2 class="section_label">RSVP</h2>

				<form method="post" action="lib/forms/submit.php" name="rsvpform" id="rsvpform">			

					<?php Osfa_Form::status_message() ?>

					<input type="hidden" name="form_id" value="RSVP" />
                    <input type="hidden" name="subject" value="RSVP submission" />			

					<div class="column_40 no_divider">
					
						<p>Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio. Et ipsant por aut ea nonseque pore quiaepr oribus seniaec tateces tessequide excerferciis cuptatem.</p>

						<input type="hidden" name="form_id" value="RSVP" />

                    	<label class="fullwidth">
                        	<input type="radio" name="attending" value="1" class="radio" />
                        	I/We will be there!
                        </label>
                    	<label class="fullwidth">
                        	<input type="radio" name="attending" value="0" class="radio" />
                        	Sorry, I/we can't make it
                        </label>
                        <?php Osfa_Form::status_message('attending') ?>
                    
	                </div>
                    
                    <div class="column_60 column_last">
	                    <fieldset>
	                        <legend>Name(s)</legend>
	                        <input type="text" name="name[0]" accesskey="1" />
	                        <input type="text" name="name[1]" accesskey="2" />
	                        <input type="text" name="name[2]" accesskey="3" />
	                        <input type="text" name="name[3]" accesskey="4" />
	                        <input type="text" name="name[4]" accesskey="5" />
	                    </fieldset>                    

						<button class="submit" id="submit">Send</button>
					</div>
				</form>				

			</div>	

			<!-- Registry -->
			<div id="registry" class="column_33 column_last">
				<h2 class="section_label">Registry</h2>				
				<p>Ovid quatur rese corro blanis nes susaperor re maio moditib usciet ipsum dolo culparit maio.</p>
				<hr class="sharp" />
				<ul class="centered registry_list">
					<li><a href="">myer.com.au</a></li>
					<li><a href="">anaconda.com.au</a></li>
				</ul>				
			</div>
			<!-- End registry -->

			<div class="waves"></div>

		</div>
		<!-- End RSVP -->

		<!-- Footer -->
		<footer id="pre_footer">

			<div class="connect">
				<h4>Connect</h4>
				<div class="email"><strong>Email:</strong> <a href="mailto:hello@yourwedding.com">hello@yourwedding.com</a></div>
				<div class="phone"><strong>Phone:</strong> </div>
				<ul class="social horizontal">
					<li><a href="" class="facebook social_button">Facebook</a></li>
					<li><a href="" class="twitter social_button">Twitter</a></li>
					<li><a href="" class="flickr social_button">Flickr</a></li>
					<li><a href="" class="rss social_button">RSS</a></li>
					<li><a href="" class="youtube social_button">YouTube</a></li>
				</ul>
			</div>

		</footer>
		<!-- End footer -->

	</div>

	<footer id="footer">

		<div class="wrapper">

			<div class="double_dotted">
				<h4>R <span class="ampersand">&</span> A</h4>
			</div>

			<div class="bottom">
				<span class="float_left">&copy; Copyright 2012</span>
				<a class="float_right">Hitched theme by <span class="osfa">Studio 164a</span></a>
			</div>

		</div>

	</footer>

<!-- Load Javascript right before the closing body tag -->

<!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<!-- Sticky JS -->
<script type="text/javascript" src="media/js/jquery.sticky.js"></script>

<!-- Flexnav -->
<script type="text/javascript" src="media/js/jquery.flexnav.js"></script>

<!-- Hover Intent -->
<script type="text/javascript" src="media/js/jquery.hoverIntent.min.js"></script>

<!-- Scroll To -->
<script type="text/javascript" src="media/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script type="text/javascript" src="media/js/jquery.localscroll-1.2.7-min.js"></script>

<!-- Responsive Sliders -->
<script type="text/javascript" src="media/js/responsiveslides.min.js"></script>

<!-- CarouselSwipe -->
<script type="text/javascript" src="media/js/jquery.carouselSwipe.js"></script>

<!-- Google Maps -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="media/js/jquery.ui.map.min.js"></script>

<!-- Image Hover -->
<script type="text/javascript" src="media/js/jquery.imageHover.js"></script>

<!-- Colorbox -->
<script type="text/javascript" src="media/js/jquery.colorbox.min.js"></script>

<!-- Hitched default javascript setup -->
<script type="text/javascript" src="media/js/hitched.js"></script>

<!-- Call scripts -->
<script>
(function($) {
	$(document).ready( function() {		
		HITCHED.documentReady();
	});

	$(window).load( function() {	
		HITCHED.windowLoad();
	});	
})(jQuery);
</script>
    

</body>