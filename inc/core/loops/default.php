<?php $query = new WP_Query(array('category_name' => $atts['cat'])); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	<!-- post -->
	<div class="post-container col-xs-12">
		<div <?php post_class() ?>>
			<?php if (has_post_thumbnail()) : ?>
				<div class="post-thumbnail col-xs-12">
					<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt="" />
				</div>
			<?php endif; ?>
			<div class="col-xs-12">
				<h2><?php the_title() ?></h2>
				<?php the_excerpt() ?>
				<a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
			</div>
		</div>
	</div>
<?php endwhile; ?>
	<!-- post navigation -->
<?php else: ?>
	<!-- no posts found -->
<?php endif; ?>
