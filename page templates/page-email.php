<?php

/**
 * Template Name: Email Alerts
 */

get_header();

if (have_posts()) :

	while (have_posts()) : the_post();

		?><!-- ==================== PAGE HEADER ==================== -->
		<div id="pageheadertext" class="pageheader" style="background-image:url(<?php echo get_pageheader_bg( get_the_ID() ); ?>);">
			<div class="headerpagesub" id="headerpagesub">
				<?php the_title(); ?>
			</div>
		</div><?php

			get_template_part( 'menus/menu', 'belowslider' );

		?><!-- ==================== PAGE HEADER ==================== -->

		<div class="content">
			<div class="container">

				<div class="breadcrumbs"><?php

					if ( function_exists('yoast_breadcrumb') ) {

						yoast_breadcrumb('<p id="breadcrumbs">','</p>');

					}

				?></div>
				<div class="fleft" id="mobile-content">
					<div class="adj-padding bold s32 upper dred"><?php the_title(); ?></div>
					<div class="adj-padding justify medium s14" style="padding:10px 0;"><?php the_content(); ?></div>
					<div class="adj-padding">

						<iframe src="http://messaging.smselephant.com/onlineSignup/embed_osp.php?user=Dccmarketing81&dname=97fdd50d1f38755f951d5b07588025f8" frameborder="0" width="220" height="270" scrolling="no" style="border:#990000 solid 2px"></iframe>

					</div>
				</div>
			</div><!-- .container -->
		</div><!-- .content --><?php

	endwhile;

endif;

get_footer();