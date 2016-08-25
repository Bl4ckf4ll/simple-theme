<?php
function simple_get_featured_posts ($atts) {
	$atts = shortcode_atts(array(
			'tag' => 'featured'
		), $atts, 'get_featured_posts');

	require_once(THEMEDIR . '/inc/core/components/featured-posts.php');
}

add_shortcode('get_featured_posts', 'simple_get_featured_posts');