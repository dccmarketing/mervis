<?php /** Template Name: News */ get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<!-- ==================== PAGE HEADER ==================== -->
<div id="pageheadertext" class="pageheader">
	<div class="headerpagesub" id="headerpagesub">
		<?php the_title(); ?>
	</div>
</div><?php

	get_template_part( 'menus/menu', 'belowslider' );

?><!-- ==================== PAGE HEADER ==================== -->

<div class="content">
	<div class="container">

		<div class="breadcrumbs">
			<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			} ?>
		</div>
		<div class="fleft" id="mobile-content">
			<div class="s14">
				<div id="accordion">

				<?php if (have_posts()) : ?>
				<?php query_posts("showposts=50"); ?>
				<?php while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>
					<div class="justify medium s14"><?php the_content(); ?></div>

				<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div><!-- .container -->
</div><!-- .content -->


<?php get_footer(); ?>