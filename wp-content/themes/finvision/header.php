<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/wow/animate.css">


	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style2.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style3.css">

	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">

	<meta content="telephone=no" name="format-detection"/>
	<?php wp_head(); ?>
</head>
<body>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/owl.carousel.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/wow/wow.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/responsiveTabs.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
	<script>
    	new WOW().init();
    </script>

    <section class="header">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">

    				<div class="ho-logo-box">
    					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
    				</div>
    				<div class="ho-slogan">
    					Финский производитель<br>
						видеорегистраторов
    				</div>

    			</div>
    			<div class="col-md-3">
    				<div class="ho-lang-box">
    					<span>Выберите язык:</span>
    					<a href="#" class="fin">FIN</a>
    					<a href="#" class="eng">ENG</a>
    					<a href="#" class="rus">Рус</a>
    				</div>
    				
    			</div>
    			<div class="col-md-3">
    				<div class="ho-contact-box">
    					<span class="tel">+7 (499) 324 - 54 -54</span>
    					<a href="#zvonok" name="modal">Заказать консультацию</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
   
   	<div class="header-nav">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-12">
   					<ul class="main-menu">
						<li><a href="#">О компании</a></li>
						<li><a href="#">Каталог</a></li>
						<li><a href="#">Интернет-магазин</a></li>
						<li><a href="#">Оптовикам</a></li>
    				</ul>
   				</div>
   			</div>
   		</div>
   	</div>		
