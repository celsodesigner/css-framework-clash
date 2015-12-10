<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include('head.php');?>
<meta name="description" content="Descrição do site ou da página - Terceira linha da busca do Google." />
<title>Clash CSS Framework</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- CLIENT LOGOS -->
<div class="grid grid-pad">
	<div class="col-1-1">

        <div id="owl-example" class="owl-carousel">
            <div class="item"><img src="images/owl1.jpg" alt=""></div>
            <div class="item"><img src="images/owl2.jpg" alt=""></div>
            <div class="item"><img src="images/owl3.jpg" alt=""></div>
            <div class="item"><img src="images/owl4.jpg" alt=""></div>
            <div class="item"><img src="images/owl5.jpg" alt=""></div>
            <div class="item"><img src="images/owl6.jpg" alt=""></div>
            <div class="item"><img src="images/owl7.jpg" alt=""></div>
        </div>

	</div>
</div>


<!-- CLIENT LOGOS -->
<script>
	$(document).ready(function() {
	  $("#owl-example").owlCarousel({
		autoPlay: 3000,
		items : 5,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
	  });
	
	});
</script>


<!-- ACCORDION JQUERY PLUGIN -->
<script type="text/javascript" src="js/jquery.accordion.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.accordion').accordion({
        defaultOpen: 'section1',
        cookieName: 'accordion_nav'
    });
  });
</script>

</body>
</html>
