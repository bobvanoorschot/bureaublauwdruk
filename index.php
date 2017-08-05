<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Bureau_Blauwdruk
 */
 get_header(); ?>

      <div class="page-title">
        <h1><?php the_title() ?></h1>
      </div>
      <div class="page-content">
        <div class="container">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


            <?php the_content(); ?>

          <?php endwhile; else : ?>

            <p><?php _e( 'Sorry, no pages found.' ); ?></p>
          <?php endif; ?>

        </div>
      </div>



<?php get_footer(); ?>
