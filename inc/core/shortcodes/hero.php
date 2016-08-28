<?php

function simple_create_hero ($atts, $content) {
	$atts = shortcode_atts(array(
		'height' => '100vh',
		'background-image' => ''
	), $atts, 'simple_create_hero');


	require(THEMEDIR . '/inc/core/components/hero.php');
}

add_shortcode('simple_create_hero', 'simple_create_hero');
