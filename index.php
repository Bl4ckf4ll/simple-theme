<?php get_header(); ?>
<div class="main-wrapper">
	<?php
		if (get_theme_mod('featured_posts')) {
			echo do_shortcode('[get_featured_posts]');
		}
	?>
	<div class="<?= get_theme_mod('loop_width'); ?> content-wrapper">
		<div class="posts-container col-md-8 col-xs-12">
			<?php
			
				if (get_theme_mod('loop_layout') == 'masonry') {
					echo do_shortcode('[simple_get_loop loop="masonry"]');
				} else {
					echo do_shortcode('[simple_get_loop loop="default"]');
				}
			
			?>
		</div>
		<div id="main-sidebar" class="sidebar sidebar-container col-md-4 col-xs-12">
			<?php dynamic_sidebar('sidebar') ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
