<?php
function simple_create_section ($atts, $content) {
	$atts = shortcode_atts(array(
		'type' => 'full',
		'background_color' => 'transparent',
		'background_image' => '',
		'styles' => ''
	), $atts, 'simple_create_section');

	switch ($atts['type']) {
		case 'full':
			$atts['type'] = 'container-fluid';
			break;
		case 'boxed':
			$atts['type'] = 'container';
			break;
		default:
			$atts['type'] = 'container';
			break;
	}

	ob_start();

	require(THEMEDIR.'/inc/core/components/sections.php');

	return ob_get_clean();
}

add_shortcode('simple_create_section', 'simple_create_section');
?>
