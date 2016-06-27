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
				<ul class="ah-cart-list1 ah-contact-margin">
					<li class="ah-cart-list1_item1"><a href="#">Главная - </a></li>
					<li class="ah-cart-list1_item2">Контактная информация</li>
				</ul>
				<h1 class="ah-h1">Контактная информация</h1>
				<div class="ah-line2"></div>
				<p class="ah-contacts-text">Мы не собираемся тратить ваше время и нагружать бесполезной информацией.<br>Мы показываем только лучшие модели и только для Вас</p>
				<span class="ah-contacts-span">Адрес основного офиса:</span>
				<span class="ah-contacts-span1">620057, Екатеринбург, ул. Совхозная, 19, 4-й этаж</span>
				<span class="ah-contacts-span2">Отдел продаж по регионам: </span>
				<span class="ah-contacts-span3">Поволжье, Урал, Западная и Восточная Сибирь, Дальний Восток</span>
				<span class="ah-contacts-span4">Телефон и E-mail:</span>
				<span class="ah-contacts-span5">+7 (343) 288-28-25,  +7 (343) 290-45-46</span>
				<span class="ah-contacts-span6">contactus@namesite.ru</span>
				<span class="ah-contacts-span7">Схема проезда до офиса</span>
				<!-- <div class="ah-img-contactblock1"> -->
					<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
					<script type="text/javascript">
					ymaps.ready(init);
					 var myMap,
					     myPlacemark;

					 function init(){     
					     myMap = new ymaps.Map("map", {
					         center: [55.73521577724309,37.6503515],
					         zoom: 16,
					         controls: []
					     });

					    myMap.behaviors.disable('scrollZoom'); 

					     var myPlacemark = new ymaps.Placemark([55.73521577724309,37.6503515], {}, {
					      iconLayout: 'default#image',
					      iconImageHref: '/img/balun.png',
					      iconImageSize: [48, 57],
					      iconImageOffset: [-3, -42]
					  });


					     myMap.geoObjects.add(myPlacemark);
					 }
					</script>
					<div id="map">hhhh <br>kjkjkjk</div>
				<!-- </div> -->
<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/ah-contacts2.jpg" alt="ah-contacts2" class="img-responsive ah-img-contactblock1"> -->
			</div>	
		</div>
	</div>
</section>

<?php get_footer(); ?>