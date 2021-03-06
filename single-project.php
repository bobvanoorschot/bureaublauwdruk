<?php
/**
 * The project template file
 *
 * @package WordPress
 * @subpackage Bureau_Blauwdruk
 */
 get_header(); ?>

<div class="page-content">
  <div class="project-page">
    <div class="project-page-header" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
        <div class="page-title">
          <h1><?php the_title() ?></h1>
        </div>      
              
    </div>


          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            


            <?php the_content(); ?>

          <?php endwhile; else : ?>

            <p><?php _e( 'Sorry, no project found.' ); ?></p>
          <?php endif; ?>

        </div>
      </div>



<?php get_footer(); ?>
