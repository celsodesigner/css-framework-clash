<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include('head.php');?>
<meta name="description" content="Descrição do site ou da página - Terceira linha da busca do Google." />
<title>Clash CSS Framework</title>
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

    <section id="bar-header">
        <div class="grid grid-pad">
            <div class="contacts col-1-2">
                <div class="phone"><i class="icon icon-phone"></i><span>(31) 3077-2141</span></div>
                <div class="email"><i class="fa fa-envelope"></i><span>contato@clashdesign.com.br</span></div>
            </div>
            
            <div class="col-1-2">
                <?php include('social-links-header.php');?>
            </div>
            
        </div>
    </section>


    <section id="contact-bar-header">
        <div class="contact-bar grid grid-pad">
            <ul class="col-1-1">
                <li class="adress"><i class="icon icon-home"></i><span>Rua Geraldo Lopes da Silva, 50 - Mantiqueira - BH/MG</span></li>
                <li class="phone"><i class="icon icon-phone"></i><span>(31) 3077-2141 | 8602-6967 | 9386-1225</span></li>
                <li class="email"><i class="fa fa-envelope"></i><span>contato@clashdesign.com.br</span></li>
            </ul>
        </div>
    </section>

</header>

<!-- TEMPLATE BLOG -->
<div class="grid grid-pad">
	<div class="blog-post col-9-12">
    
    	<div class="blog-post-preview"><img src="images/image-post.jpg" alt=""></div>
        <h2 class="blog-post-title">Blog Post Title</h2>        
        <div class="blog-post-meta">
            <time class="blog-post-date"><i class="fa fa-clock-o"></i>13 de Dezembro de 2015</time>
            <span class="blog-post-author"><i class="fa fa-user"></i>Celso Ferreira</span>
            <span class="blog-post-category"><i class="fa fa-folder-o"></i>Categoria</span>
            <span class="blog-post-comments"><i class="fa fa-comments-o"></i>2 Comentários</span>
        </div>
        <div class="blog-post-content">
        	<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur laoreet sapien, eu laoreet turpis. Aenean consequat sit amet nibh quis porttitor. Vivamus congue facilisis tellus, id dictum risus lacinia ac. Sed congue lorem tellus, sit amet maximus mauris feugiat eget. Morbi viverra dictum laoreet. Aenean non vehicula purus. Cras nec dolor lorem. Curabitur imperdiet felis nec vestibulum dictum. Suspendisse ipsum dolor, commodo ac convallis sit amet, maximus in ipsum. Vivamus a dolor sit amet odio mattis faucibus id vel mauris. In at urna orci.</p>
			<p>Nunc auctor ornare rutrum. Nam id massa ac tellus dapibus vestibulum. Nulla facilisi. Pellentesque ultrices, augue id imperdiet gravida, lorem massa iaculis ante, et hendrerit purus ex in ligula. Fusce blandit eros et nulla venenatis, vel rhoncus enim porta. Etiam tincidunt rutrum nulla, vel bibendum tortor tempus at. Integer quis sapien ut justo eleifend condimentum. Mauris ac egestas nisl. Proin vestibulum odio et nunc laoreet accumsan. Pellentesque at dui lorem. Aliquam ultrices at massa et porta. Curabitur hendrerit ullamcorper est, et finibus nunc aliquam nec. Phasellus ullamcorper hendrerit interdum. Cras at turpis sed lectus dignissim varius.</p>
        </div>
        <div class="blog-post-more btn-std btn-large"><a href="">Saiba Mais</a></div>
        
    </div>
</div>

























