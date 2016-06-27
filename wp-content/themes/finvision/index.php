<?php get_header(); ?>
<section class="anz-background">
	<div class="container container_style">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<span class="anz-fin">ФИННСКОЕ КАЧЕСТВО</span>
				<span class="anz-solve">Решаем реальные проблемы.</span>
				<a href="#" class="anz-button">хочу посмотреть больше</a>
				<span class="no-one">#1 Номер один в Европе</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="anz-items">
					<span class="anz-left-arrow"></span>
					<?php wp_reset_query(); ?>
					<?php $wp_query = new WP_Query(array('post_type' => 'tovar')); ?>
					<?php $num = 0; ?>
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<div class="anz-item anz-none">
						<div class="anz-galary">
						
						<span><?php the_title(); ?></span>
						
						<div class="anz-tab-galary">
							<input type="radio" id="tab_<?php echo $num+1; ?>" name="tab<?php echo $num; ?>" class="tab_1" checked/>
							<input type="radio" id="tab_<?php echo $num+2; ?>" name="tab<?php echo $num; ?>" class="tab_2"/>
							<input type="radio" id="tab_<?php echo $num+3; ?>" name="tab<?php echo $num; ?>" class="tab_3"/>
							<input type="radio" id="tab_<?php echo $num+4; ?>" name="tab<?php echo $num; ?>" class="tab_4"/>
							<div class="anz-relative">
							<?php $image = get_field('картинка_1'); ?>
							<div id="tab_c<?php echo $num+1; ?>" class="tab_c1">1<img src="<?php echo $image['url']; ?>" alt=""></div>
							<?php $image = get_field('картинка_2'); ?>
							<div id="tab_c<?php echo $num+2; ?>" class="tab_c2">2<img src="<?php echo $image['url']; ?>" alt=""></div>
							<?php $image = get_field('картинка_3'); ?>
							<div id="tab_c<?php echo $num+3; ?>" class="tab_c3">3<img src="<?php echo $image['url']; ?>" alt=""></div>
							<?php $image = get_field('картинка_4'); ?>
							<div id="tab_c<?php echo $num+4; ?>" class="tab_c4">4<img src="<?php echo $image['url']; ?>" alt=""></div>
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
</section>

<?php get_footer(); ?>


<script>
	$(document).ready(function(){
		

	});
</script>