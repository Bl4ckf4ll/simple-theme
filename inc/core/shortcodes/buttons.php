<?php
	function simple_create_button ($atts, $content) {
		$atts = shortcode_atts(array(
			'type' => 'primary',
			'el' => 'a',
			'href' => '#'
		), $atts, 'simple_create_button');

		ob_start();

		require(THEMEDIR . '/inc/core/components/buttons.php');

		return ob_get_clean();
	}

	add_shortcode('simple_create_button','simple_create_button');
?>
