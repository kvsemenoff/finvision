<?php get_header(); ?>
<section class="anz-background">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="container_style">
					<span class="anz-fin">ФИННСКОЕ КАЧЕСТВО</span>
					<span class="anz-solve">Решаем реальные проблемы.</span>
					<a href="#" class="anz-button">хочу посмотреть больше</a>
					<span class="no-one">#1 Номер один в Европе</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="anz-product">
			<h1>Наша продукция</h1>
			<span class="anz-white">Мы не собираемся тратить ваше время и нагружать бесполезной информацией.</span>
			<span class="anz-white">Мы показываем только лучшие модели и только для Вас</span>
				<div class="anz-items anz-items_margin">
					<span class="anz-left-arrow"></span>

					<?php wp_reset_query(); ?>
					<?php $wp_query = new WP_Query(array('post_type' => 'tovar')); ?>
					<?php $num = 0; ?>

					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						asdasdad
					<div class="anz-item anz-none anz-item_style">
						<div class="anz-galary">
						
						<span class="anz-title"><?php the_title(); ?></span>
						
						<div class="anz-tab-galary">
							<input type="radio" id="tab_<?php echo $num+1; ?>" name="tab<?php echo $num; ?>" class="tab_1" checked/>
							<input type="radio" id="tab_<?php echo $num+2; ?>" name="tab<?php echo $num; ?>" class="tab_2"/>
							<input type="radio" id="tab_<?php echo $num+3; ?>" name="tab<?php echo $num; ?>" class="tab_3"/>
							<input type="radio" id="tab_<?php echo $num+4; ?>" name="tab<?php echo $num; ?>" class="tab_4"/>
							<div class="anz-relative">
							<?php $image = get_field('картинка_1'); ?>
							<div id="tab_c<?php echo $num+1; ?>" class="tab_c1"><img src="<?php echo $image['url']; ?>" alt=""></div>
							<?php $image = get_field('картинка_2'); ?>
							<div id="tab_c<?php echo $num+2; ?>" class="tab_c2"><img src="<?php echo $image['url']; ?>" alt=""></div>
							<?php $image = get_field('картинка_3'); ?>
							<div id="tab_c<?php echo $num+3; ?>" class="tab_c3"><img src="<?php echo $image['url']; ?>" alt=""></div>
							<?php $image = get_field('картинка_4'); ?>
							<div id="tab_c<?php echo $num+4; ?>" class="tab_c4"><img src="<?php echo $image['url']; ?>" alt=""></div>
							</div>

							<?php $image = get_field('картинка_1'); ?>
							<label for="tab_<?php echo $num+1; ?>" id="tab_l<?php $num+1; ?>" class="anz-img tab_l1"><img src="<?php echo $image['url']; ?>" alt=""></label>
							<?php $image = get_field('картинка_2'); ?>
							<label for="tab_<?php echo $num+2; ?>" id="tab_l<?php $num+2; ?>" class="anz-img tab_l2"><img src="<?php echo $image['url']; ?>" alt=""></label>
							<?php $image = get_field('картинка_3'); ?>
							<label for="tab_<?php echo $num+3; ?>" id="tab_l<?php $num+3; ?>" class="anz-img tab_l3"><img src="<?php echo $image['url']; ?>" alt=""></label>
							<?php $image = get_field('картинка_4'); ?>
							<label for="tab_<?php echo $num+4; ?>" id="tab_l<?php $num+4; ?>" class="anz-img tab_l4"><img src="<?php echo $image['url']; ?>" alt=""></label>
						</div>
						<span class><?php the_field('характеристика_1'); ?></span>
						<span><?php the_field('характеристика_2'); ?></span>
						<span><?php the_field('характеристика_3'); ?></span>
						<span><?php the_field('характеристика_4'); ?></span>
						<a href="#">Купить</a>
						<a href="#">подробнее</a>
						</div>

					</div>
						<?php $num = $num + 4; ?>
						<?php endwhile;?>
						<?php wp_reset_query(); ?>
					
					<span class="anz-right-arrow"></span>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>


<script>
	$(document).ready(function(){
		

	});
</script>