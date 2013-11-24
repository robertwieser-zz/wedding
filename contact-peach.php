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
<body class="archive stripes">

	<!-- Navigation -->
	<nav id="primary_nav">
		<div class="menu-button">Menu <i class="float_right icon-chevron-down icon-large"></i></div>
		<ul class="responsive_menu" role="navigation">
			<li><a href="index.php">Home</a>
				<ul>
					<li><a href="index-onepage.html">One-page layout</a>					
				</ul>
			</li>
			<li><a href="about.html">Our Story</a></li>
			<li><a href="wedding.html">Wedding</a></li>
			<li><a href="gallery-singles-large.html">Gallery</a>
				<ul>
					<li><a href="gallery-singles-large.html">2-column gallery</a></li>
					<li><a href="gallery-singles-medium.html">4-column gallery</a></li>
					<li><a href="gallery-singles-thumbnails.html">6-column gallery</a></li>					
					<li><a href="gallery-albums-large.html">2-column album gallery</a></li>
					<li><a href="gallery-albums-medium.html">3-column album gallery</a></li>
				</ul>
			</li>
			<li><a href="elements.html">Features</a>
				<ul>					
					<li><a href="elements.html">Elements</a></li>
					<li><a href="columns.html">Columns</a></li>			
					<li><a href="page-fullwidth.html">Fullwidth page</a></li>
					<li><a href="page-with-sidebar.html">Page with sidebar</a></li>
				</ul>
			</li>
			<li class="current">
				<a href="contact.php">Forms</a>
				<ul>
					<li><a href="contact.php">Contact form</a></li>
					<li><a href="rsvp.php">RSVP</a></li>							
				</ul>
			</li>
			<li><a href="blog.html">Blog</a>
				<ul>
					<li><a href="blog-single.html">Single blog post</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<!-- End navigation -->

	<div id="container" class="wrapper">		

		<!-- Header -->
		<header id="header" class="page">
			<div id="site_title">Robert <span class="ampersand">&</span> Adele</div>
			<div id="page_title">
				<h1>Get in Touch</h1>
			</div>
		</header>
		<!-- End header -->

		<!-- Main content area -->
		<div id="main">

			<!-- Page -->	
			<div class="panel form">

				<div class="entry">

					<?php Osfa_Form::status_message() ?>

					<form method="post" action="lib/forms/submit.php" name="contactform" id="contactform">
	    				
	                    <input type="hidden" name="form_id" value="Contact form" />
	                    <input type="hidden" name="subject" value="Contact form submission" />
	                    
	                    <div>
							<label for="name" accesskey="U"><span class="required">*</span> Your Name</label>
							<input name="name" type="text" id="name" size="30" value="" required />
		                    <?php Osfa_Form::status_message('name') ?>
		                </div>

		                <div>
							<label for="email" accesskey="E"><span class="required">*</span> Email</label>
							<input name="email" type="email" id="email" size="30" value="" required />
		                    <?php Osfa_Form::status_message('email') ?>
		                </div>
	    
	    				<div>
							<label for="phone" accesskey="P"><span class="required">*</span> Phone</label>
							<input name="phone" type="text" id="phone" size="30" value="" required />
		                    <?php Osfa_Form::status_message('phone') ?>
		                </div>
	                    
	                    <div>
							<label for="comments" accesskey="M"><span class="required">*</span> Message</label>
							<textarea name="comments" cols="40" rows="3" id="comments"></textarea>
		                    <?php Osfa_Form::status_message('comments') ?>
		                </div>

		                <div class="button_container">
							<button class="submit" id="submit">Send</button>
						</div>

					</form>

				</div>

				<div class="waves"></div>					

			</div>
			<!-- End page entry -->

		</div>
		<!-- End main content area -->

		<!-- Footer -->
		<footer id="pre_footer">

			<div class="connect">
				<h4>Connect</h4>
				<div class="email"><a href="mailto:hello@yourwedding.com">hello@yourwedding.com</a></div>
				
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

<!-- Flexnav -->
<script type="text/javascript" src="media/js/jquery.flexnav.js"></script>

<!-- Dropdown Menus -->
<script type="text/javascript" src="media/js/jquery.dropdownmenu.js"></script>

<!-- Hover Intent -->
<script type="text/javascript" src="media/js/jquery.hoverIntent.min.js"></script>

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