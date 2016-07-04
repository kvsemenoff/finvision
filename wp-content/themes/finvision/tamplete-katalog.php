<?php 
/* 
Template name: Каталог
*/
 ?>

<?php get_header(); ?>

<section class="content-inner">
	<div class="container">
		<div class="row no-gutter">
			<div class="col-md-12 col-sm-12 col-xs-12 ah-optowrapper">
				<div class="ah-contact-margin"><?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' - '); ?></div>
				<span class="ah-catalog-title ah-h1">Каталог товаров</span>
				<div class="ah-line5"></div>
				<div class="anz-product ah-product1">
					<span>Мы показываем только лучшие модели и только для Вас</span>
					<div class="clearfix"></div>
					<?php wp_reset_query(); ?>
					<?php $wp_query = new WP_Query(array('post_type' => 'tovar')); ?>
					<?php $num = 0; ?>
					
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					
					<div class="col-md-5 col-sm-12 col-xs-12 ah-catalog-border">
						<div class="anz-tab-galary">
							<input type="radio" id="tab_<?php echo $num+1; ?>" name="tab<?php echo $num; ?>" class="tab_1" checked/>
							<input type="radio" id="tab_<?php echo $num+2; ?>" name="tab<?php echo $num; ?>" class="tab_2"/>
							<input type="radio" id="tab_<?php echo $num+3; ?>" name="tab<?php echo $num; ?>" class="tab_3"/>
							<input type="radio" id="tab_<?php echo $num+4; ?>" name="tab<?php echo $num; ?>" class="tab_4"/>
							<div class="anz-relative anz-relative_margin ah-relative">
							<?php $image = get_field('картинка_1'); ?>
							<div id="tab_c<?php echo $num+1; ?>" class="tab_c1"><img src="<?php echo $image['url']; ?>" alt=""></div>
							<?php $image = get_field('картинка_2'); ?>
							<div id="tab_c<?php echo $num+2; ?>" class="tab_c2"><img src="<?php echo $image['url']; ?>" alt=""></div>
							<?php $image = get_field('картинка_3'); ?>
							<div id="tab_c<?php echo $num+3; ?>" class="tab_c3"><img src="<?php echo $image['url']; ?>" alt=""></div>
							<?php $image = get_field('картинка_4'); ?>
							<div id="tab_c<?php echo $num+4; ?>" class="tab_c4"><img src="<?php echo $image['url']; ?>" alt=""></div>
							</div>
							<div class="anz-relative anz-relative_style">
							<div class="anz-absolute anz-relative_style">
							<?php $image = get_field('картинка_1'); ?>
							<label for="tab_<?php echo $num+1; ?>" id="tab_l<?php $num+1; ?>" class="anz-img tab_l1"><img src="<?php echo $image['url']; ?>" alt=""></label>
							</div>
							</div>
							<div class="anz-relative anz-relative_style">
							<div class="anz-absolute anz-absolute_style">
							<?php $image = get_field('картинка_2'); ?>
							<label for="tab_<?php echo $num+2; ?>" id="tab_l<?php $num+2; ?>" class="anz-img tab_l2"><img src="<?php echo $image['url']; ?>" alt=""></label>
							</div>
							</div>
							<div class="anz-relative anz-relative_style">
							<div class="anz-absolute anz-absolute_style">
							<?php $image = get_field('картинка_3'); ?>
							<label for="tab_<?php echo $num+3; ?>" id="tab_l<?php $num+3; ?>" class="anz-img tab_l3"><img src="<?php echo $image['url']; ?>" alt=""></label>
							</div>
							</div>
							<div class="anz-relative anz-relative_style">
							<div class="anz-absolute anz-absolute_style">
							<?php $image = get_field('картинка_4'); ?>
							<label for="tab_<?php echo $num+4; ?>" id="tab_l<?php $num+4; ?>" class="anz-img tab_l4"><img src="<?php echo $image['url']; ?>" alt=""></label>
							</div>
							</div>
						</div>
						<div class="anz-padding ah-catalog-padding">
							<span class="anz-title ah-background"><?php the_title(); ?></span>
							<span class="anz-char"><?php the_field('характеристика_1'); ?></span>
							<span class="anz-char"><?php the_field('характеристика_2'); ?></span>
							<span class="anz-char"><?php the_field('характеристика_3'); ?></span>
							<span class="anz-char"><?php the_field('характеристика_4'); ?></span>
							<!-- <a href="<?php the_permalink(); ?>" >Купить</a> -->
							<a href="<?php the_permalink(); ?>" >подробнее</a>
						</div>
					</div>
					<?php $num = $num + 4; ?>
					<?php endwhile;?>
					<?php wp_reset_query(); ?>
				</div>
			</div>	
		</div>
	</div>
</section>

<?php get_footer(); ?>