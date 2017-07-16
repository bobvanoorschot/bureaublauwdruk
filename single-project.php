<?php
/**
 * The project template file
 *
 * @package WordPress
 * @subpackage Bureau_Blauwdruk
 */
 get_header(); ?>

      <div class="page-title">
        test
        <h1><?php the_title() ?></h1>
      </div>
      <div class="page-content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


          <?php the_content(); ?>

        <?php endwhile; else : ?>

          <p><?php _e( 'Sorry, no project found.' ); ?></p>
        <?php endif; ?>

      </div>



<?php get_footer(); ?>