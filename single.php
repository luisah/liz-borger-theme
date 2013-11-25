<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Liz Borger
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'single' ); ?>
            
            <div class="post-images">
   				<?php getPostAttachments(get_the_ID(), 'full'); ?>
            </div>

				<?php liz_borger_content_nav( 'nav-below' ); ?>

            <?php liz_borger_back_to_top(); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>