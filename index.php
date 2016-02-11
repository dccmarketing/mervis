<?php

get_header();

?><!-- =================== SLIDER ==================== -->
<div id="fpslider"><?php

	putRevSlider("fpslider");

?></div>
<!-- =================== SLIDER ==================== -->

<div class="container"></div>

<!-- =================== MENU BOXES ==================== -->
<div class="container fpmenuboxes">
	<div class="fpmenubox">
		<a class="fpmenutitle track" href="<?php echo site_url(); ?>/mervis-behind-the-name/who-is-mervis/" class="fpmenutitle">About Mervis</a>
		<div class="fpmenuboxcontent"><?php

			get_template_part( 'menus/menu', 'about' );

		?></div>
	</div>
	<div class="fpmenubox">
		<a class="fpmenutitle track" href="<?php echo site_url(); ?>/personal-recycling/how-to-get-paid-for-scrap/" class="fpmenutitle">Personal Recycling</a>
		<div class="fpmenuboxcontent"><?php

			get_template_part( 'menus/menu', 'personal' );

		?></div>
	</div>
	<div class="fpmenubox">
		<a class="fpmenutitle track" href="<?php echo site_url(); ?>/industrial-recycling/recycling-management/" class="fpmenutitle">Industrial Recycling</a>
		<div class="fpmenuboxcontent"><?php

			get_template_part( 'menus/menu', 'industrial' );

		?></div>
	</div>
	<div class="fpmenubox">
		<a class="fpmenutitle track" href="<?php echo site_url(); ?>/recycling-education/who-recycles/" class="fpmenutitle">Recycling Education</a>
		<div class="fpmenuboxcontent"><?php

			get_template_part( 'menus/menu', 'education' );

		?></div>
	</div>
	<br style="clear:both" />
</div>
<!-- =================== MENU BOXES ==================== --><?php

get_footer();