<?php /** Template Name: News */ get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<!-- ==================== PAGE HEADER ==================== -->
<div id="pageheadertext" style="position: absolute;margin-top: 180px;width:100%;">
	<div class="center boldital s80 upper white" id="headerpagesub">
		<span id="pagetitleshadow"><?php the_title(); ?></span>
	</div>
</div>

<div id="mobile-pageheader" class="mobile-pageheader"><?php

$trees = array( 153, 165, 136, 126, 124, 122, 118, 506, 511, 513, 515 );

foreach ( $trees as $tree ) {

	if ( is_tree( $tree ) ) {

		?><img src="<?php the_field( 'pageheader', $tree ); ?>"><?php

	}

} // foreach

?></div><?php

get_template_part( 'menu', 'belowslider' );

?><!-- ==================== PAGE HEADER ==================== -->

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
		<br style="clear:both" />
	</div>

</div>


<?php get_footer(); ?>