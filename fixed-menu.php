<link rel="stylesheet" href="css/fixed-menu.css">
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css">
<![endif]-->
<script type="text/javascript" src="js/fixed-responsive-nav/responsive-nav.js"></script>

<nav class="nav-collapse">
    <ul>
        <li class="menu-item active"><a href="#top" data-scroll>Home</a></li>
        <li class="menu-item"><a href="#content" data-scroll>Texto</a></li>
        <li class="menu-item"><a href="#buttons" data-scroll>Buttons</a></li>
        <li class="menu-item"><a href="#newsletter" data-scroll>Newsletter</a></li>
        <li class="menu-item"><a href="#video-container" data-scroll>Video Container</a></li>
        <li class="menu-item"><a href="#contact-form" data-scroll>Contato</a></li>
        <li class="menu-item"><a href="#google-map" data-scroll>Mapa</a></li>
    </ul>
</nav>

<script src="js/fixed-responsive-nav/fastclick.js"></script>
<script src="js/fixed-responsive-nav/scroll.js"></script>
<script src="js/fixed-responsive-nav/fixed-responsive-nav.js"></script>

<script>
	$(document).ready(function() {
		$('li').click(function() {
			$('li.active').removeClass("active");
			$(this).addClass("active");
		});
	});
</script>
