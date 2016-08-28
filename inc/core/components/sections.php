<div class="<?= $atts['type'] ?>" style="
	background-image: url('<?= $atts['background_image']; ?>');
	background-color: <?= $atts['background_color']; ?>;
	<?= $atts['styles']; ?>">
	<?= do_shortcode($content); ?>
</div>
