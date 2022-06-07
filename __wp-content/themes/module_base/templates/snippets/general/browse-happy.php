<?php 
/**
 * BrowseHappy snippet
 *
 * @param $site_name
 * @param $admin_email 
 *
 */	
?>
<!--[if lt IE 9]>
	<div class="browsehappy">
		<h1 class="medium title"><?= get_bloginfo( 'name' ) ?></h1>
		<p><?= __('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'bob') ?></p>
		<p><?= sprintf( __('If you have any questions, feel free to contact us at <a href="mailto:%1$s">%1$s</a>', 'bob'), $contact_email ) ?></p>
	</div>
<![endif]-->
<noscript>
	<div class="browsehappy">
		<h1 class="medium title"><?= $site_name ?></h1>
		<p><?= __('Our website need JavaScript to run properly. Please activate it and refresh your browser.', 'theme-blank') ?></p>
		<p><?= sprintf( __('If you have any questions, feel free to contact us at <a href="mailto:%1$s">%1$s</a>', 'theme-blank'), $admin_email ) ?></p>
	</div>
</noscript>