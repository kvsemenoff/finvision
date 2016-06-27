

<section class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-top">
				<div class="col-md-2">
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_footer.png" alt=""></a>
				</div>
				<div class="col-md-10">
					<ul class="footer-menu">
						<li><a href="#">О компании</a></li>
						<li><a href="#">Каталог</a></li>
						<li><a href="#">Интернет-магазин</a></li>
						<li><a href="#">Оптовикам</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
				
			</div>		
			<div class="footer-middle">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="f-address">
						<span>123435, Москва, ул. Литейная, д. 12</span>
						<a href="#">На карте</a>
					</div>
				</div>	
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="f-contacts">
						<span>+7 (345) 345-54-65 | +7 (435) 345-54-65</span>   
						<a href="#zvonok" name="modal">Заказать бесплатную консультацию</a>           
					</div>
				</div>	
				<div class="col-md-2 col-sm-12 col-xs-12">
					<div class="f-email">
						<span>contacts@mail.ru</span>
					</div>
				</div>	
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="f-copyright">
						© 2016  Finvision All Rights Reserved
					</div>
				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="footer-bottom">
				<div class="col-md-9">
					<div class="f-some">
						Уравнение Эйлера интегрирует механический волчок. Объект связывает волчок, что обусловлено существованием циклического интеграла у второго уравнения системы уравнений малых колебаний. Уравнение малых колебаний известно. Гиротахометр, согласно третьему закону Ньютона
					</div>
					
				</div>
				<div class="col-md-3">
					<div class="ho-lang-box-footer">
    					<span>Выберите язык:</span> <br>
    					<a href="#" class="fin">FIN</a>
    					<a href="#" class="eng">ENG</a>
    					<a href="#" class="rus">Рус</a>
    				</div>
				</div>
				<div class="clearfox"></div>
			</div>
		</div>
	</div>
</section>

<div id="mask"></div>
<div id="zvonok" class="window"> 
    <form action="" class="common-form form1">
        <div class="an-exit">
            <span class="an-exit__krest"></span>
        </div>
        <span class="form-title">Закажите консультацию</span>
        <span class="form-subtitle">Оставьте заявку и наш специалист перезвонит вам в течении 3 минут</span>
        <input type="text" name="tel" placeholder="+7 900 000 00 00" class="phone">
        <input type="submit" id="form1_submit" value="Заказать консультацию">
    </form>
</div>

<!-- ******************************** ah-item ******************************** -->

<div id="kupit" class="window"> 
    <form action="" class="common-form form2">
        <div class="an-exit">
            <span class="an-exit__krest"></span>
        </div>
        <span class="form-title">Купите в интернет-магазине</span>
        <span class="form-subtitle">Оставьте заявку и наш специалист перезвонит вам в течении 3 минут</span>
        <input type="text" name="tel" placeholder="+7 900 000 00 00" class="phone">
        <input type="submit" id="form2_submit" value="Купить в интернет-магазине">
    </form>
</div>

<div id="kupit1" class="window"> 
    <form action="" class="common-form form3">
        <div class="an-exit">
            <span class="an-exit__krest"></span>
        </div>
        <span class="form-title">Купить в 1 клик</span>
        <span class="form-subtitle">Оставьте заявку и наш специалист перезвонит вам в течении 3 минут</span>
        <input type="text" name="tel" placeholder="+7 900 000 00 00" class="phone">
        <input type="submit" id="form3_submit" value="Купить в 1 клик">
    </form>
</div>

<!-- ******************************** ah-item ******************************** -->

<div id="thanks" class="window"> 
    <form action="" class="common-form">
        <div class="an-exit">
            <span class="an-exit__krest"></span>
        </div>
        <span class="form-title ah-thanks1">Спасибо! Ваша заявка принята!</span>
        <span class="form-subtitle ah-thanks2">Наш специалист свяжется с вами в ближайшее время</span>
    </form>
</div>

<a href="#thanks" name="modal"></a>

		
<?php wp_footer(); ?>

</body>
</html>