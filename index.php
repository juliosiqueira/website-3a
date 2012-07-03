<?php 
    header('Content-type: text/html; charset=utf-8');
	ini_set('default_charset','UTF-8');
	
	
	// script para fazer funcionar o carregamento da imagens com url'amigaveis
	if ( dirname( $_SERVER["PHP_SELF"] ) == DIRECTORY_SEPARATOR ) {
		$root = "";
	} else {
		$root = dirname( $_SERVER["PHP_SELF"] );
	}
	
	$url = (isset($_GET['url'])) ? $_GET['url'] : '';
	$explode = explode('/', $url);
	
?>
<!DOCTYPE html>
<html class="no-js" lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>3A Genética Animail</title>
        
        <link href="<?php echo $root;?>/css/style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $root;?>/css/global.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $root;?>/css/jquery.selectbox.css" type="text/css" rel="stylesheet" />
        
        <script src="<?php echo $root;?>/js/modernizr-2.5.3.js"></script>
		<script src="<?php echo $root;?>/js/jquery-1.7.2.min.js"></script>
        <script src="<?php echo $root;?>/js/slides.min.jquery.js"></script>
        <script src="<?php echo $root;?>/js/jquery.selectbox-0.1.3.js"></script>

		<script type="text/javascript">
            $(function () {
                $(".country_id").selectbox();
            });
        </script>
        
		<script>
            $(function(){
                $('#slides').slides({
                    preload: true,
                    preloadImage: 'img/loading.gif',
                    play: 5000,
                    pause: 2500,
                    hoverPause: true,
                    animationStart: function(current){
                        $('.caption').animate({
                            bottom:-35
                        },100);
                        if (window.console && console.log) {
                            // example return of current slide number
                            console.log('animationStart on slide: ', current);
                        };
                    },
                    animationComplete: function(current){
                        $('.caption').animate({
                            bottom:0
                        },200);
                        if (window.console && console.log) {
                            // example return of current slide number
                            console.log('animationComplete on slide: ', current);
                        };
                    },
                    slidesLoaded: function() {
                        $('.caption').animate({
                            bottom:0
                        },200);
                    }
                });
            });
        </script>
        
        
    </head>
 
    <body>
    
    	<div id="header">
        
        	<div id="halgin">
            	
                <div id="logo">
                	<a href="<?php echo $root;?>/home"><img src="<?php echo $root;?>/images/3a-genetica-animal.png" width="213" height="56" /></a>
                </div><!-- logo -->
                
                <div id="menu">
                	<ul>
                    	<?php
                    	if($explode[0] == 'home' or $explode[0] == ''){
						?>
                    	<li id="marcado" ><a href="<?php echo $root;?>/home">HOME</a></li>
                        <?php
						} else {
						?>
                        <li><a href="<?php echo $root;?>/home">HOME</a></li>
                        <?php
						} 
						?>
                        
                        <?php
                    	if($explode[0] == 'sobre-a-empresa'){
						?>
                    	<li id="marcado" ><a href="<?php echo $root;?>/sobre-a-empresa">EMPRESA</a></li>
                        <?php
						} else {
						?>
                        <li><a href="<?php echo $root;?>/sobre-a-empresa">EMPRESA</a></li>
                        <?php
						} 
						?>
                        
                        
                        
                        <?php
                    	if($explode[0] == 'produtos'){
						?>
                        <li id="marcado">
                        	<a href="<?php echo $root;?>/produtos">PRODUTOS</a>
                            <ul>
                            	<li><a href=""><img src="images/seta-menu.png" width="7" height="10" />CATÁLOGO DE TAURINOS</a></li>
                            	<li><a href=""><img src="images/seta-menu.png" width="7" height="10" />CATÁLOGO DE ZEBUINOS</a></li>
                                <li><a href=""><img src="images/seta-menu.png" width="7" height="10" />CATÁLOGO DE LEITEIROS</a></li>
                            </ul>
                        </li>
                         <?php
						} else {
						?>
                        <li>
                        	<a href="<?php echo $root;?>/produtos">PRODUTOS</a>
                            <ul>
                            	<li><a href=""><img src="images/seta-menu.png" width="7" height="10" />CATÁLOGO DE TAURINOS</a></li>
                            	<li><a href=""><img src="images/seta-menu.png" width="7" height="10" />CATÁLOGO DE ZEBUINOS</a></li>
                                <li><a href=""><img src="images/seta-menu.png" width="7" height="10" />CATÁLOGO DE LEITEIROS</a></li>
                            </ul>
                        </li>
                        <?php
						} 
						?>
                        
                        
                        
                        <li><a href="">CLIENTES</a></li>
                        <li><a href="">FALE CONOSCO</a></li>
                    </ul>
                </div><!-- menu -->
                
            </div><!-- halgin -->
            
        </div><!-- header -->
        
        <div id="content">
            
			<?php

                $paginas = array('home', 'sobre-a-empresa', 'produtos');
                
                if(isset($explode[0]) and $explode[0] == ''){
                    include_once "nav/home.php";
                    
                } else if($explode[0] != '' and $explode[1] != ''){
                    
                    include_once "nav/single.php";
                
                } else if($explode[0] != ''){
                    
                    if(isset($explode[0]) and in_array($explode[0], $paginas)){
                        include_once "nav/".$explode[0].".php";
                    } else {
                        include_once "nav/home.php";
                    }
                    
                }
            ?>
        
        </div><!-- content -->
        
        <div id="bottom">
        	<p>© 2012  3A Genética Animal. Todos os direitos reservados.</p>
        </div><!-- bottom -->
    
    </body>
</html>