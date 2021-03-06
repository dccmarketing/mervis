<?php
/**
 * Template Name: Text Club
 */

get_header();

if (have_posts()) :

	while (have_posts()) : the_post();

		?><!-- ==================== PAGE HEADER ==================== -->
		<div id="pageheadertext" class="pageheader" style="background-image:url(<?php echo get_pageheader_bg( get_the_ID() ); ?>);">
			<div class="headerpagesub" id="headerpagesub"><?php

				the_title();

			?></div>
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

						<iframe src="http://www.slicktext.com/widget/?type=word&style=widget&w=63fc40e20a48e22dc19ece8e3a62683f5f437ae2" width="300" height="250" frameborder="0" /></iframe>

						<div style="font-size:10px;">
							Standard messaging and data rates may apply.  Get 2 messages per month.<br />Reply HELP for help. Reply STOP to cancel.
						</div>
					</div>
				</div>
			</div><!-- .container -->
		</div><!-- .content --><?php

	endwhile;

endif;

get_footer();