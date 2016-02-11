<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Mervis
 *
 * @link 	http://yoast.com/wordpress-404-error-pages/
 */

get_header();

?><!-- ==================== PAGE HEADER ==================== -->
<div id="pageheadertext" class="pageheader" style="background-image:url(<?php echo get_pageheader_bg( 136 ); ?>);">
	<div class="headerpagesub" id="headerpagesub">Page Scrapped!</div>
</div><?php

	get_template_part( 'menus/menu', 'belowslider' );

?><!-- ==================== PAGE HEADER ==================== -->

<div class="content">
	<div class="container">
		<div id="content" class="narrowcolumn">
			<div class="breadcrumbs">
				<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				} ?>
			</div>
			<div class="fleft" id="mobile-content">

				<h1>Error 404</h1>

				<h2>It appears that page has been recycled.</h2>

				<p>Let me help you find what you came here for:</p>
				<p>
					<label for="s"><strong>Search</strong> for it:</label>
					<form style="display:inline;" action="<?php bloginfo( 'siteurl' ); ?>">
						<input type="text" value="<?php echo esc_attr( $s ); ?>" id="s" name="s"/> <input type="submit" value="Search"/>
					</form>
				</p>
				<p>
					<strong>If you typed in a URL...</strong> make sure the spelling, cApitALiZaTiOn, and punctuation are correct. Then try reloading the page.
				</p>
				<p>
					<strong>Start over again</strong> at my <a href="<?php bloginfo( 'siteurl' ); ?>">homepage</a> (and please contact me to say what went wrong, so I can fix it).
				</p>
			</div>
		</div>
	</div><!-- .container -->
</div><!-- .content --><?php

get_footer(); ?>