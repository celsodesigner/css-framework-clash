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

<header>
    <section id="contact-bar-header">
        <div class="contact-bar grid grid-pad">
            <ul class="col-1-1">
                <li class="adress"><i class="icon icon-home"></i><span>Rua Geraldo Lopes da Silva, 50 - Mantiqueira - BH/MG</span></li>
                <li class="phone"><i class="icon icon-phone"></i><span>(31) 3077-2141 | 8602-6967 | 9386-1225</span></li>
                <li class="email"><i class="fa fa-envelope"></i><span>contato@clashdesign.com.br</span></li>
            </ul>
        </div>
    </section>

	<div class="grid grid-pad" style="margin-top:-15px;">
    
    	<div class="col-2-12">
            <a href="index.php" class="logo" id="top" data-scroll><img src="images/logo-header.png" width="150" alt="Logo" /></a>
		</div>     
               
    	<div class="col-9-12">
            <?php include('fixed-menu.php');?>
        </div>
        
	</div>    
</header>

<!-- TITLE PAGE -->
<div id="title-page">
	<div class="title-page grid grid-pad">
		<div class="col-1-1">    
            <h1></h1>
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
            <a href="">Contato</a> »
        	<span>Página Atual</span>
        </div>
    </div>
</section>

<!-- CONTENT/SIDEBAR -->
<section id="content-sidebar">
     <div class="grid grid-pad">
     	<div class="content col-9-12">
            <h1>Content</h1>
            <hr class="line-style-gradient">
        
        	<!-- PARÁGRAFOS -->
            <article class="paragraph">
                <h2>Heading (h2)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue eros vitae lacus fermentum dictum. Phasellus sed purus eu leo facilisis egestas ut ac lectus. Vivamus suscipit, turpis id accumsan pellentesque, mauris orci auctor nibh, nec mattis nisi lectus vitae eros. Cras quis tortor ligula. Vestibulum scelerisque massa vel justo lobortis bibendum.</p>
                <p>Nam tincidunt tincidunt quam, nec ultricies felis feugiat id. Duis imperdiet lacinia nunc nec vehicula. Integer bibendum at elit non porta. Maecenas pretium magna ut nulla ullamcorper suscipit nec id urna. Sed volutpat vehicula turpis, et aliquam nulla.</p>
                <h3>Heading (h3)</h3>
                <p>Sed vitae placerat urna. Ut efficitur, urna luctus ultricies ultricies, felis justo accumsan nisi, et convallis orci diam dapibus justo. Maecenas tempor condimentum mi eu tempus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec eget imperdiet velit, ut convallis orci.</p>
                <h4>Heading (h4)</h4>
                <p>Praesent aliquet aliquet turpis sed cursus. Suspendisse quis mi elit. Sed pharetra nisl vel nulla commodo aliquam. Pellentesque gravida at diam et sollicitudin. Cras pellentesque auctor nulla, vitae pulvinar dui sagittis at. Nullam vitae dui ut est pellentesque blandit. Duis euismod mi vel quam consequat, quis facilisis risus euismod. Sed vel bibendum est, a feugiat arcu.</p>
                <h5>Heading (h5)</h5>
                <p>Ut in hendrerit neque. Aliquam in neque non risus eleifend malesuada. Sed vestibulum dolor vitae libero ornare, sed facilisis est hendrerit. Nam vitae odio et felis congue bibendum a ut nulla. Donec pharetra dignissim eros eu maximus.</p>
                <h6>Heading (h6)</h6>
                <p><strong>strong</strong> <b>bold</b> <i>italic</i> <em>emphasis</em></p>
            </article>
                    
            <!-- VIDEO CONTAINER -->
            <article class="videos">
                <h1>Vídeos</h1>
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
                
            </article>
            
            <div class="clear"></div>
             
            <!-- SHADOWBOX -->       
            <article class="shadowbox">
                <h1>Shadowbox</h1>
                <hr class="line-style-gradient">
                
                <div class="image-shadowbox col-1-2">
                    <div class="fade">
                        <a class="rollover" href="images/shadowbox.jpg" title="Imagem Shadowbox" rel="shadowbox">
                            <figure class="cube">
                                <img src="images/thumb-shadowbox.jpg" width="420" class="front" alt="Thumb" title="Título da imagem">
                                <img src="images/thumb-shadowbox-hover.jpg" width="420" class="back" alt="Thumb Hover" title="Título da imagem">
                            </figure>
                        </a>
                    </div>
                </div>
        
                <div class="image-shadowbox col-1-2">
                    <div class="fade">
                        <a class="rollover" href="images/shadowbox.jpg" title="Imagem Shadowbox" rel="shadowbox">
                            <figure class="cube">
                                <img src="images/thumb-shadowbox.jpg" width="420" class="front" alt="Thumb" title="Título da imagem">
                                <img src="images/thumb-shadowbox-hover.jpg" width="420" class="back" alt="Thumb Hover" title="Título da imagem">
                            </figure>
                        </a>
                    </div>
                </div>
        
                <div class="video-shadowbox col-1-1">
                    <div class="fade">
                        <a href="http://www.youtube.com/v/Web6izcx3UY&hl=pt_BR&fs=1&amp;rel=0&amp;autoplay=1" class="rollover" rel="shadowbox;width=800;height=450" title="">
                            <figure class="cube">
                                <img src="images/thumbs-shadowbox-video.jpg" width="845" class="front" alt="Thumb" title="Título da imagem">
                                <img src="images/thumbs-shadowbox-video-hover.jpg" width="845" class="back" alt="Thumb Hover" title="Título da imagem">
                            </figure>
                        </a>
                    </div>
                </div>
        
            </article>
            
            <div class="clear"></div>
            
            <div class="spacer40"></div>
            
            <!-- ACCORDION EFFECT -->
            <div class="accordion-effect">
                <h1>Accordion Effect</h1>
                <hr class="line-style-gradient">
                <div class="spacer10"></div>
                <div class="accordion-list">
                    <div class="accordion" id="nav-section1">1. Maecenas efficitur nisi sit amet eleifend finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<span></span></div>
                    <ul>
                        <li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis malesuada ipsum. Vivamus consectetur pulvinar neque, ut mattis massa consectetur sed. Donec lorem mauris, sagittis eget sodales at, viverra vitae diam. Sed vitae enim quis tortor gravida consequat. Mauris elementum semper nibh eget dapibus.</a></li>
                    </ul>
                    
                    <div class="accordion" id="nav-section2">2. Cras laoreet enim vitae tempus vestibulum.<span></span></div>
                    <ul>
                        <li><a href="">Phasellus tempus risus quis ipsum facilisis, at volutpat justo sagittis. Phasellus dictum eu ante at eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit, odio eu lacinia consectetur, magna est rhoncus lectus, posuere posuere est nisi vitae nibh.</a></li>
                    </ul>
                    
                    <div class="accordion" id="nav-section3">2. Cras laoreet enim vitae tempus vestibulum.<span></span></div>
                    <ul>
                        <li><a href="">Phasellus tempus risus quis ipsum facilisis, at volutpat justo sagittis. Phasellus dictum eu ante at eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit, odio eu lacinia consectetur, magna est rhoncus lectus, posuere posuere est nisi vitae nibh.</a></li>
                    </ul>
                    
                    <div class="accordion" id="nav-section4">2. Cras laoreet enim vitae tempus vestibulum.<span></span></div>
                    <ul>
                        <li><a href="">Phasellus tempus risus quis ipsum facilisis, at volutpat justo sagittis. Phasellus dictum eu ante at eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit, odio eu lacinia consectetur, magna est rhoncus lectus, posuere posuere est nisi vitae nibh.</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="clear"></div>
            
            <!-- TABS -->
            <div id="tabs">
                <h1>TABS</h1>
                <hr class="line-style-gradient">
                <div class="tabs">
                     
                    <input type="radio" name="tabs" id="tab1" checked >
                    <label for="tab1">
                        <i class="fa fa-html5"></i><span>HTML5</span>
                    </label>
                 
                    <input type="radio" name="tabs" id="tab2">
                    <label for="tab2">
                        <i class="fa fa-css3"></i><span>CSS3</span>
                    </label>
                    
                    <input type="radio" name="tabs" id="tab3">
                    <label for="tab3">
                        <i class="fa fa-code"></i><span>jQuery</span>
                    </label>
                 
                    <div id="tab-content1" class="tab-content">
                        <h3>HTML5 Snippets</h3>
                        <p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It was finalized, and published, on 28 October 2014 by the World Wide Web Consortium (W3C). This is the fifth revision of the HTML standard since the inception of the World Wide Web.</p>
                    </div>
                    <div id="tab-content2" class="tab-content">
                        <h3>CSS3 Snippets</h3>
                        <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the look and formatting of a document written in a markup language.</p>
                    </div>
                    <div id="tab-content3" class="tab-content">
                        <h3>jQuery</h3>
                        <p>jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.</p>
                    </div>
                </div>
            </div>
            
            <div class="clear"></div>
            
        </div>
        
        <aside class="sidebar col-3-12">
        	<h1>Sidebar</h1>
            <hr class="line-style-gradient">
        
            <nav class="widget-nav">
                <h3>Widget Nav</h3>
                <ul>
                    <li><a href="" title=""><i class="fa fa-angle-double-right"></i>Item 01 da lista</a></li>
                    <div class="dotted-line"></div>
                    <li><a href="" title=""><i class="fa fa-angle-double-right"></i>Item 02 da lista</a></li>
                    <div class="dotted-line"></div>
                    <li><a href="" title=""><i class="fa fa-angle-double-right"></i>Item 03 da lista</a></li>
                    <div class="dotted-line"></div>
                    <li><a href="" title=""><i class="fa fa-angle-double-right"></i>Item 04 da lista</a></li>
                    <div class="dotted-line"></div>
                    <li><a href="" title=""><i class="fa fa-angle-double-right"></i>Item 05 da lista</a></li>
                </ul>
            </nav>
            
            <nav class="widget-nav-bg-color">
                <h3>Widget Nav BG</h3>
                <ul>
                    <li><a href="" title=""><i class="fa fa-chevron-right"></i>Item 01 da lista</a></li>
                    <li><a href="" title=""><i class="fa fa-chevron-right"></i>Item 02 da lista</a></li>
                    <li><a href="" title=""><i class="fa fa-chevron-right"></i>Item 03 da lista</a></li>
                    <li><a href="" title=""><i class="fa fa-chevron-right"></i>Item 04 da lista</a></li>
                    <li><a href="" title=""><i class="fa fa-chevron-right"></i>Item 05 da lista</a></li>
                </ul>
            </nav>
            
            <nav class="widget-nav-simple">
                <h3>Widget Nav Simple</h3>
                <ul>
                    <li><a href="" title="">Item 01 da lista</a></li>
                    <li><a href="" title="">Item 02 da lista</a></li>
                    <li><a href="" title="">Item 03 da lista</a></li>
                    <li><a href="" title="">Item 04 da lista</a></li>
                    <li><a href="" title="">Item 05 da lista</a></li>
                </ul>
            </nav>
            
            <nav class="widget-nav-border">
                <h3>Widget Nav Border</h3>
                <ul>
                    <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                    <li><a href=""><i class="fa fa-book"></i>Library</a></li>
                    <li><a href=""><i class="fa fa-pencil"></i>Applications</a></li>
                    <li><a href=""><i class="icon icon-IcoMoon"></i>Icomoon</a></li>
                    <li><a href=""><i class="icon icon-android"></i>Android</a></li>
                    <li style="border-bottom:none;"><a href=""><i class="fa fa-cog"></i>Settings</a></li>
                </ul>
            </nav>
            
            <nav class="widget-nav-shadow">
                <h3>Widget Nav Shadow</h3>
                <ul>
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Library</a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Applications</a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Icomoon</a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Android</a></li>
                    <li style="border-bottom:none;"><a href=""><i class="fa fa-angle-double-right"></i>Settings</a></li>
                </ul>
            </nav>
            
            <nav class="accordion-effect">
                <h3>Nav Accordion</h3>
                <div class="accordion-list">
                    <div class="accordion" id="nav-section1">Item 01 da Lista<span></span></div>
                    <ul>
                        <li><a href="">Sub Item</a></li>
                        <li><a href="">Sub Item</a></li>
                        <li><a href="">Sub Item</a></li>
                        <li><a href="">Sub Item</a></li>
                    </ul>
                    <div class="accordion" id="nav-section2">Item 02 da Lista<span></span></div>
                    <ul><li><a href="">Sub Item</a></li></ul>
                    <div class="accordion" id="nav-section3">Item 03 da Lista<span></span></div>
                    <ul><li><a href="">Sub Item</a></li></ul>
                    <div class="accordion" id="nav-section4">Item 04 da Lista<span></span></div>
                    <ul><li><a href="">Sub Item</a></li></ul>
                    <div class="accordion" id="nav-section4">Item 05 da Lista<span></span></div>
                    <ul><li><a href="">Sub Item</a></li></ul>
                </div>
            </nav>
            
        </aside>
	</div>   
