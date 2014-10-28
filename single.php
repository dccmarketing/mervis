<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<!-- ==================== PAGE HEADER ==================== -->
<div id="pageheadertext" style="position: absolute;margin-top: 180px;width:100%;">
	<div class="center boldital s80 upper white" id="headerpagesub">
		<span id="pagetitleshadow">News</span>
	</div>
</div>

<div id="mobile-pageheader" style="padding-top: 113px;">
	<img src="<?php the_field('pageheader','118'); ?>">
</div>
<!-- ==================== PAGE HEADER ==================== -->

<div id="pagecontent" class="container">

	<div id="breadcrumbs" class="pad5 medium s14 grey">
		<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>
	</div>

<?php endwhile; ?>
<?php endif; ?>


	<div style="padding:10px 0;">
		<div class="sidebar-menu"><?php

			get_template_part( 'menu', 'sidebar' );

		?></div>
		<div class="fleft" id="mobile-content">
			<div class="adj-padding bold s32 upper dred" style="padding: 0 0 10px 0;"><?php the_title(); ?></div>

			<div class="s14">
				<div class="adj-padding justify medium s14"><?php the_content(); ?></div>
			</div>
		</div>
		<br style="clear:both" />
	</div>

</div>


<?php get_footer(); ?>