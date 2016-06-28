<?php 
/* 
Template name: Оптовикам
*/
 ?>

<?php get_header(); ?>

<section class="content-inner">
	<div class="container">
		<div class="row no-gutter">
			<div class="col-md-12 col-sm-12 col-xs-12 ah-optowrapper">
				<div class="ah-img-optoblock">
					<a href="#optovik" name="modal" class="ah-optovikam-link">Стать оптовиком</a>
				</div>
				<div class="ah-contact-margin"><?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' - '); ?></div>
				<h1 class="ah-h1"><?php the_title(); ?></h1>
				<div class="ah-line4"></div>
				<div class="clearfix"></div>
				<div class="ah-optowrapper1">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
				</div>
			</div>	
		</div>
	</div>
</section>

<?php get_footer(); ?>