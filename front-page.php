<?php get_header(); ?>

<div class="project-container">

<?php

  $loop = new WP_Query( array( 'post_type' => 'project', 'ignore_sticky_posts' => 1 ) );
  if ( $loop->have_posts() ) :
      while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <?php if ( has_post_thumbnail() ) { ?>
          <div class="project" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
            <div class="project-overlay">
                <a href="<?php the_permalink(); ?>">
                  <div class="project-title">
                    <h2><?php echo get_the_title(); ?></h2>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <button class="button">Lees meer</button>
                  </div>
                </a>
            </div>
          </div>
          <?php } else {
            echo "Project mist foto";
          } ?>
      <?php endwhile;
  endif;
  wp_reset_postdata();
?>

</div>

<?php get_footer(); ?>
