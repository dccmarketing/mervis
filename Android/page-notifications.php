<?php /** Template Name: Android App - Notifications */ ?>
<?php load_template(TEMPLATEPATH . '/Android/header.php'); ?>


<div>


<!-- ========================= HEADER ========================== -->
	<div id="header" class="redgrad">
		<div class="fleft" style="padding: 18px 0px 0px 20px;width:21%;">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Back-Arrow-Icon.png">
		</div>
		<div class="fleft width50 white center s35 reg" style="padding: 28px 0 0 0;">
			Notifications
		</div>
		<div class="fright" style="text-align:right;padding: 0px 20px 0px 0px;width:21%">
			<a href="http://www.mervis.com">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Mervis-Badge-Icon-Small.png">
			</a>
		</div>
		<br style="clear:both" />
	</div>
<!-- ========================= HEADER ========================== -->


<!-- ========================= NOTIFICATION - UPDATES/PREFS ========================== -->
	<div id="price-contenttop" class="opaque">
		<div class="inner" style="padding:30px 0;">
			<div id="gettextupdates" class="redgrad center s35 bold">
				<a class="white" href="#">GET TEXT UPDATES</a>
			</div>
			<div id="accountprefs" class="reg s27 center">
				<img style="vertical-align:middle;padding: 0 10px;" src="<?php bloginfo('template_directory');?>/Android/images/User-Icon.png">
				<a class="white" href="#">Account Preferences</a>
			</div>
		</div>
	</div>
<!-- ========================= NOTIFICATION - UPDATES/PREFS ========================== -->


<!-- ========================= NOTIFICATION RED ========================== -->
	<div id="price-currentline">
		<div class="inner white s27 reg center">
			&nbsp; 
		</div>
	</div>
<!-- ========================= NOTIFICATION RED ========================== -->


<!-- ========================= NOTIFICATION CONTENT ========================== -->
<div id="notification-content">
	<div id="notification-content-text">
		<div class="notification-content">

			<?php $loop = new WP_Query( array( 'post_type' => 'notifications', 'posts_per_page' => 10 ) ); ?> 
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
				<div class="reg s27 grey" id="notelist">
					<div class="inner"><?php the_title(); ?></div>
				</div>
			<?php endwhile; ?>


		</div>
	</div>
</div>
<!-- ========================= NOTIFICATION CONTENT ========================== -->


<!-- ========================= NOTIFICATION FOOTER ========================== -->
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
			<img src="<?php bloginfo('template_directory');?>/Android/images/Form-Gray.png">
			</a>
		</div>
		<div class="fleft footericons">
			<a href="/android/notifications/">
			<img src="<?php bloginfo('template_directory');?>/Android/images/Notifications-Red.png">
			</a>
		</div>
		<br style="clear:both" />
	</div>
<!-- ========================= NOTIFICATION FOOTER ========================== -->


</div>


<?php load_template(TEMPLATEPATH . '/Android/footer.php'); ?>