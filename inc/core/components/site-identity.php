<?php

$has_logo = (bool)get_theme_mod('site_logo');
$logo_url = get_theme_mod('site_logo');

if ($has_logo) {
	echo '<img class="img-logo" src="'. $logo_url .'">';
} else {
	echo bloginfo('name');
}

?>