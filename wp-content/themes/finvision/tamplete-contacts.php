<?php 
/* 
Template name: Контактная информация
*/
 ?>

<?php get_header(); ?>

<section class="content-inner">
	<div class="container">
		<div class="row no-gutter">
			<div class="col-md-12 col-sm-12 col-xs-12 ah-contactwrapper">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ah-contacts1.jpg" alt="ah-contacts1" class="img-responsive ah-img-contactblock">
				<div class="ah-contact-margin"><?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' - '); ?></div>
				<h1 class="ah-h1">Контактная информация</h1>
				<div class="ah-contactwrapper1">
					<p class="ah-contacts-text">Мы не собираемся тратить ваше время и нагружать бесполезной информацией.<br>Мы показываем только лучшие модели и только для Вас</p>
					<span class="ah-contacts-span">Адрес основного офиса:</span>
					<span class="ah-contacts-span1">620057, Екатеринбург, ул. Совхозная, 19, 4-й этаж</span>
					<span class="ah-contacts-span2">Отдел продаж по регионам: </span>
					<span class="ah-contacts-span3">Поволжье, Урал, Западная и Восточная Сибирь, Дальний Восток</span>
					<span class="ah-contacts-span4">Телефон и E-mail:</span>
					<a href="tel:+7 (343) 288 28 25">
						<span class="ah-contacts-span5">+7 (343) 288-28-25,<br class="hidden-sm hidden-md hidden-lg"><a href="tel:+7 (343) 290 45 46"><span class="ah-contacts-span5">+7 (343) 290-45-46</span></span>
					</a></a>
					<a href="mailto:contactus@namesite.ru"><span class="ah-contacts-span6">contactus@namesite.ru</span></a>
					<span class="ah-contacts-span7">Схема проезда до офиса</span>
				</div>
				<!-- <div class="ah-img-contactblock1"> -->
					<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
					<script type="text/javascript">
					ymaps.ready(init);
					 var myMap,
					     myPlacemark;

					 function init(){     
					     myMap = new ymaps.Map("map", {
					         center: [56.913122,60.629949],
					         zoom: 16,
					         controls: []
					     });

					    myMap.behaviors.disable('scrollZoom'); 

					     var myPlacemark = new ymaps.Placemark([56.913122,60.629949], {}, {
					      iconLayout: 'default#image',
					      iconImageHref: '/balun.png',
					      iconImageSize: [48, 57],
					      iconImageOffset: [-3, -42]
					  });


					     myMap.geoObjects.add(myPlacemark);
					 }
					</script>
					<div id="map"></div>
				<!-- </div> -->
<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/ah-contacts2.jpg" alt="ah-contacts2" class="img-responsive ah-img-contactblock1"> -->
			</div>	
		</div>
	</div>
</section>

<?php get_footer(); ?>