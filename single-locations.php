<?php
/**
 * The template for displaying a single Location
 *
 * @package Mervis
 */

get_header();

if (have_posts()) :

	while (have_posts()) : the_post();

?><!-- ==================== PAGE HEADER ==================== -->
<div id="pageheadertext" class="pageheader" style="background-image:url(<?php echo get_pageheader_bg( 118 ); ?>);">
	<div class="headerpagesub" id="headerpagesub"><?php the_title(); ?></div>
</div><?php

	get_template_part( 'menus/menu', 'belowslider' );

?><!-- ==================== PAGE HEADER ==================== -->

<div class="content">
	<div class="container"><?php

		?><div class="fleft" id="mobile-content"><?php

			get_template_part( 'content', 'location' );

		?></div><!-- .mobile-content --><?php

		echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) );

	?></div><!-- .container -->
</div><!-- .content --><?php

	endwhile;
endif;

get_footer(); ?>