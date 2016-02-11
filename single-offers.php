<?php

get_header();

if (have_posts()) :

	while (have_posts()) : the_post();

		?><!-- ==================== PAGE HEADER ==================== -->
		<div id="pageheadertext" class="pageheader" style="background-image:url(<?php echo get_pageheader_bg( 118 ); ?>);">
			<div class="headerpagesub" id="headerpagesub">Offers</div>
		</div><?php

			get_template_part( 'menus/menu', 'belowslider' );

		?><!-- ==================== PAGE HEADER ==================== -->

		<div class="content">
			<div class="container"><?php

	endwhile;

endif;

		?><div class="fleft coupon" id="mobile-content">
			<div class="adj-padding bold s32 upper dred center" style="padding: 0 0 10px 0;">Special Offer</div>

			<div class="s22">
				<div class="adj-padding center medium s22">

					<div style="padding-bottom: 10px;"><?php the_title(); ?></div>
					<div style="padding-bottom: 10px;">One visit per customer. Offer ends <?php the_field('expiration'); ?>.</div>
					<div>Must show this coupon on your phone to redeem offer!</div>


				</div>
			</div>
		</div><!-- .mobile-content -->
	</div><!-- .container -->
</div><!-- .content --><?php

get_footer();