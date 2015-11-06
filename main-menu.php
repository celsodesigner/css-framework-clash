<link rel="stylesheet" href="css/fixed-menu.css">
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css">
<![endif]-->
<script src="js/responsive-nav.js"></script>

<header>
    <section id="contact-bar-header">
        <div class="grid grid-pad">
            <ul class="col-1-1">
                <li class="adress"><span>Rua Geraldo Lopes da Silva, 50 - Mantiqueira - BH/MG</span></li>
                <li class="phone"><span>(31) 3077-2141 | 8602-6967 | 9386-1225</span></li>
                <li class="email"><span>contato@clashdesign.com.br</span></li>
            </ul>
        </div>
    </section>

	<div class="grid grid-pad" style="margin-top:-15px;">
    	<div class="col-2-12">
            <a href="index.php" class="logo" id="top" data-scroll><img src="images/logo-header.png" width="150" alt="Logo" /></a>
		</div>            
    	<div class="col-9-12">
            <nav class="nav-collapse">
                <ul>
                  <li class="menu-item active"><a href="#top" data-scroll>Home</a></li>
                  <li class="menu-item"><a href="#paragrafo" data-scroll>Paragrafos</a></li>
                  <li class="menu-item"><a href="#call-to-action" data-scroll>Call To Action</a></li>
                  <li class="menu-item"><a href="#shadowbox-sidebar" data-scroll>Shadowbox-Sidebar</a></li>
                  <li class="menu-item"><a href="#contact-form" data-scroll>Contato</a></li>
                </ul>
            </nav>
        </div>
	</div>    
</header>

<script src="js/fastclick.js"></script>
<script src="js/scroll.js"></script>
<script src="js/fixed-responsive-nav.js"></script>

<script>
	$(document).ready(function() {
		$('li').click(function() {
			$('li.active').removeClass("active");
			$(this).addClass("active");
		});
	});
</script>
