<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<!-- ==================== PAGE HEADER ==================== -->
<div id="pageheadertext" class="pageheader" style="background-image:url(<?php echo get_pageheader_bg( 118 ); ?>);">
	<div class="headerpagesub" id="headerpagesub">News</div>
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

<?php endwhile; ?>
<?php endif; ?>


		<div class="fleft" id="mobile-content">
			<div class="adj-padding bold s32 upper dred" style="padding: 0 0 10px 0;"><?php the_title(); ?></div>

			<div class="s14">
				<div class="adj-padding justify medium s14"><?php the_content(); ?></div>
			</div>
		</div><!-- .mobile-content -->
	</div><!-- .container -->
</div><!-- .content -->


<?php get_footer(); ?>