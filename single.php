<?php get_header(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="single-thumbnail col-xs-12 parallax-container" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
				</div>
			<div class="container-fluid single-content-wrapper">
				<div class="single-container col-md-8 col-xs-12">
					<!-- post -->
					<div <?php post_class() ?>>
						<div class="col-xs-12">
							<h1><?php the_title() ?></h1>
							<?php the_content() ?>
						</div>
					</div>
					<div class="comments col-xs-12">
						<?php comments_template() ?>
					</div>
				</div>
				<div id="main-sidebar" class="sidebar sidebar-container col-md-4 col-xs-12">
					<?php dynamic_sidebar('sidebar') ?>
				</div>
			</div>
		<?php endwhile; ?>
			<!-- post navigation -->
		<?php else: ?>
			<!-- no posts found -->
		<?php endif; ?>
<?php get_footer(); ?>
