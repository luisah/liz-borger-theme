<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Liz Borger
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class('gradient'); ?>>
<div id="page" class="hfeed site container">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="header-container">
				<div class="site-branding">
					<h1 class="site-title page-header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<span class="happy-face"><img src="<?php echo get_template_directory_uri(); ?>/images/happy_face.png"></span>
				</div>
				<div class="submenu menu-click">
					<div class="about-menu">
						<ul class="list-inline">
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
						</ul>
					</div>
					<div class="about-content shadow">
						<?php $the_query = new WP_Query( 'pagename=about' ); ?>
						<?php if ( $the_query->have_posts() ) : ?>
						  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						    <?php the_content(); ?>
						  <?php endwhile; ?>
						  <?php wp_reset_postdata(); ?>
						<?php endif; ?>
						<div class="about-close">
							<ul class="list-inline">
								<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
								<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
								<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
								<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="projects-list menu-click">
					<div class="list-menu">
						<ul class="list-inline">
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
						</ul>
					</div>
					<div class="list-content shadow">
						<?php projectsList(); ?>
						<div class="projects-list-close">
							<ul class="list-inline">
								<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
								<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
								<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
								<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div class="projects-list list-mobile menu-click pull-right clearfix">
			<div class="list-menu">
				<ul class="list-inline">
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
				</ul>
			</div>
			<div class="list-content shadow">
				<?php projectsList(); ?>
				<div class="projects-list-close">
					<ul class="list-inline">
						<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
						<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
						<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
						<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
					</ul>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
