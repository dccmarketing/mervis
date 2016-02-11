<?php
/**
 * Template Name: Locations
 */

get_header();

if ( have_posts() ) :

	while ( have_posts() ) : the_post();

		?><!-- ==================== PAGE HEADER ==================== -->
		<div id="pageheadertext" class="pageheader" style="background-image:url(<?php echo get_pageheader_bg( get_the_ID() ); ?>);">
			<div class="headerpagesub" id="headerpagesub">
				<?php the_title(); ?>
			</div>
		</div><!-- .pageheader --><?php

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
					<div class="adj-padding bold s32 upper dred"><?php the_title(); ?></div>
					<div class="adj-padding justify medium s14" style="padding:10px 0;">
						<?php the_content(); ?>

						<!-- ==================== MAIN QUERY ==================== -->
						<div id="accordion"><?php

							$loop = new WP_Query( array( 'post_type' => 'locations', 'posts_per_page' => 20 ) );

							while ( $loop->have_posts() ) : $loop->the_post();

								get_template_part( 'content', 'location' );

							endwhile;

						?></div>
						<!-- ==================== MAIN QUERY ==================== -->
					</div>
				</div><!-- #mobile-content -->
			</div><!-- .container -->
		</div><!-- .content --><?php

	endwhile;

endif;

?></div><?php

get_footer();