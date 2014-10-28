<?php /** Template Name: Android App - Pricelist */ ?>
<?php load_template(TEMPLATEPATH . '/Android/header.php'); ?>


<div>


<!-- ========================= HEADER ========================== -->
	<div id="header" class="redgrad">
		<div class="fleft" style="padding: 18px 0px 0px 20px;width:21%;">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Back-Arrow-Icon.png">
		</div>
		<div class="fleft width50 white center s35 reg" style="padding: 28px 0 0 0;">
			Price List
		</div>
		<div class="fright" style="text-align:right;padding: 0px 20px 0px 0px;width:21%">
			<a href="http://www.mervis.com">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Mervis-Badge-Icon-Small.png">
			</a>
		</div>
		<br style="clear:both" />
	</div>
<!-- ========================= HEADER ========================== -->


<!-- ========================= PRICE DROPDOWNS ========================== -->
	<div id="price-contenttop" class="opaque">
		<div class="inner">
			<div>DROPDOWN1</div>
			<div>DROPDOWN2</div>
		</div>
	</div>
<!-- ========================= PRICE DROPDOWNS ========================== -->


<!-- ========================= PRICE CURRENT PRICE ========================== -->
	<div id="price-currentline">
		<div class="inner white s27 reg center">
			Current Price as of X
		</div>
	</div>
<!-- ========================= PRICE CURRENT PRICE ========================== -->


<!-- ========================= PRICE CONTENT ========================== -->
	<div id="price-content">
		<div id="price-content-text">
			<div class="inner price-content">
				<div class="fleft">
					<?php echo do_shortcode('[ULWPQSF id=377 formtitle="0"]'); ?>
				</div>
				<div class="fleft">></div>
				<br style="clear:both" />
			</div>
		</div>
	</div>
<!-- ========================= PRICE CONTENT ========================== -->


<!-- ========================= PRICE DISCLAIMER ========================== -->
	<div id="price-disclaimer" class="opaque">
		<div class="inner reg s13 white center">
			These prices are based upon regional ranges and are subject to change without notice.<br />Contact any Mervis location for custom quotes on large or unique loads.
		</div>
	</div>
<!-- ========================= PRICE DISCLAIMER ========================== -->


<!-- ========================= PRICE FOOTER ========================== -->
	<div id="price-footer">
		<div class="fleft footericons">
			<a href="/android/price-list/">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Price-Red.png">
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
			<img src="<?php bloginfo('template_directory');?>/Android/images/Form-Gray.png">
			</a>
		</div>
		<div class="fleft footericons">
			<a href="/android/notifications/">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Notifications-Gray.png">
			</a>
		</div>
		<br style="clear:both" />
	</div>
<!-- ========================= PRICE FOOTER ========================== -->


</div>


<?php load_template(TEMPLATEPATH . '/Android/footer.php'); ?>