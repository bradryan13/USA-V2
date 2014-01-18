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

<div id="toolbar">
<ul class="inline-list">
<li><a href="#"><i style="line-height: 35px;" class="fa fa-caret-down"> </i> More</a></li>
<li><a href="#"><i style="line-height: 35px;" class="fa fa-facebook"> </i> 40,141 Likes</a></li>
<li><a href="#"><i style="line-height: 35px;" class="fa fa-twitter"> </i> 21,241 Followers</a></li>

</ul>
</div>

<div id="register">
<a>Join USA Rugby <i style="padding-left: 5px;" class="fa fa-chevron-circle-right"></i></a>
</div>


<div id="page">
 
    <!-- Header and Nav -->

	
	<header id="masthead" role="banner">
		<div class="header-container">
			<div id="branding">
	      		<h1><a href="<?php echo home_url(); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"> </a> </h1>
	   		</div>

			<nav id="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'inline-list') ); ?>
			</nav>
		</div>
	</header>

	 <!-- End Header and Nav -->

	<div id="content" class="site-content">


