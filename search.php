<?php get_header(); ?>

<!-- ==================== PAGE HEADER ==================== -->
<div id="pageheadertext" style="position: absolute;margin-top: 180px;width:100%;">
	<div class="center boldital s80 upper white" id="headerpagesub">
		<span id="pagetitleshadow">Search Results</span>
	</div>
</div>

<div style="padding-top: 113px;">

<img src="<?php the_field('pageheader','153'); ?>">

</div>
<!-- ==================== PAGE HEADER ==================== -->
<div id="pagecontent" class="container">

	<div id="breadcrumbs" class="pad5 medium s14 grey">
		<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>
	</div>

	<div style="padding:10px 0;">
		<div class="sidebar-menu"><?php

			get_template_part( 'menu', 'sidebar' );

		?></div>
		<div class="fleft" style="width: 749px;border-left: 1px solid #939598;padding-left: 30px;">
			<div class="bold s32 upper dred">Search Results for "<?php the_search_query(); ?>"</div>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="justify medium s14" style="padding:10px 0;">
					<?php search_excerpt_highlight(); ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
		<br style="clear:both" />
	</div>

</div>

<?php get_footer(); ?>