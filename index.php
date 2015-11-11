<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include('head.php');?>
<meta name="description" content="Descrição do site ou da página - Terceira linha da busca do Google." />
<title>Framework CSS Clash</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body itemscope itemtype="http://schema.org/WebPage">

<!-- FACEBOOK SOCIAL PLUGINS -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=442244982542522";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php include('header.php');?>

<!-- TITLE PAGE -->
<div id="title-page">
	<div class="title-page grid grid-pad">
		<div class="col-1-1">    
            <h1>Página Inicial</h1>
        </div>
    </div>
</div>

<!-- BREADCRUMB -->
<section id="breadcrumb">
	<div class="breadcrumb grid grid-pad">
        <div itemprop="breadcrumb" class="col-1-1">
            <a href="">Parágrafos</a> »
            <a href="">Call To Action</a> »
            <a href="">Shadowbox - Sidebar</a> »
            <a href="">Contato</a>  »
        	<span>Página Atual</span>
        </div>
    </div>
</section>

<!-- HEADING -->
<section id="heading">
	<div class="heading grid grid-pad">
        <div class="col-1-1">
            <h1>Heading</h1>
            <hr class="line-style-gradient">
            <h1>h1heading</h1>
            <h2>h2heading</h2>
            <h3>h3heading</h3>
            <h4>h4heading</h4>
            <h5>h5heading</h5>
        </div>
    </div>
</section>

<!-- TITLE LINES -->
<section id="line-styles">
	<div class="grid grid-pad"> 
        <h1>Line Styles</h1>
        <hr class="line-style-gradient">
        
        <h5>Wecanfly</h5>
        <div class="line-style-wecanfly"><hr class="line1"><hr class="line2"></div>
    
        <h5>Clash</h5>
        <div class="line-style-clash"><hr class="line1"><hr class="line2"></div>
    
        <h5>Gradient</h5>
        <hr class="line-style-gradient">
        
        <h5>Diagonal</h5>
        <hr class="line-style-diagonal">
    
        <h5>Zig Zag</h5>
        <hr class="line-style-zigzag">
        
        <h5>Diamond</h5>
        <hr class="line-style-diamond">
        
        <h5>Glyph</h5>
        <hr class="line-style-glyph">
        
        <h5>Horizontal</h5>
        <hr class="horizontal-line">
        
        <h5>Dashed Line</h5>
        <hr class="dashed-line">
        
        <h5>Dotted Line</h5>
        <hr class="dotted-line">
        
    </div>
</section>

<!-- PARAGRAFOS -->
<section id="paragrafo">
    <div class="paragrafo grid grid-pad">
    	<div class="col-1-1">
            <h1>Parágrafo</h1>
            <hr class="line-style-gradient">
            <p><strong>strong</strong> <b>bold</b> <i>italic</i> <em>emphasis</em></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue eros vitae lacus fermentum dictum. Phasellus sed purus eu leo facilisis egestas ut ac lectus. Vivamus suscipit, turpis id accumsan pellentesque, mauris orci auctor nibh, nec mattis nisi lectus vitae eros. Cras quis tortor ligula. Vestibulum scelerisque massa vel justo lobortis bibendum.</p>
        </div>
    </div>
</section>

<!-- BUTTONS -->
<section id="buttons">
    <div class="grid grid-pad">
        <h1>Buttons</h1>
        <hr class="line-style-gradient">
        <div class="col-1-3">
            <p>Default Button</p>
            <div class="btn-std"><a href="" title="Defaul Button">Button</a></div>
        </div>
        <div class="col-1-3">
            <p>Border Button</p>
            <div class="btn-border"><a href="" title="Border Button">Button</a></div>
        </div>
        <div class="col-1-3">
            <p>Round Button</p>
            <div class="btn-std btn-round"><a href="" title="Round Button">Button</a></div>
        </div>
        
        <div class="col-1-3">
            <p>Border Round Button</p>
            <div class="btn-border btn-round"><a href="" title="Border Round Button">Button</a></div>
        </div>
        <div class="col-1-3">
            <p>Large Round Button</p>
            <div class="btn-std btn-round btn-large"><a href="" title="Large Round Button">Button</a></div>
        </div>
        <div class="col-1-3">
            <p>Large Border Round Button</p>
            <div class="btn-border btn-round btn-large"><a href="" title="Large Border Round Button">Button</a></div>
        </div>
	</div>  
</section>    

