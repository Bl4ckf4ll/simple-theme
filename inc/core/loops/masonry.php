<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<div class="post-container col-lg-4 col-md-6 col-xs-12">
		<div <?php post_class() ?>>
			<?php if (has_post_thumbnail()) : ?>
				<div class="post-thumbnail">
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
