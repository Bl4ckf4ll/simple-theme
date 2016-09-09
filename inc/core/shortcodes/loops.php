<?php
function simple_get_loop ($atts) {
	$atts = shortcode_atts(array(
			'loop' => 'default',
			'cat' => ''
		), $atts, 'simple_get_loop');

	switch ($atts['loop']) {
		case 'default':
				ob_start();
				require(THEMEDIR . '/inc/core/loops/default.php');
				return ob_get_clean();
			break;
		case 'masonry':
				ob_start();
				require(THEMEDIR . '/inc/core/loops/masonry.php');
				return ob_get_clean();
			break;
		default:
				ob_start();
				require(THEMEDIR . '/inc/core/loops/default.php');
				return ob_get_clean();
			break;
	}
}

add_shortcode('simple_get_loop', 'simple_get_loop');

?>
