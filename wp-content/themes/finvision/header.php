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
	<!-- <script src="<?php //echo get_template_directory_uri(); ?>/libs/owl.carousel/owl.carousel.js"></script> -->
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
    			<div class="col-md-5 col-sm-12 col-xs-12 top-header">

    				<div class="ho-logo-box">
    					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
    				</div>
    				<div class="ho-slogan hidden-sm hidden-xs ">
    					Финский производитель<br>
						видеорегистраторов
    				</div>
    				<div class="anz-menu hidden-md hidden-lg">
						<input type="checkbox" id="check_1"/>
						<label class="anz-menu-ch" for="check_1"><i class="fa fa-bars" aria-hidden="true"></i><i class="fa fa-times" aria-hidden="true"></i></label>

						<div class="menu-list-pressed">
							<div class="ho-contact-box-pop">
								<a href="tel:+7 (499) 324 54 54"><span class="tel">+7 (499) 324 - 54 -54</span></a><br>
		    					<a href="#zvonok" name="modal">Заказать консультацию</a>
		    				</div>
		    				<ul class="main-menu-pop">
		    					<?php
						            $args = array(
						            'theme_location'  => '',
						            'menu'            => 'top-menu', 
						            'container'       => flase, 
						            'container_class' => '', 
						            'container_id'    => '',
						            'menu_class'      => 'menu', 
						            'menu_id'         => '',
						            'echo'            => true,
						            'fallback_cb'     => 'wp_page_menu',
						            'before'          => '',
						            'after'           => '',
						            'link_before'     => '',
						            'link_after'      => '',
						            'items_wrap'      => '<ul class="main-menu-pop">%3$s</ul>',
						            'depth'           => 0
						        );
						        wp_nav_menu($args ); 
						        ?>
		    				</ul>
							<div class="ho-lang-box-pop">
		    					<span>Выберите язык:</span>
		    					<a href="/fi" class="fin">FIN</a>
		    					<a href="/en" class="eng">ENG</a>
		    					<a href="/ru" class="rus">Рус</a>
		    				</div>

						</div>
					</div>

    			</div>
    			<div class="col-md-4 hidden-sm hidden-xs">
    				<div class="ho-lang-box">
    					<span>Выберите язык:</span>
    					<a href="/fi" class="fin">FIN</a>
    					<a href="/en" class="eng">ENG</a>
    					<a href="/ru" class="rus">Рус</a>
    				</div>
    				
    			</div>
    			<div class="col-md-3 hidden-sm hidden-xs">
    				<div class="ho-contact-box">
    					<a href="tel:+7 (499) 324 54 54"><span class="tel">+7 (499) 324 - 54 -54</span></a> <br>
    					<a href="#zvonok" name="modal">Заказать консультацию</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
   
   	<div class="header-nav hidden-sm hidden-xs">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-12">
   					<ul class="main-menu">
						<?php
				            $args = array(
				            'theme_location'  => '',
				            'menu'            => 'top-menu', 
				            'container'       => flase, 
				            'container_class' => '', 
				            'container_id'    => '',
				            'menu_class'      => 'menu', 
				            'menu_id'         => '',
				            'echo'            => true,
				            'fallback_cb'     => 'wp_page_menu',
				            'before'          => '',
				            'after'           => '',
				            'link_before'     => '',
				            'link_after'      => '',
				            'items_wrap'      => '<ul class="main-menu">%3$s</ul>',
				            'depth'           => 0
				        );
				        wp_nav_menu($args ); 
				        ?>
    				</ul>
   				</div>
   			</div>
   		</div>
   	</div>		
