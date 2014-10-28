<?php /** Template Name: Android App Home */ ?>
<?php load_template(TEMPLATEPATH . '/Android/header.php'); ?>


<div class="site center">
	<div style="padding:30px 0 65px;">
		<img src="<?php bloginfo('template_directory');?>/Android/images/Mevis-Badge-Icon-Large.png">
	</div>
	<div class="opaque">
		<div class="med s31 white upper" style="padding: 20px 0 10px 0;">
			Login to your account
		</div>
		<div>
			<?php if  (function_exists ('wplb_login'))   { wplb_login(); } ?>
		</div>
	</div>
</div>


<?php load_template(TEMPLATEPATH . '/Android/footer.php'); ?>