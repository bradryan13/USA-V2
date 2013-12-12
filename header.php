<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package USA Wheel Chair Rugby
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Type Kit -->
<script type="text/javascript" src="//use.typekit.net/duy5rgp.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
 
    <!-- Header and Nav -->

	
	<header id="masthead" role="banner">
		
		<div id="branding">
      		<h1><a href="<?php echo home_url(); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/usa-wheelchair-rugby-logo2x.png"> </a> </h1>
   		</div>

		<nav id="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'inline-list') ); ?>
		</nav>
	
	</header>

	<?php if ( ! dynamic_sidebar( 'hero' ) ) : ?>
	<?php endif; ?>

	 <!-- End Header and Nav -->

	<div id="content" class="site-content">