<!-- TOGGLE -->
<div id="toggle-effect">
	<div class="grid grid-pad">
        <div class="toggle-effect col-1-1">
            <h1>Toggle Effect</h1>
            <hr class="line-style-gradient">
            
     		<div class="content-toggle">       
                <div class="faq-question toggle-button" alt="toggle1">1. Donec ut dolor enim. Ut accumsan nisi mi, risus aliquam. Mauris hendrerit ex in commodo tincidunt.</div>
                <div id="toggle1" class="toggle-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper urna nulla, non rhoncus urna elementum eu. Quisque sodales in purus nec blandit. Ut et dolor scelerisque risus sodales volutpat. Nam at blandit est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla fringilla rutrum arcu, nec tincidunt massa imperdiet eget. Nam justo justo, pharetra vitae tortor eget, fringilla malesuada ex. In hac habitasse platea dictumst. Etiam ac eros augue. Nam id orci ligula. Vestibulum in posuere nulla, non aliquam metus. Sed dignissim, arcu quis gravida gravida, tortor sem tristique lectus, at dictum leo est suscipit nisl. Donec leo purus, rhoncus ut mattis non, elementum nec dolor.</p>
                </div>
            </div>
            
     		<div class="content-toggle">       
                <div class="faq-question toggle-button" alt="toggle2">2. ulla fringilla rutrum arcu, nec tincidunt massa imperdiet eget. Nam justo justo, pharetra vitae tortor eget.</div>
                <div id="toggle2" class="toggle-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper urna nulla, non rhoncus urna elementum eu. Quisque sodales in purus nec blandit. Ut et dolor scelerisque risus sodales volutpat. Nam at blandit est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla fringilla rutrum arcu, nec tincidunt massa imperdiet eget. Nam justo justo, pharetra vitae tortor eget, fringilla malesuada ex. In hac habitasse platea dictumst. Etiam ac eros augue. Nam id orci ligula. Vestibulum in posuere nulla, non aliquam metus. Sed dignissim, arcu quis gravida gravida, tortor sem tristique lectus, at dictum leo est suscipit nisl. Donec leo purus, rhoncus ut mattis non, elementum nec dolor.</p>
                </div>
            </div>
            
     		<div class="content-toggle">       
                <div class="faq-question toggle-button" alt="toggle3">3. Quisque sodales in purus nec blandit. Ut et dolor scelerisque risus sodales volutpat.</div>
                <div id="toggle3" class="toggle-content">
                    <p>Nulla fringilla rutrum arcu, nec tincidunt massa imperdiet eget. Nam justo justo, pharetra vitae tortor eget, fringilla malesuada ex. In hac habitasse platea dictumst. Etiam ac eros augue. Nam id orci ligula. Vestibulum in posuere nulla, non aliquam metus. Sed dignissim, arcu quis gravida gravida, tortor sem tristique lectus, at dictum leo est suscipit nisl. Donec leo purus, rhoncus ut mattis non, elementum nec dolor.</p>
                </div>
            </div>
            
        </div>
    </div>
</div>

 

<!-- CALL TO ACTION -->
<section id="call-to-action">
	<div class="call-to-action grid grid-pad">
        <div class="col-9-12">
        	<h3>Call To Action</h3>
            <p>Sed tempus orci tempor ligula convallis, vitae semper sem vulputate. Nunc vitae ullamcorper augue. Morbi non metus scelerisque felis pretium aliquam sit amet a turpis. Integer sagittis pretium efficitur.</p>
        </div>
        <div class="col-3-12">
        	<div class="btn-border btn-round btn-large" style="margin-top:55px;"><a href="" title="Portfólio">Portfólio</a></div>
        </div>
    </div>
</section>
    
<!-- CALL TO ACTION BOXED -->
<section id="call-to-action-boxed">
	<div class="call-to-action-boxed grid grid-pad">
        <div class="col-9-12">
        	<h3>Call To Action Boxed</h3>
            <p>Sed tempus orci tempor ligula convallis, vitae semper sem vulputate. Nunc vitae ullamcorper augue. Morbi non metus scelerisque felis pretium aliquam sit amet a turpis. Integer sagittis pretium efficitur.</p>
        </div>
        <div class="col-3-12">
        	<div class="btn-std btn-round btn-large" style="margin-top:60px;"><a href="" title="Portfólio">Portfólio</a></div>
        </div>
    </div>
</section>

<!-- NEWSLETTER -->
<section id="newsletter">
	<div class="call-to-action grid grid-pad">
    
        <div class="col-7-12">
        	<h3>Newsletter</h3>
            <p>Sed tempus orci tempor ligula convallis, vitae semper sem vulputate. Nunc vitae ullamcorper augue. Morbi non metus scelerisque felis pretium aliquam sit amet a turpis.</p>
        </div>
        
        <div class="col-5-12">
            <form id="subscribe-newsletter" action="" method="get">
                <fieldset>
                    <input type="search" placeholder="digite seu e-mail" class="subscribe-newsletter">
                    <input type="submit" name="subscribe" value= "Inscrever-se" class="button" />
                </fieldset>
            </form>
        </div>
        
    </div>
