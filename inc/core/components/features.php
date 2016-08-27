<?php $query = new WP_Query(array('post_type' => 'simple_features')); ?>
<?php $columns = $atts['columns']; $columns = 100 / $columns; ?>
<div class="features-container">
	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>
			<div class="feature-container" style="width: <?= $columns ?>%">
				<div class="feature">
					<div class="feature-thumbnail">
						<?= the_post_thumbnail(); ?>
					</div>
					<div class="feature-content">
						<h2><?= the_title() ?></h2>
						<?= the_content() ?>
					</div>
				</div>
			</div>
	<?php endwhile; endif; ?>
</div>
