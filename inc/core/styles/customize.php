<?php

function simple_customize_css () {
	$main_color = get_theme_mod('main_color', '#f44336');
	$accent_color = get_theme_mod('accent_color', '#607d8b');
	?>
		<style media="screen">
			a {
				color: <?= $main_color ?>
			}

			a:hover {
				color: <?= $main_color ?>;
			}

			.btn-primary,
			.btn-primary,
			button,
			input[type="submit"],
			.side-nav-open {
				background-color: <?= $main_color ?>;
			}

			.btn-primary:hover {
				background-color: <?= $main_color ?>;
			}

			.featured-posts .featured-post,
			.nav .navbar-nav .current_page_item,
			.single-thumbnail {
				background-color: <?= $accent_color ?>;
			}
		</style>
		<style media="screen">
			<?= get_theme_mod('custom_styles'); ?>
		</style>
	<?php
}

add_action('wp_head', 'simple_customize_css');

?>
