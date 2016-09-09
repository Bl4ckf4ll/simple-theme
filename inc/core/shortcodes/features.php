<?php
function simple_get_features ($atts) {
	$atts = shortcode_atts(array(
		'columns' => '2'
	), $atts, 'simple_get_features');

	ob_start();

	require(THEMEDIR . '/inc/core/components/features.php');

	return ob_get_clean();
}

add_shortcode('simple_get_features', 'simple_get_features');
?>
