<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Bureau_Blauwdruk
 * @since Bureau_Blauwdruk 1.0
 */
?><!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="header">
    <div class="header-logo">
      <?php bloginfo( 'name' ); ?>
    </div>
    <div class="main-menu">
			<?php
				$defaults = array(
						'menu' => 'header-menu',
						'menu_class' => '',
						'container' => 'nav',
						);
				wp_nav_menu( $defaults );
				// get_search_form();
			?>

    </div>

  </div>
  <div class="site-content">
