<?php
/**
 * @package Mervis
 */

global $mervis_themekit;

$fields = get_fields( get_the_ID() );

?><h1><?php the_title(); ?></h1>
<div>
	<div id="mobile-widthadj" class="fleft" style="width:334px;"><?php

	if ( ! empty( $fields['address1'] ) ) {

		?><div><?php echo esc_html( $fields['address1'] ); ?></div><?php

	}

	if ( ! empty( $fields['address2'] ) ) {

		?><div><?php echo esc_html( $fields['address2'] ); ?></div><?php

	}

	?><div><?php echo $fields['city']; ?>, <?php echo $fields['state']; ?> <?php echo $fields['zip']; ?></div>
	<div><?php esc_html_e( 'Phone: ', 'mervis' ); echo $mervis_themekit->make_phone_link( $fields['phone'] ); ?></div><?php

	if ( ! empty( $fields['fax'] ) ) {

		?><div><?php esc_html_e( 'Fax: ', 'mervis' ); echo esc_html( $fields['fax'] ); ?></div><?php

	}

	if ( ! empty( $fields['email'] ) ) {

		?><div><?php esc_html_e( 'Email: ', 'mervis' ); ?><a class="track" href="mailto:<?php echo sanitize_email( $fields['email'] ); ?>"><?php echo sanitize_email( $fields['email'] ); ?></a></div><?php

	}

	if ( ! empty( $fields['hours'] ) ) {

		?><div class="s12" style="padding-top:15px;"><?php esc_html_e( 'Hours', 'mervis' ); ?></div>
		<div class="s12" style="padding-left:15px;"><?php echo $fields['hours']; ?></div><?php

	}

	if ( ! empty( $fields['description'] ) ) {

		?><div class="s12" style="padding-left:15px;"><?php echo $fields['description']; ?></div><?php

	}

	if ( ! empty( $fields['servicearea'] ) ) {

		?><div class="s12" style="padding-left:15px;"><?php echo $fields['servicearea']; ?></div><?php

	}

	if ( ! empty( $fields['principalservices'] ) ) {

		?><div class="s12" style="margin-top:20px;"><u><?php esc_html_e( 'Principal Services', 'mervis' ); ?></u></div>
		<div class="s12" style="padding-left:15px;"><?php echo $fields['principalservices']; ?></div><?php

	}

	?></div><!-- #mobile-widthadj --><?php

	if ( is_single() ) {

		?><div class="locationform"><?php

			echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) );

		?></div><!-- .locationform --><?php

	}

	?><div class="fright" id="disablemap" style="width:325px;">
		<div><script>
			var map = null;
			function initialize() {
				var map_canvas = document.getElementById('<?php echo "map_canvas_" . get_the_ID(); ?>');
				var myLoc = new google.maps.LatLng(<?php echo $fields['lat']; ?>,<?php echo $fields['long']; ?>);
				var map_options = {
					center: myLoc,
					zoom: 12,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					disableDefaultUI: true
				}
				map = new google.maps.Map(map_canvas, map_options)

				var marker = new google.maps.Marker({
					position: myLoc,
					map: map,
					animation: google.maps.Animation.DROP,
				});
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<div id="map_canvas_<?php echo get_the_ID(); ?>" class="map_canvas"></div>
		<a class="track" href="https://www.google.com/maps?saddr=My+Location&daddr=<?php echo $fields['lat']; ?>,<?php echo $fields['long']; ?>" target="_blank"><?php esc_html_e( 'Map It', 'mervis' ); ?></a>

		</div>
	</div><!-- .fright -->
	<br style="clear:both" />

</div><!-- //wrapper div --><?php
