<?php 
function simple_get_loop ($atts) {
	$atts = shortcode_atts(array(
			'loop' => 'default',
			'cat' => ''
		), $atts, 'simple_get_loop');

	switch ($atts['loop']) {
		case 'default':
				require(THEMEDIR . '/inc/core/loops/default.php');
			break;
		case 'masonry':
				require(THEMEDIR . '/inc/core/loops/masonry.php');
			break;
		default:
				require(THEMEDIR . '/inc/core/loops/default.php');
			break;
	}
}

add_shortcode('simple_get_loop', 'simple_get_loop');

?>