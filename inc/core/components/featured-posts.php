<div class="featured-posts" data-flickity='{"cellSelector": ".featured-post", "wrapAround": true, "autoPlay": 5000, "pauseAutoPlayOnHover": true}'>
	<?php
	$args = array('tag' => 'featured');
	$query = new WP_Query($args); ?>
	<?php if ($query->have_posts()) : ?>
		<?php while ($query->have_posts()) : $query->the_post(); ?>
			<div class="featured-post" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
				<?php if (has_post_thumbnail()) : ?>
					<div class="dark-overlay"></div>
				<?php endif; ?>
				<div class="featured-post-content col-xs-12 text-light">
					<h2><?php the_title(); ?></h2>
					<span>By: <strong><?php the_author(); ?></strong>,</span><span> <?= human_time_diff(get_post_time('U'), current_time('timestamp')); ?><strong> ago</strong></span>
					<div class="featured-read-more">
						<a class="btn radial-btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
