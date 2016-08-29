<?php if ($atts['type'] == 'container') : ?>
	<div class="container-fluid" style="
		background-image: url('<?= $atts['background_image']; ?>');
		background-color: <?= $atts['background_color']; ?>;
		<?= $atts['styles']; ?>">
		<div class="<?= $atts['type'] ?>">
			<?= do_shortcode($content); ?>
		</div>
	</div>
<?php else : ?>
	<div class="<?= $atts['type'] ?>" style="
		background-image: url('<?= $atts['background_image']; ?>');
		background-color: <?= $atts['background_color']; ?>;
		<?= $atts['styles']; ?>">
		<?= do_shortcode($content); ?>
	</div>
<?php endif; ?>
