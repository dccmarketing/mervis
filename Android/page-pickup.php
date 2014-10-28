<?php /** Template Name: Android App - Pickup */ ?>
<?php load_template(TEMPLATEPATH . '/Android/header.php'); ?>


<div>


<!-- ========================= HEADER ========================== -->
	<div id="header" class="redgrad">
		<div class="fleft" style="padding: 18px 0px 0px 20px;width:21%;">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Back-Arrow-Icon.png">
		</div>
		<div class="fleft width50 white center s35 reg" style="padding: 28px 0 0 0;">
			Pick-Up
		</div>
		<div class="fright" style="text-align:right;padding: 0px 20px 0px 0px;width:21%">
			<a href="http://www.mervis.com">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Mervis-Badge-Icon-Small.png">
			</a>
		</div>
		<br style="clear:both" />
	</div>
<!-- ========================= HEADER ========================== -->


<!-- ========================= PICKUP DROPDOWNS ========================== -->
	<div id="price-contenttop" class="opaque">
		<div class="inner" style="padding:20px 0;">
			<?php echo do_shortcode('[formidable id=2]'); ?>
		</div>
	</div>
<!-- ========================= PICKUP DROPDOWNS ========================== -->


<!-- ========================= PICKUP FOOTER ========================== -->
	<div id="price-footer">
		<div class="fleft footericons">
			<a href="/android/price-list/">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Price-Gray.png">
			</a>
		</div>
		<div class="fleft footericons">
			<a href="/android/calculator/">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Calculator-Gray.png">
			</a>
		</div>
		<div class="fleft footericons">
			<a href="/android/locator/">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Locator-Pin-Gray.png">
			</a>
		</div>
		<div class="fleft footericons">
			<a href="/android/pickup-request/">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Form-Red.png">
			</a>
		</div>
		<div class="fleft footericons">
			<a href="/android/notifications/">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Notifications-Gray.png">
			</a>
		</div>
		<br style="clear:both" />
	</div>
<!-- ========================= PICKUP FOOTER ========================== -->


</div>


<?php load_template(TEMPLATEPATH . '/Android/footer.php'); ?>