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
		<div><iframe width="325" height="280" frameborder="0" src="http://www.bing.com/maps/embed/viewer.aspx?v=3&cp=<?php the_field('lat'); ?>~<?php the_field('long'); ?>&lvl=12&w=325&h=280&sty=r&typ=s&pp=&ps=55&dir=0&mkt=en-us&src=SHELL&form=BMEMJS"></iframe></div>
		<div class="s12 right"><a href="http://www.bing.com/maps/?cp=<?php the_field('lat'); ?>~<?php the_field('long'); ?>&sty=r&lvl=12&sp=&mm_embed=map" target="_blank">View Larger Map</a></div>
	</div>
	<br style="clear:both" />

</div>