<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<script type="text/javascript" src="//use.typekit.net/gio7rmo.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/mytheme.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/retina.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-color-2.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mytheme.js"></script>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="<?php echo  strtolower(str_replace(' ','-',get_the_title())); ?>">
	<div id="nav">
		<div class="mid-cont">
			<a class="logo" href="/"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" /></a>
			<div class="close"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/white-x.png" /></div>
		
			<?php $walker = new Menu_With_Description; ?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'walker' => $walker ) ); ?>
		</div>
	</div>
	<div id="header">
		<div class="mid-cont">
			<a class="logo" href="/"><img alt="" class="black" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /> <img alt="" class="white hidden" src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" /></a>
			<div class="hamburger"><img alt="" class="black" src="<?php echo get_template_directory_uri(); ?>/images/hamburger-icon.png" /><img alt="" class="white hidden" src="<?php echo get_template_directory_uri(); ?>/images/hamburger-white-icon.png" /></div>
		</div>

	</div>
	<div id="main-wrap" class="cont">