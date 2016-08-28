<?php

function simple_create_hero ($atts, $content) {
	$atts = shortcode_atts(array(
		'height' => '100vh',
		'background-image' => ''
	), $atts, 'simple_create_hero');

	ob_start();

	require(THEMEDIR . '/inc/core/components/hero.php');

	return ob_get_clean();
}

add_shortcode('simple_create_hero', 'simple_create_hero');
