<?php get_header(); ?>


<!-- =================== SLIDER ==================== -->
<div id="fpslider">
	<?php putRevSlider("fpslider") ?>
</div>
<!-- =================== SLIDER ==================== -->

<div class="container">
	<div id="mobile-headermenu" class="center medium s24 white upper">
		<div><a href="<?php echo site_url(); ?>/news/">News</a></div>
		<div><a href="<?php echo site_url(); ?>/locations/">Locations</a></div>
		<div><a href="<?php echo site_url(); ?>/employment/">Employment</a></div>
		<div><a href="<?php echo site_url(); ?>/contact-us/">Contact Us</a></div>
	</div>
</div>

<!-- =================== MENU BOXES ==================== -->
<div id="fpmenuboxes" class="container">
	<div id="fpmenubox" class="fleft">
		<a href="<?php echo site_url(); ?>/recycling-education/who-recycles/">
		<div id="fpmenubox-t" class="redgrad medium s20 white upper center">
			Recycling Education
		</div>
		</a>
		<div id="fpimages"><img src="<?php the_field('image','126'); ?>"></div>
		<div id="fpmenubox-c" class="demi s18 center">
			<?php echo do_shortcode('[accordionmenu id="unique757b55" accordionmenu="201"]'); ?>
		</div>
	</div>
	<div id="fpmenubox" class="fleft">
		<a href="<?php echo site_url(); ?>/personal-recycling/how-to-get-paid-for-scrap/">
		<div id="fpmenubox-t" class="redgrad medium s20 white upper center">
			Personal Recycling 
		</div>
		</a>
		<div id="fpimages"><img src="<?php the_field('image','136'); ?>"></div>
		<div id="fpmenubox-c" class="demi s18 center">
			<?php echo do_shortcode('[accordionmenu id="uniqueec8ce40" accordionmenu="220"]'); ?>
		</div>
	</div>
	<div id="fpmenubox"  class="fleft">
		<a href="<?php echo site_url(); ?>/industrial-recycling/recycling-management/">
		<div id="fpmenubox-t" class="redgrad medium s20 white upper center">
			Industrial Recycling
		</div>
		</a>
		<div id="fpimages"><img src="<?php the_field('image','153'); ?>"></div>
		<div id="fpmenubox-c" class="demi s18 center">
			<?php echo do_shortcode('[accordionmenu id="unique060ad35" accordionmenu="221"]'); ?>
		</div>
	</div>
	<div id="fpmenubox"  class="fleft">
		<a href="<?php echo site_url(); ?>/mervis-behind-the-name/who-is-mervis/">
		<div id="fpmenubox-t" class="redgrad medium s20 white upper center" style="padding:5px 0 !important;">
			 Mervis<br />Behind The Name
		</div>
		</a>
		<div id="fpimages"><img src="<?php the_field('image','165'); ?>"></div>
		<div id="fpmenubox-c" class="demi s18 center">
			<?php echo do_shortcode('[accordionmenu id="uniquebcbe333" accordionmenu="222"]'); ?>
		</div>
	</div>
	<br style="clear:both" />
</div>
<!-- =================== MENU BOXES ==================== -->


<?php get_footer(); ?>