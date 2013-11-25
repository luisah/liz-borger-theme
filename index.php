<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Liz Borger
 */

get_header(); ?>

   <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

         <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>

            <?php $counter = 1; ?>

            <?php while ( have_posts() ) : the_post(); ?>

               <?php getAttachments(get_the_ID(), 'thumbnail', $counter); ?>
               <?php $counter++; ?>

            <?php endwhile; ?>

         <?php else : ?>

            <?php get_template_part( 'no-results', 'index' ); ?>

         <?php endif; ?>

      </main><!-- #main -->
   </div><!-- #primary -->

<?php get_footer(); ?>