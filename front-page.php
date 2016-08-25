<?php get_header(); ?>
<div class="main-wrapper">
	<section id="hero">
		<div class="dark-overlay"></div>
		<div class="hero-content text-light text-center">
			<h1>Wordpress Simple Theme</h1>
			<h4>A Simple theme for great blogging</h4>
			<a class="btn btn-primary" href="#">Learn More</a>
		</div>
	</section>
	<section id="features" class="container-fluid">
		<div class="text-center">
			<h2 class="section-heading">Features</h2>
		</div>
		<div class="section-content">
			<div class="feature-container col-md-4 col-xs-12">
				<div class="feature text-center text-capitalize">
					<span class="icon-heart" aria-hidden="true"></span>
					<h2>Minimal</h2>
					<p>Minimal, Modern and Clean Interface</p>
				</div>
			</div>
			<div class="feature-container col-md-4 col-xs-12">
				<div class="feature text-center text-capitalize">
					<span class="icon-star" aria-hidden="true"></span>
					<h2>Featured Posts</h2>
					<p>You Can Select Featured Posts To display in a slider in the top of your blog page!</p>
				</div>
			</div>
			<div class="feature-container col-md-4 col-xs-12">
				<div class="feature text-center text-capitalize">
					<span class="icon-pen" aria-hidden="true"></span>
					<h2>Customizable</h2>
					<p>You Can Customize your theme! You can select fonts, colors, layouts and much more!</p>
				</div>
			</div>
			<div class="feature-container col-md-4 col-xs-12">
				<div class="feature text-center text-capitalize">
					<span class="icon-phone" aria-hidden="true"></span>
					<h2>Responsive</h2>
					<p>Compatible with all devices</p>
				</div>
			</div>
		</div>
	</section>
	<section id="contact" class="container-fluid section-red">
		<div class="text-center">
			<h2 class="section-heading text-light">Contact</h2>
		</div>
		<div class="container section-content">
			<?= do_shortcode('[wpforms id="24"]'); ?>
		</div>
	</section>
</div>
<?php get_footer(); ?>
