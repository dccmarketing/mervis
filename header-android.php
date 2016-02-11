<?php
/**
 * Header Name: Android Header
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" /><?php

wp_head();

?></head>

<body style="margin:0;" <?php body_class( 'android' ); ?>>
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
<header class="">
	<div class="wrapper">
		<div class="screen-title"><?php

			the_title();

		?></div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/mobile-logo.png" class="mervis-logo" />
	</div><!-- .wrapper -->
</header>