<!DOCTYPE html>
<html data-logged="<?= is_user_logged_in(); ?>">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<nav class="nav main-nav">
			<div class="container-fluid">
				<div class="navbar-header pull-left">
					<a class="navbar-brand text-uppercase text-light" href="<?= home_url(); ?>">
						<?php require_once(THEMEDIR . '/inc/core/components/site-identity.php'); ?>
					</a>
				</div>
				<div class="collapse navbar-collapse pull-right">
					<?php wp_nav_menu(array('menu' => 'main-menu', 'container' => 'ul', 'menu_class' => 'nav navbar-nav')); ?>
				</div>
				<div class="menu-button pull-right" data-target=".mobile-nav">
					<span class="bars"></span>
				</div>
			</div>
		</nav>
		<nav class="nav mobile-nav" data-side="left">
			<div class="navbar-header">
			</div>
			<?php wp_nav_menu(array('menu' => 'main-menu', 'container' => 'ul', 'menu_class' => 'nav navbar-nav')); ?>
		</nav>
