<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<!-- ==================== PAGE HEADER ==================== -->
<div id="pageheadertext" class="pageheader" style="background-image:url(<?php echo get_pageheader_bg( get_the_ID() ); ?>);">
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
			<div class="page-content-title"><?php the_title(); ?></div>
			<div class="justify medium s14"><?php the_content(); ?></div>
		</div>
	</div><!-- .container -->
</div><!-- .content -->

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>