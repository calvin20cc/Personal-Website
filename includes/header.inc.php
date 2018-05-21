<!-- header -->
<nav class="uk-navbar uk-fixed-navigation">
	<div class="uk-container uk-container-center">
	    <a href="" class="uk-navbar-brand uk-hidden-small">
	    	<img src="/images/logo.png" width="100px" height="60px">
	    </a>
	    <div class="uk-navbar-flip uk-hidden-small">
	    	<ul class="uk-navbar-nav uk-hidden-small" data-uk-scrollspy-nav="{closest:'li', smoothscroll:true}">
	    		<li class="<?php echo $page_id == 1 ? 'uk-active' : ''?>"><a href="/">Home</a></li>
				<li class="<?php echo $page_id == 2 ? 'uk-active' : ''?>"><a href="aboutme.php">About Me</a></li>
				<li class="<?php echo $page_id == 3 ? 'uk-active' : ''?>"><a href="">Skills</a></li>
				<li class="<?php echo $page_id == 4 ? 'uk-active' : ''?>"><a href="">Projects</a></li>
				<li class="<?php echo $page_id == 5 ? 'uk-active' : ''?>"><a href="">Blog</a></li>
				<li class="<?php echo $page_id == 6 ? 'uk-active' : ''?>"><a href="">Contact</a></li>
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