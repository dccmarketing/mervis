<?php

if ( is_home() || is_front_page() ) :

?><!-- =================== NEWS BOX ==================== -->

<div id="fpnewsbox">
	<div class="container">
		<div class="news-box">
			<div class="white upper boldital s26"><?php esc_html_e( 'Mervis News', 'mervis' ); ?></div>
			<div class="white"><?php

			$posts = mervis_get_posts( 'post', array( 'posts_per_page' => 2 ) );

			if ( $posts->have_posts() ) {

				while ( $posts->have_posts() ) { $posts->the_post();

					?><div id="fpblogs" class="fleft">
					<div class="bold dred s18 pad5">
						<a class="track" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<div class="reg s16 white"><?php
	$strings = preg_split('/(\.|!|\?)\s/', strip_tags($post->post_content), 2, PREG_SPLIT_DELIM_CAPTURE);
	echo apply_filters('the_content', $strings[0] .  $strings[1]);
	?></div>
					<div class="right upper bold s13 pad5"><a class="dred track" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More...', 'mervis' ); ?></a></div>
					</div><?php

				}
			}

			wp_reset_postdata();

			?></div>
		</div>
		<div class="video-box">
			<h3 class="video-header"><?php esc_html_e( 'Videos', 'merivs' ); ?></h3>
			<a class="track" href="<?php echo site_url( '/videos' ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/video.jpg" class="video-img">
			</a>
		</div>
	</div>
</div>
<!-- =================== NEWS BOX ==================== --><?php

else:

get_template_part( 'menu', 'footer' );

endif;

?><!-- =================== FOOTER CONTENT ==================== -->

<footer id="footer" class="footer<?php
	if ( is_home() || is_front_page() ) {

		echo ' home';

	} ?>">
	<div class="footer-wrap">
		<div class="footercon">
			<div class="pad5 footer-title"><?php esc_html_e( 'Who is MERVIS?', 'mervis' ); ?></div>
			<div class="reg s14"><?php the_field('whois','178'); ?></div>
		</div>
		<div class="whatdoes">
			<div class="pad5 footer-title"><?php esc_html_e( 'What does MERVIS offer?', 'mervis' ); ?></div>
			<div class="reg s14 footer-text">
				<?php if(get_field('whatdoes','178')): ?>
				<?php while(has_sub_field('whatdoes','178')): ?>
				      <div style="line-height:28px;">• <?php the_sub_field('service'); ?></div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="footer-links">
			<div class="pad5" style="line-height:28px;"><?php

				if( get_field( 'links','178' ) ):

					while( has_sub_field( 'links', '178' ) ): ?>
				    	<div class="footlinks">
							<a class="track" href="<?php the_sub_field( 'link' ); ?>"><?php
								the_sub_field( 'title' );
							?></a>
						</div><?php
					endwhile;
				endif;
			?></div>
		</div>
		<br style="clear:both" />
	</div>
</footer>
<!-- =================== FOOTER CONTENT ==================== -->


<!-- =================== COPYRIGHT ==================== -->
<div class="bottom">
	<div class="container">
		<div class="copyright">&copy <?php echo get_bloginfo( 'name' ) . ' ' . date( 'Y' ); ?> - <?php esc_html_e( 'All Rights Reserved', 'mervis' ); ?></div>
		<div class="links"> | <a class="track" href="/privacy-policy/"><?php esc_html_e( 'Privacy', 'mervis' ); ?></a> | <a class="track" href="/terms-of-use/"><?php esc_html_e( 'Terms of Use', 'mervis' ); ?></a> | <a class="track" href="/site-map/"><?php esc_html_e( 'Site Map', 'mervis' ); ?></a></div>
		<div class="credits"><?php esc_html_e( 'Site designed and developed by ', 'mervis' ); ?><a class="track" href="http://www.dccmarketing.com" target="_blank"><?php esc_html_e( 'DCC Marketing', 'mervis' ); ?></a></div>
	</div>
</div>
<!-- =================== COPYRIGHT ==================== -->

<?php wp_footer(); ?>
</body>
</html>