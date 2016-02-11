<?php

get_header();

?><!-- ==================== PAGE HEADER ==================== -->
<div id="pageheadertext" class="pageheader" style="background-image:url(<?php echo get_pageheader_bg( 153 ); ?>);">
	<div class="headerpagesub" id="headerpagesub">Search Results</div>
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
		<div class="fleft">
			<div class="bold s32 upper dred"><?php

				printf( esc_html__( 'Search Results for: %s', 'mervis' ), '<span>' . get_search_query() . '</span>' );

			?></div><?php

			if (have_posts()) :

				while (have_posts()) : the_post();

					?><article id="post-<?php the_ID(); ?>" <?php post_class( 'justify medium s14' ); ?>>
						<header class="entry-header justcontent"><?php

							the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );

						?></header><!-- .entry-header -->
						<div class="entry-content"><?php

								the_excerpt();

						?></div><!-- .entry-content -->
					</article><!-- #post-## --><?php

				endwhile;

			endif;

		?></div>
	</div><!-- .container -->
</div><!-- .content --><?php

get_footer();