</section>

<!-- TITLE LINES -->
<section id="line-styles">
	<div class="grid grid-pad"> 
        <h1>Line Styles</h1>
        <hr class="line-style-gradient">
        
        <h6>Wecanfly</h6>
        <div class="line-style-wecanfly"><hr class="line1"><hr class="line2"></div>
    
        <h6>Clash</h6>
        <div class="line-style-clash"><hr class="line1"><hr class="line2"></div>
    
        <h6>Gradient</h6>
        <hr class="line-style-gradient">
        
        <h6>Diagonal</h6>
        <hr class="line-style-diagonal">
    
        <h6>Zig Zag</h6>
        <hr class="line-style-zigzag">
        
        <h6>Diamond</h6>
        <hr class="line-style-diamond">
        
        <h6>Glyph</h6>
        <hr class="line-style-glyph">
        
        <h6>Horizontal</h6>
        <hr class="horizontal-line">
        
        <h6>Dashed Line</h6>
        <hr class="dashed-line">
        
        <h6>Dotted Line</h6>
        <hr class="dotted-line">
        
    </div>
</section>


<!-- BUTTONS -->
<section id="buttons">
    <div class="grid grid-pad">
        <h1>Buttons</h1>
        <hr class="line-style-gradient">
        <div class="col-1-4">
            <h6>Default Button</h6>
            <div class="btn-std"><a href="" title="Defaul Button">Button</a></div>
        </div>
        <div class="col-1-4">
            <h6>Border Button</h6>
            <div class="btn-border"><a href="" title="Border Button">Button</a></div>
        </div>
        <div class="col-1-4">
            <h6>Round Button</h6>
            <div class="btn-std btn-round"><a href="" title="Round Button">Button</a></div>
        </div>
        
        <div class="col-1-4">
            <h6>Border Round Button</h6>
            <div class="btn-border btn-round"><a href="" title="Border Round Button">Button</a></div>
        </div>
        <div class="col-1-4">
            <h6>Large Round Button</h6>
            <div class="btn-std btn-round btn-large"><a href="" title="Large Round Button">Button</a></div>
        </div>
        <div class="col-1-4">
            <h6>Large Border Round Button</h6>
            <div class="btn-border btn-round btn-large"><a href="" title="Large Border Round Button">Button</a></div>
        </div>
        <div class="col-1-4">
            <h6>Large Border Round Icon Button</h6>
            <div class="btn-border btn-round btn-large"><a href="" title="Large Border Round Icon Button"><i class="icon icon-home"></i>Button</a></div>
        </div>
        <div class="col-1-4">
            <h6>Large Round Icon Button</h6>
            <div class="btn-std btn-round btn-large"><a href="" title="Large Round Icon Button"><i class="icon icon-home"></i>Button</a></div>
        </div>
	</div>  
