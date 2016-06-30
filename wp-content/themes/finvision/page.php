<?php get_header(); ?>

<section class="content-inner">
	<div class="container">
		<div class="row no-gutter">
			<div class="col-md-12 col-sm-12 col-xs-12 ah-company">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ah-company.jpg" alt="ah-contacts1" class="ah-img-contactblock anz-responsive">
				<div class="ah-contact-margin"><?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' - '); ?></div>
				<h1 class="ah-h1"><?php the_title(); ?></h1>
				<div class="ah-line3"></div>
				<div class="clearfix"></div>
				<div class="ah-company1">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
				</div>
			</div>	
		</div>
	</div>
</section>



<?php get_footer(); ?>