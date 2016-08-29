<?php get_header(); ?>
<div class="main-wrapper">
	<div class="container content-wrapper">
		<div class="page-container col-md-8 col-xs-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->
				<div <?php post_class() ?>>
					<div class="post-thumbnail col-xs-12">
						<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt="" />
					</div>
					<div class="col-xs-12">
						<h1><?php the_title() ?></h1>
						<?php the_content() ?>
					</div>
				</div>
			<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>
		</div>
		<div class="sidebar sidebar-container col-md-4 col-xs-12">
			<?php dynamic_sidebar('sidebar') ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