</section>    

<!-- CALL TO ACTION -->
<section id="call-to-action">
	<div class="call-to-action grid grid-pad">
        <div class="col-9-12">
        	<h3>Call To Action</h3>
            <p>Sed tempus orci tempor ligula convallis, vitae semper sem vulputate. Nunc vitae ullamcorper augue. Morbi non metus scelerisque felis pretium aliquam sit amet a turpis. Integer sagittis pretium efficitur.</p>
        </div>
        <div class="col-3-12">
        	<div class="btn-border btn-round btn-large"><a href="" title="Portfólio">Portfólio</a></div>
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
        	<div class="button-cta">
                <div class="btn-std btn-round btn-large" style="margin-top:60px;"><a href="" title="Portfólio">Portfólio</a></div>
            </div>
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
                    <li class="phone"><i class="icon icon-phone"></i><span>+55 31 3077-2141</span></li>
                    <div class="dotted-line"></div>
                    <li class="mobile"><i class="icon icon-mobile2"></i><span>+55 31 8602-6967 / 9386-1225</span></li>
                    <div class="dotted-line"></div>
                    <li class="email"><i class="fa fa-envelope"></i><span>contato@clashdesign.com.br</span></li>
                    <div class="dotted-line"></div>
                    <li class="adress"><i class="icon icon-home"></i><span>Rua Geraldo Lopes da Silva, 50 - Mantiqueira</span></li>
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
            <li class="adress"><i class="icon icon-home"></i><span>Rua Geraldo Lopes da Silva, 50 - Mantiqueira - BH/MG</span></li>
            <li class="phone"><i class="icon icon-phone"></i><span>(31) 3077-2141 | 8602-6967 | 9386-1225</span></li>
            <li class="email"><i class="fa fa-envelope"></i><span>contato@clashdesign.com.br</span></li>
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
                <li><i class="icon icon-phone"></i><span>31 3077-2141</span></li>
                <li><i class="icon icon-mobile2"></i><span>31 8602-6967  |  31 9386-1225</span></li>
                <li><i class="fa fa-envelope"></i><span>contato@clashdesign.com.br</span></li>
                <li><i class="icon icon-home"></i><span>Rua Geraldo Lopes da Silva, 50 - Mantiqueira - BH</span></li>
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
        
        <div class="developer fade col-1-2">
          <a class="rollover" href="http://www.clashdesign.com.br" target="_blank">
            <figure class="cube">
              <img src="images/logo-developer.png" class="front" alt="">
              <img src="images/logo-developer-hover.png" class="back" alt="">
            </figure>
          </a>
        </div>        
        
    </div>
</section>

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