</section>

<!-- VIDEO CONTAINER -->
<section id="video-container">
	<div class="grid grid-pad">
        <h1>Video Container</h1>
        <hr class="line-style-gradient">
        <div class="col-1-2">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/qM96VCbrUhQ?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <legend>Save The Date - <span>Renata e Flaviano</span></legend>
        </div>
        
        <div class="col-1-2">
            <div class="video-container">
                <iframe src="https://player.vimeo.com/video/116359501?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <legend>Save The Date - <span>Jéssica e Leonardo</span></legend>
        </div>
    </div>
</section>

<!-- SHADOWBOX - SIDEBAR -->
<section id="shadowbox-sidebar">
     <div class="grid grid-pad">
        <h1>Shadowbox - Sidebar</h1>
        <hr class="line-style-gradient">
        <article class="shadowbox col-9-12">
        
            <div class="col-1-2">
                <div class="fade">
                    <a class="rollover" href="images/shadowbox.jpg" title="Imagem Shadowbox" rel="shadowbox">
                        <figure class="cube">
                            <img src="images/thumb-shadowbox.jpg" width="390" class="front" alt="Thumb" title="Título da imagem">
                            <img src="images/thumb-shadowbox-hover.jpg" width="390" class="back" alt="Thumb Hover" title="Título da imagem">
                        </figure>
                    </a>
                </div>
            </div>
    
            <div class="col-1-2">
                <div class="fade">
                    <a class="rollover" href="images/shadowbox.jpg" title="Imagem Shadowbox" rel="shadowbox">
                        <figure class="cube">
                            <img src="images/thumb-shadowbox.jpg" width="390" class="front" alt="Thumb" title="Título da imagem">
                            <img src="images/thumb-shadowbox-hover.jpg" width="390" class="back" alt="Thumb Hover" title="Título da imagem">
                        </figure>
                    </a>
                </div>
            </div>
    
            <div class="col-1-1">
                <div class="fade">
                    <a href="http://www.youtube.com/v/Web6izcx3UY&hl=pt_BR&fs=1&amp;rel=0&amp;autoplay=1" class="rollover" rel="shadowbox;width=800;height=450" title="#">
                        <figure class="cube">
                            <img src="images/thumbs-shadowbox-video.jpg" width="800" class="front" alt="Thumb" title="Título da imagem">
                            <img src="images/thumbs-shadowbox-video-hover.jpg" width="800" class="back" alt="Thumb Hover" title="Título da imagem">
                        </figure>
                    </a>
                </div>
            </div>
    
        </article>
        
        <aside class="sidebar col-3-12">
        
            <nav class="widget-list">
                <h3>Widget List</h3>
                <ul>
                    <li><a href="" title="Item 01 da lista" target="_self">Item 01 da lista</a></li>
                    <div class="dotted-line"></div>
                    <li><a href="" title="Item 02 da lista" target="_self">Item 02 da lista</a></li>
                    <div class="dotted-line"></div>
                    <li><a href="" title="Item 03 da lista" target="_self">Item 03 da lista</a></li>
                    <div class="dotted-line"></div>
                    <li><a href="" title="Item 04 da lista" target="_self">Item 04 da lista</a></li>
                </ul>
            </nav>
            
            <nav class="widget-list-bg-color">
                <h3>Widget List BG</h3>
                <ul>
                    <li><a href="" title="Item 01 da lista" target="_self">Item 01 da lista</a></li>
                    <li><a href="" title="Item 02 da lista" target="_self">Item 02 da lista</a></li>
                    <li><a href="" title="Item 03 da lista" target="_self">Item 03 da lista</a></li>
                    <li><a href="" title="Item 04 da lista" target="_self">Item 04 da lista</a></li>
                </ul>
            </nav>
            
            <nav class="widget-list-simple">
                <h3>Widget List Simple</h3>
                <ul>
                    <li><a href="" title="Item 01 da lista" target="_self">Item 01 da lista</a></li>
                    <li><a href="" title="Item 02 da lista" target="_self">Item 02 da lista</a></li>
                    <li><a href="" title="Item 03 da lista" target="_self">Item 03 da lista</a></li>
                    <li><a href="" title="Item 04 da lista" target="_self">Item 04 da lista</a></li>
                </ul>
            </nav>
            
        </aside>
	</div>   
</section>

