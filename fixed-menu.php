<link rel="stylesheet" href="css/fixed-menu.css">
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css">
<![endif]-->
<script type="text/javascript" src="js/fixed-responsive-nav/responsive-nav.js"></script>

<nav class="nav-collapse">
    <ul>
      <li class="menu-item active"><a href="#top" data-scroll>Home</a></li>
      <li class="menu-item"><a href="#line-styles" data-scroll>Line Styles</a></li>
      <li class="menu-item"><a href="#paragrafo" data-scroll>Paragrafos</a></li>
      <li class="menu-item"><a href="#call-to-action" data-scroll>Call To Action</a></li>
      <li class="menu-item"><a href="#newsletter" data-scroll>Newsletter</a></li>
      <li class="menu-item"><a href="#accordion-effect" data-scroll>Accordion</a></li>
      <li class="menu-item"><a href="#shadowbox-sidebar" data-scroll>Shadowbox-Sidebar</a></li>
      <li class="menu-item"><a href="#contact-form" data-scroll>Contato</a></li>
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
