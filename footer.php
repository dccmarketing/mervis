<?php

if ( is_home() || is_front_page() ) :

?><!-- =================== NEWS BOX ==================== -->

<div id="fpnewsbox">
	<div class="container">
		<div class="white upper boldital s26">Mervis News</div>
		<div class="white">
			<?php if (have_posts()) : ?>
			<?php query_posts("showposts=3"); ?>
			<?php while (have_posts()) : the_post(); ?>
				<div id="fpblogs" class="fleft">
				<div class="bold dred s18 pad5">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
				<div class="reg s16 white"><?php
$strings = preg_split('/(\.|!|\?)\s/', strip_tags($post->post_content), 2, PREG_SPLIT_DELIM_CAPTURE);
echo apply_filters('the_content', $strings[0] .  $strings[1]);
?></div>
				<div class="right upper bold s13 pad5"><a class="dred" href="<?php the_permalink(); ?>">Read More...</a></div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
		<br style="clear:both" />
		</div>
	</div>
</div>
<!-- =================== NEWS BOX ==================== --><?php

endif;

?><!-- =================== FOOTER CONTENT ==================== -->

<footer id="footer" class="footer<?php 
	if ( is_home() || is_front_page() ) {

		echo ' home'; 

	} ?>">
	<div class="footer-wrap">
		<div class="fleft" id="footercon">
			<div class="pad5 footer-title">Who is MERVIS?</div>
			<div class="reg s14"><?php the_field('whois','178'); ?></div>
		</div>
		<div class="fleft" id="footer-whatdoes">
			<div class="pad5 footer-title">What does MERVIS offer?</div>
			<div class="reg s14 footer-text">
				<?php if(get_field('whatdoes','178')): ?>
				<?php while(has_sub_field('whatdoes','178')): ?>
				      <div style="line-height:28px;">• <?php the_sub_field('service'); ?></div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="fleft" id="footer-links">
			<div class="pad5" style="line-height:28px;">
				<?php if(get_field('links','178')): ?>
				<?php while(has_sub_field('links','178')): ?>
				      <div class="footlinks">
						<a href="<?php the_sub_field('link'); ?>">
						<?php the_sub_field('title'); ?>
						</a>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<br style="clear:both" />
	</div>
</footer>
<!-- =================== FOOTER CONTENT ==================== -->


<!-- =================== COPYRIGHT ==================== -->
<div id="copyright" class="container grey center reg s12">
	© MERVIS 2014 - All Rights Reserved | <a href="/privacy-policy/">Privacy</a> | <a href="/terms-of-use/">Terms of Use</a> | <a href="/site-map/">Site Map</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Site designed and developed by <a href="http://www.dccmarketing.com" target="_blank">DCC Marketing</a>
</div>
<!-- =================== COPYRIGHT ==================== -->


<!-- =================== MOBILE COPYRIGHT ==================== -->
<div id="mobile-copyright" class="container grey center reg s12">
	<div>© MERVIS 2014 - All Rights Reserved</div>
	<div>Site designed and developed by <a href="http://www.dccmarketing.com" target="_blank">DCC Marketing</a></div>

</div>
<!-- =================== MOBILE COPYRIGHT ==================== -->


<?php wp_footer(); ?> 
</body>
</html>