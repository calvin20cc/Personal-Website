<!DOCTYPE html>
<html>
<head>
	<title>Calvin Chan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- link to uikit -->
	<link rel="stylesheet" type="text/css" href="/uikit-2.27.4/css/uikit.min.css">
	<link rel="stylesheet" type="text/css" href="/uikit-2.27.4/css/uikit-custom-theme.css">
	<!-- link to google roboto font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
	<!-- link to custom css -->
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
</head>
<body>
	<!-- header -->
	<nav class="uk-navbar uk-fixed-navigation">
		<div class="uk-container uk-container-center">
		    <a href="" class="uk-navbar-brand uk-hidden-small">
		    	<img src="/images/logo.png" width="100px" height="60px">
		    </a>
		    <div class="uk-navbar-flip uk-hidden-small">
		    	<ul class="uk-navbar-nav uk-hidden-small" data-uk-scrollspy-nav="{closest:'li', smoothscroll:true}">
		    		<li class="uk-active"><a href="/">Home</a></li>
					<li class=""><a href="#aboutme">About Me</a></li>
					<li class=""><a href="#skills">Skills</a></li>
					<li class=""><a href="">Projects</a></li>
					<li class=""><a href="">Blog</a></li>
					<li class=""><a href="">Contact</a></li>
		   		</ul>
		    </div>
		    <a href="#offcanvas-nav" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas>    	
		    </a>
		    <div class="uk-navbar-content uk-navbar-center uk-visible-small">
		    	<a href="" class="">
		    		<img src="/images/logo.png" width="100px" height="60px">
		    	</a>
		    </div>
		</div>
	</nav>

	<div id="offcanvas-nav" class="uk-offcanvas">
		<div class="uk-offcanvas-bar">
			<ul class="uk-nav uk-nav-offcanvas" data-uk-canvas>
				<li class="<?php echo $page_id == 1 ? 'uk-active' : ''?>"><a href="/">Home</a></li>
		    	<li class="<?php echo $page_id == 2 ? 'uk-active' : ''?>"><a href="aboutme.php">About Me</a></li>
				<li class="<?php echo $page_id == 3 ? 'uk-active' : ''?>"><a href="">Skills</a></li>
				<li class="<?php echo $page_id == 4 ? 'uk-active' : ''?>"><a href="">Projects</a></li>
				<li class="<?php echo $page_id == 5 ? 'uk-active' : ''?>"><a href="">Blog</a></li>
				<li class="<?php echo $page_id == 6 ? 'uk-active' : ''?>"><a href="">Contact</a></li>
		    </ul>
		</div>
	</div>
	<!-- end header -->

	<!-- banner -->
	<div class="uk-slidenav-position" id="home" data-uk-slideshow>
		<ul class="uk-slideshow uk-slideshow-fullscreen">
	    	<li>
				<img class="img" src="/images/workstation.jpg"/>
				<div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
					<div class="banner-info">
						<h1 id="typed" class="uk-heading-large"></h1>
						<a href="#aboutme"><i id="chevron" class="uk-icon-hover uk-icon-large uk-icon-chevron-down"></i></a>		
					</div>
				</div>
			</li>
		</ul>
	</div>

	<!-- About Me Section -->
	<div class="uk-block uk-contrast" id="aboutme" style="background: url(images/background.png) center; background-size: cover;">
		<div class="uk-container uk-container-center">
			<div class="uk-width-medium-1-2 uk-container-center" id="about-info">
				<div class="title-icon"><i id="about-icon" class="uk-icon-medium uk-icon-user"></i></div>
				<h2 class="uk-h1 uk-text-center">Calvin Chan</h2>
				<h5 class="uk-h2 uk-text-center">Student</h5>
				<p class="uk-text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<ul class="uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-3" id="socialmedialinks">
					<li class="uk-text-center">
						<a class="uk-container-center" href="#"><i class="uk-icon-hover uk-icon-large uk-icon-facebook-square"></i></a>
					</li>
					<li class="uk-text-center">
						<a class="uk-container-center" href="#"><i class="uk-icon-hover uk-icon-large uk-icon-linkedin-square"></i></a>
					</li>
					<li class="uk-text-center">
						<a class="uk-container-center" href="#"><i class="uk-icon-hover uk-icon-large uk-icon-github-square"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- About Me Section end -->

	<!-- Skills Section start-->
	<div class="uk-block uk-block-primary uk-contrast" id="skills">
		<div class="uk-container uk-container-center">
			<div class="title-icon"></div>
			<h2 class="uk-h1 uk-text-center">Skills</h2>
			<p class="skill-description">a description of my skills</p>
			<div class="tm-skill-bar">
				<div id="myBar" class="tm-skill-meter">
					<p class="tm-skill-name">JAVA</p>
				</div>
			</div>
			<div class="tm-skill-bar">
				<div class="tm-skill-meter">
					<p class="tm-skill-name">HTML CSS</p>
				</div>
			</div>
			<div class="tm-skill-bar">
				<div class="tm-skill-meter">
					<p class="tm-skill-name">JAVASCRIPT</p>
				</div>
			</div>
			<div class="tm-skill-bar">
				<div class="tm-skill-meter">
					<p class="tm-skill-name">R</p>
				</div>
			</div>
			<div class="tm-skill-bar">
				<div class="tm-skill-meter">
					<p class="tm-skill-name">PYTHON</p>
				</div>
			</div>
			<div class="tm-skill-bar">
				<div class="tm-skill-meter">
					<p class="tm-skill-name">SQL</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Skills Section end -->

	<!-- Projects Section start -->
	<div class="uk-block">
		<div class="uk-container uk-container-center">
			<div class="title-icon"></div>
			<h2 class="uk-h1 uk-text-center">Projects</h2>
			<div class="uk-grid">
				<div class="uk-width-medium-1-3">
					<figure class="uk-overlay uk-overlay-hover">
					    <img class="uk-overlay-spin" src="/images/packages/package-4.png">
					    <a href="#"><figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center">
					        <div>
					        	<p>Pong</p>
					        	<div class="tm-divider-icon"><div class="tm-divider-shape"></div></div>
					        	<p>September 13, 2012</p>
					        </div>
					    </figcaption></a>
					</figure>
				</div>
				<div class="uk-width-medium-1-3">
					<figure class="uk-overlay uk-overlay-hover">
					    <img class="uk-overlay-spin" src="/images/packages/package-1.png">
					    <a href="#"><figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center">
					        <div>
					        	<p>Pong</p>
					        	<div class="tm-divider-icon"><div class="tm-divider-shape"></div></div>
					        	<p>Completion Date</p>
					        </div>
					    </figcaption></a>
					</figure>
				</div>
				<div class="uk-width-medium-1-3">
					<img src="/images/packages/package-1.png">
				</div>
			</div>

			<div class="uk-grid">
				<div class="uk-width-medium-1-3">
					<img src="/images/packages/package-4.png">
				</div>
				<div class="uk-width-medium-1-3">
					<img src="/images/packages/package-1.png">
				</div>
				<div class="uk-width-medium-1-3">
					<img src="/images/packages/package-1.png">
				</div>
			</div>

			<div class="uk-text-center tm-divider-showmore"><a class="showmorebut">Show More</a></div>
		</div>
	</div>
	<!-- Projects Section end -->

	<!-- Blog Section start -->
	<div class="uk-block" id="blog">
		<div class="uk-container uk-container-center">
			<h2 class="uk-h1 uk-text-center">Blog</h2>
			
				<div data-uk-grid="{gutter: 20}">
	                <article class="uk-width-medium-1-3 uk-article">
	                	<div class="uk-panel uk-panel-box">
	                		<div class="uk-panel-teaser">
	                			<img src="/images/blog/news1.jpg">
	                		</div>
	                		<h1 class="uk-article-title">Post 1</h1>
	                		<div class="uk-article-meta">
	                			<i class="uk-icon-user"> Calvin Chan</i>
	                			<i class="uk-icon-tags"> Lifestyle</i>
	                			<i class="uk-icon-comments"> 0 Comments</i>
	                		</div>
	                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                		<a href="#">Read More</a>
	                	</div>
	                </article>
	                <div class="uk-width-medium-1-3"><div class="uk-panel-box">2</div></div>
	                <div class="uk-width-medium-1-3"><div class="uk-panel-box">2</div></div>       
	            </div>
	        <div class="uk-text-center tm-divider-showmore"><a class="showmorebut2">Show More</a></div>
		</div>
	</div>
	<!-- Blog Section end -->

	<!-- Contact Section start -->
	<div class="uk-block" id="blog">
		<div class="uk-container uk-container-center">
			<h2 class="uk-h1 uk-text-center">Contact Me</h2>
			<div class="uk-form-row">
				<input class="uk-form-large uk-form-width-large" type="text" placeholder="Name"> <span class="uk-form-help-inline">
			</div>
			<div class="uk-form-row">
				<input class="uk-form-large uk-form-width-large" type="text" placeholder="Email"> <span class="uk-form-help-inline">
			</div>
			<div class="uk-form-row">
    			<textarea class="uk-form-large uk-form-width-large" cols="" rows="" placeholder="Message Contents"></textarea>
			</div>
			<button class="uk-button">Send Message</button>
		</div>
	</div>
	<!-- Contact Section end -->

	<footer class="tm-footer uk-block uk-block-secondary uk-contrast">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-medium-1-2 uk-text-center-small">
					Follow Us:
					<a href="#"><i class="uk-icon-twitter"></i></a>
					<a href="#"><i class="uk-icon-facebook"></i></a> 
					<a href="#"><i class="uk-icon-youtube-play"></i></a> 
				</div>
				<div class="uk-width-medium-1-2 uk-text-right uk-text-center-small">
					&copy; Made with love and passion
				</div>
			</div>
		</div>
	</footer>

	<!-- link to JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- link to uikit js -->
	<script type="text/javascript" src="/uikit-2.27.4/js/uikit.min.js"></script>
	<!-- link to slideshow js -->
	<script type="text/javascript" src="/uikit-2.27.4/js/components/slideshow.min.js"></script>
	<!-- link to grid js -->
	<script type="text/javascript" src="uikit-2.27.4/js/components/grid.min.js"></script>
	<!-- link to custom js -->
	<script type="text/javascript" src="custom.js"></script>
	
</html>