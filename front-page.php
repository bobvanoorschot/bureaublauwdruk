<?php get_header(); ?>

<?php
  $loop = new WP_Query( array( 'post_type' => 'project', 'ignore_sticky_posts' => 1 ) );
  if ( $loop->have_posts() ) :
      while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <?php if ( has_post_thumbnail() ) { ?>
          <div class="project" style="background-image: url('<?php get_the_post_thumbnail_url() ?>')">
                  <div class="project-image">
                      <a href="<?php the_permalink(); ?>">

                        <div class="project-title">
                          <h2><?php echo get_the_title(); ?></h2>
                          <?php echo get_the_post_thumbnail_url(); ?>
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

<?php get_footer(); ?>
