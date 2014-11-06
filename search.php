<?php get_header(); ?>


<!-- ==================== PAGE HEADER ==================== -->
<div id="pageheadertext" class="pageheader" style="background-image:url(<?php echo get_pageheader_bg( 153 ); ?>);">
	<div class="headerpagesub" id="headerpagesub">Search Results</div>
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
		<div class="fleft" style="width: 749px;border-left: 1px solid #939598;padding-left: 30px;">
			<div class="bold s32 upper dred">Search Results for "<?php the_search_query(); ?>"</div>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="justify medium s14" style="padding:10px 0;">
					<?php search_excerpt_highlight(); ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div><!-- .container -->
</div><!-- .content -->

<?php get_footer(); ?>