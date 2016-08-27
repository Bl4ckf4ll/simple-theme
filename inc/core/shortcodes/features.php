<?php
function simple_get_features ($atts) {
	$atts = shortcode_atts(array(
		'columns' => '2'
	), $atts, 'simple_get_features');

	require(THEMEDIR . '/inc/core/components/features.php');
}

add_shortcode('simple_get_features', 'simple_get_features');
?>
