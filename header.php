<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />


<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

</head>

<body style="margin:0;" <?php body_class(); ?>>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NVDV4B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NVDV4B');</script>
<!-- End Google Tag Manager -->

<!-- =================== HEADER ==================== -->
<div id="header" class="redgrad">
	<div class="container">
		<div id="logo" class="fleft float">
			<a class="track" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"></a>
		</div>
		<div id="logotext" class="fleft">
			<a class="track" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logotext.png"></a>
		</div>
		<div id="topmenu" class="fright">
			<div class="search">
				<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				<label>
					<input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
				</form>
			</div>
			<div class="upper-tab facebook">
				<a class="track" href="https://www.facebook.com/mervisindustries" target="_blank">
					<span class="dashicons dashicons-facebook-alt"></span>
				</a>
          	</div>
			<div class="upper-tab customer-login">
				<a class="track" href="https://clientweb.mervis.com/Default.asp" target="_blank">
					<span class="dashicons dashicons-dashboard"></span><span class="tab-label">Client Login</span>
				</a>
           </div>
           <div class="upper-tab">
				<a class="track" href="<?php echo site_url( '/texting/' ); ?>" target="_blank">
					<span class="dashicons dashicons-phone"></span> <span class="tab-label">Text Club</span>
				</a>
           </div>
           <div class="upper-tab">
				<a class="track" target="_blank" href="http://www.mervis.com/texting/scrap-app/">
					<span class="dashicons dashicons-smartphone"></span><span class="tab-label">Scrap App</span>
				</a>
           </div>
		</div>
		<div class="header-menu"><?php

			get_template_part( 'menus/menu', 'header' );

		?></div><br style="clear:both" />
	</div>
</div>
<!-- =================== HEADER ==================== -->