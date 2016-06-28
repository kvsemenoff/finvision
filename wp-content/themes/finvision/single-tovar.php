<?php get_header(); ?>

<section class="content-inner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 ah-wrapper">
				<div class="col-md-4 col-sm-12 col-xs-12">
				<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' - '); ?>
					<h1 class="ah-h1"><?php the_title(); ?></h1>
					<div class="ah-line1"></div>
				</div>

				<div class="clearfix"></div>

				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="ah-left-block">
					<?php $document = get_field('картинка_1'); ?>
					<a href="<?php echo $document['url']; ?>" rel="group"><img src="<?php echo $document['url']; ?>" class="img-responsive ah-img-block"></a>
						<ul class="ah-cart-list2">
							<li>
								<?php $document = get_field('картинка_2'); ?>
								<a href="<?php echo $document['url']; ?>" rel="group"><img src="<?php echo $document['url']; ?>"></a>
							</li>
							<li>
								<?php $document = get_field('картинка_3'); ?>
								<a href="<?php echo $document['url']; ?>" rel="group"><img src="<?php echo $document['url']; ?>"></a>
							</li>
							<li>
								<?php $document = get_field('картинка_4'); ?>
								<a href="<?php echo $document['url']; ?>" rel="group"><img src="<?php echo $document['url']; ?>"></a>
							</li>
						</ul>
						<span class="ah-cart-span">Описание</span>
						<p class="ah-cart-text"><?php the_field('описание'); ?></p>
					</div>
				</div>

				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="ah-right-block">
						<ul class="ah-cart-list3">
							<li><?php the_field('характеристика_1'); ?></li>
							<li><?php the_field('характеристика_2'); ?></li>
							<li><?php the_field('характеристика_3'); ?></li>
							<li><?php the_field('характеристика_4'); ?></li>
							<li><?php the_field('характеристика_5'); ?></li>
						</ul>

						<div class="ah-line"></div>

						<ul class="ah-cart-list4">
							<li><?php the_field('характеристика_6'); ?></li>
							<li><?php the_field('характеристика_7'); ?></li>
							<li><?php the_field('характеристика_8'); ?></li>
							<li><?php the_field('характеристика_9'); ?></li>
							<li><?php the_field('характеристика_10'); ?></li>
							<li><?php the_field('характеристика_11'); ?></li>
						</ul>

						<div class="ah-line"></div>

						<ul class="ah-cart-list5">
							<li><?php the_field('характеристика_12'); ?></li>
							<li><?php the_field('характеристика_13'); ?></li>
						</ul>
						<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
							<a href="#kupit" name="modal" class="ah-cart-link1">Купить в интернет-магазине</a>
							<a href="#kupit1" name="modal" class="ah-cart-link2">Купить <strong>в 1 клик</strong></a>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</section>

<?php get_footer(); ?>