<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#header-php
 *
 * @package Escapade
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98711802-1', 'auto');
  ga('send', 'pageview');

</script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php do_action( 'primer_body_inside' ); ?>

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'primer' ); ?></a>

	<?php do_action( 'primer_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner"<?php if ( primer_has_hero_image() ) : ?> style="background:url('<?php echo esc_url( primer_get_hero_image() ); ?>') no-repeat top center; background-size: cover;"<?php endif; ?>>

		<div class="side-masthead">

			<?php do_action( 'primer_header' ); ?>

			<?php do_action( 'primer_after_header' ); ?>
			
			<?php get_template_part( 'templates/parts/social-navigation' ); ?>

		</div>

		<?php get_template_part( 'templates/parts/hero' ); ?>

	</header><!-- #masthead -->

	<div id="page" class="hfeed site">

		<div id="content" class="site-content">
