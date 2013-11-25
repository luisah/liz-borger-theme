<?php
/**
 * @package Liz Borger
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="single-menu menu-click">
			<ul class="list-inline">
				<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_down.png"></li>
			</ul>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content shadow">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'liz-borger' ),
				'after'  => '</div>',
			) );
		?>
		<div class="single-close menu-click">
			<ul class="list-inline">
				<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
				<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
				<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
				<li><span class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png"></span></li>
			</ul>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
