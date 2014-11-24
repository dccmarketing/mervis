<?php
/**
 * @package Mervis
 */
?>

<h1><?php the_title(); ?></h1>
<div>
	<div id="mobile-widthadj" class="fleft" style="width:334px;">

	<?php if( get_field('address1') ): ?>
	<div><?php the_field('address1'); ?></div>
	<?php endif; ?>

	<?php if( get_field('address2') ): ?>
	<div><?php the_field('address2'); ?></div>
	<?php endif; ?>

	<div><?php the_field('city'); ?>, <?php the_field('state'); ?> <?php the_field('zip'); ?></div>

	<div>Ph: <?php the_field('phone'); ?></div>

	<?php if( get_field('fax') ): ?>
	<div>Fax: <?php the_field('fax'); ?></div>
	<?php endif; ?>

	<div>Email: 
	<?php if(get_field('email')): ?>
		<span><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></span>
	<?php endif; ?>
	</div>

	<?php if( get_field('hours') ): ?>
	<div class="s12" style="padding-top:15px;">Hours</div>
	<div class="s12" style="padding-left:15px;"><?php the_field('hours'); ?></div>
	<?php endif; ?>

	<?php if( get_field('description') ): ?>
	<div class="s12" style="padding-top:15px;"><?php the_field('description'); ?></div>
	<?php endif; ?>

	<?php if( get_field('servicearea') ): ?>
	<div class="s12" style="padding-top:15px;"><?php the_field('servicearea'); ?></div>
	<?php endif; ?>

	<?php if( get_field('principalservices') ): ?>
	<div class="s12" style="margin-top:20px;"><u>Principal Services</u></div>
	<div class="s12" style="text-align: left;"><?php the_field('principalservices'); ?></div>
	<?php endif; ?>

	</div>
	<div class="fright" id="disablemap" style="width:325px;">
		<div><script>
			var map = null;
			function initialize() {
				var map_canvas = document.getElementById('<?php echo "map_canvas_" . get_the_ID(); ?>');
				var myLoc = new google.maps.LatLng(<?php the_field('lat'); ?>,<?php the_field('long'); ?>);
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
		<a href="https://www.google.com/maps?saddr=My+Location&daddr=<?php the_field('lat'); ?>,<?php the_field('long'); ?>" target="_blank">Get Directions</a>
		
		</div>
	</div><!-- .fright -->
	<br style="clear:both" />

</div><!-- //wrapper div -->