<?php get_header(); ?>

<?php
  $loop = new WP_Query( array( 'post_type' => 'project', 'ignore_sticky_posts' => 1 ) );
  if ( $loop->have_posts() ) :
      while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="pindex">
              <?php if ( has_post_thumbnail() ) { ?>
                  <div class="pimage">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                  </div>
              <?php } ?>
              <div class="ptitle">
                  <h2><?php echo get_the_title(); ?></h2>
              </div>
          </div>
      <?php endwhile;
  endif;
  wp_reset_postdata();
?>

<?php get_footer(); ?>
