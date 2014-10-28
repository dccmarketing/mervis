<?php /** Template Name: Text Club */ get_header(); ?>

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

	<div style="padding:10px 0;">
		<div class="sidebar-menu"><?php

			get_template_part( 'menu', 'sidebar' );

		?></div>
		<div class="fleft" id="mobile-content">
			<div class="adj-padding bold s32 upper dred"><?php the_title(); ?></div>
			<div class="adj-padding justify medium s14" style="padding:10px 0;"><?php the_content(); ?></div>
			<div class="adj-padding">
	
				<iframe src="http://messaging.smselephant.com/onlineSignup/embed_osp.php?user=Dccmarketing81&dname=2ad65101287c37d8c91ba4be4e5594b6" frameborder="0" width="220" height="255" scrolling="no" style='border:#000000 solid 0px' ></iframe>

			</div>
		</div>
		<br style="clear:both" />
	</div>

</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>