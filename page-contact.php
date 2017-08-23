<?php
/*
Template Name: Contact Page
*/
/**
 * The contact page template
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
          <div class="contact-page">
            <div class="contact-page-content">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


                <?php the_content(); ?>

              <?php endwhile; else : ?>

                <p><?php _e( 'Sorry, no pages found.' ); ?></p>
              <?php endif; ?>
            </div>
            <div class="contact-page-form">
              <form class="form" action="" method="post">
                <h2>Neem contact met ons op.</h2>
                <div class="form-input">
                  <div class="form-input-label">
                    Naam &amp; achternaam
                  </div>
                  <div class="form-input-field">
                    <input type="text" name="naam" value="" placeholder="Uw voor- en achternaam">
                  </div>
                </div>
                <div class="form-input">
                  <div class="form-input-label">
                    E-mailadres
                  </div>
                  <div class="form-input-field">
                    <input type="text" name="email" value="" placeholder="Uw e-mailadres">
                  </div>
                </div>
                <div class="form-input">
                  <div class="form-input-label">
                    Telefoonnummer
                  </div>
                  <div class="form-input-field">
                    <input type="text" name="telefoon" value="" placeholder="Uw telefoonnummer">
                  </div>
                </div>
                <div class="form-input">
                  <div class="form-input-label">
                    Bericht
                  </div>
                  <div class="form-input-field">
                    <textarea name="" id="" cols="30" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-input">
                  <button type="submit">Verstuur formulier</button>
                </div>

              </form>
            </div>
          </div>


        </div>
      </div>



<?php get_footer(); ?>
