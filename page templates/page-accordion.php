<?php
/**
 * Template Name: Accordion
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
					<div class="adj-padding justify medium s14" style="padding:10px 0;"><?php

						the_content();

					?><div id="accordion"><?php

						if( get_field( 'accordion' ) ):

							while( has_sub_field( 'accordion' ) ) :

								?><h1><?php the_sub_field('title'); ?></h1>
								<div class="justify medium s14"><?php the_sub_field('content'); ?></div><?php

							endwhile;

						endif;

					?></div>
					<br style="clear:both" />
				</div><!-- #mobile-content -->
			</div><!-- .container -->
		</div><!-- .content --><?php

	endwhile;

endif;

get_footer();