<!-- CONTACT-FORM -->
<section id="contact-form">
    <div class="contact-form grid grid-pad">
    	<div class="col-1-1">
            <h1>Contato</h1>
            <hr class="line-style-gradient">
            <p>Se quiser entrar em contato ou solicitar um orçamento, preencha o formulário abaixo que retornaremos em breve.</p>
            <?php include('contact-form.php');?>
        </div>
    </div>
</section>

<!-- CONTACT-FORM/CONTACT-INFO -->
<section id="contact-form-contact-info">
	<div class="grid grid-pad">
        <div class="contact-form">
            <h1>Contact Form e Contact Info</h1>
            <hr class="line-style-gradient">
            <p>Se quiser entrar em contato ou solicitar um orçamento, preencha o formulário abaixo que retornaremos em breve.</p>
            <div class="col-8-12">
                <?php include('contact-form.php');?>
            </div>
        </div>
    
        <nav class="contact-info">
        	<div class="col-4-12">
                <h3>Informações de Contato</h3>
                <ul>
                    <li class="phone"><span>+55 31 3077-2141</span></li>
                    <div class="dotted-line"></div>
                    <li class="mobile"><span>+55 31 8602-6967 / 9386-1225</span></li>
                    <div class="dotted-line"></div>
                    <li class="email"><span>contato@clashdesign.com.br</span></li>
                    <div class="dotted-line"></div>
                    <li class="adress"><span>Rua Geraldo Lopes da Silva, 50 - Mantiqueira</span></li>
                    <div class="dotted-line"></div>
                </ul>
            </div>
        </nav>
    </div>
</section>

<!-- GOOGLE MAP -->
<section id="google-map" class="desaturate">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3754.316070545055!2d-43.981381!3d-19.784191899999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa68f00015c98a1%3A0x4c4ae5521cb62d4b!2sR.+Geraldo+Lopes+da+Silva%2C+50+-+Mantiqueira%2C+Belo+Horizonte+-+MG%2C+31652-310!5e0!3m2!1spt-BR!2sbr!4v1426310216521" width="100%" height="280" frameborder="0" style="border:0"></iframe>
</section>

<!-- CONTACT BAR -->
<section id="contact-bar">
    <div class="contact-bar grid grid-pad">
        <ul class="col-1-1">
            <li class="adress"><span>Rua Geraldo Lopes da Silva, 50 - Mantiqueira - BH/MG</span></li>
            <li class="phone"><span>(31) 3077-2141 | 8602-6967 | 9386-1225</span></li>
            <li class="email"><span>contato@clashdesign.com.br</span></li>
        </ul>
    </div>
</section>

<!-- FOOTER -->
<footer>
	<div class="widget-contact grid grid-pad">
    	<div class="col-1-3">
            <h3>Contato</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam ipsum. Phasellus tempus quis arcu vitae tempor.</p>
            <ul>
                <li style="list-style-image:url(images/icon-phone.png);"><span>31 3077-2141</span></li>
                <li style="list-style-image:url(images/icon-mobile.png);"><span>31 8602-6967  |  31 9386-1225</span></li>
                <li style="list-style-image:url(images/icon-email.png);"><span>contato@clashdesign.com.br</span></li>
                <li style="list-style-image:url(images/icon-adress.png);"><span>Rua Geraldo Lopes da Silva, 50 - Mantiqueira</span></li>
                <li style="list-style-image:url(images/icon-null.png);"><span>Belo Horizonte - MG</span></li>
            </ul>
        </div>
        <div class="col-1-3">
        	<h3>Facebook</h3>
            <div class="fb-page" data-href="https://www.facebook.com/clashdesignmultimidia" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/clashdesignmultimidia"><a href="https://www.facebook.com/clashdesignmultimidia">Clash Design</a></blockquote></div></div>
        </div>
        <div class="col-1-3">
        	<h3>Siga-nos</h3>
            <?php include('social-links.php');?>
            <?php include('social-links2.php');?>
        </div>
    </div>
</footer>

<!-- COPYRIGHT 1 -->
<section id="copyright1">
    <div class="copyright grid grid-pad">
        <div class="col-1-1">
            <div class="copyright">&copy; <?php echo date("Y"); ?> Nome da Empresa  |  Todos os direitos reservados</div>
        </div>
    </div>
</section>

<!-- COPYRIGHT 2 -->
<section id="copyright2">
    <div class="copyright grid grid-pad">
    
        <div class="col-1-2">
            <div class="copyright">&copy; <?php echo date("Y"); ?> Nome da Empresa  |  Todos os direitos reservados</div>
        </div>
        
        <div class="developer col-1-2">
            <span>By&nbsp;&nbsp;&nbsp;</span><a href="http://www.clashdesign.com.br" target="_blank"><img src="images/logo-developer.png" alt="Clash Design"/></a>
        </div>
        
    </div>
</section>

</body>
</html>
