<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

        <nav class="desktop-navigation teal" role="navigation">
            <div class="nav-wrapper container">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="#">Navbar Link</a></li>
              </ul>
        
              <ul id="nav-mobile" class="side-nav teal">
                <li><a href="#">Navbar Link</a></li>
                <li><a href="#">Navbar Link</a></li>
                <li><a href="#">Navbar Link</a></li>
                <li><a href="#">Navbar Link</a></li>
                <li><a href="#">Navbar Link</a></li>
              </ul>
              <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
          </nav>
        </div>
	</header><!-- #masthead -->
      <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="http://materializecss.com/images/parallax2.jpg" alt="Unsplashed background img 1"></div>
  </div>
	<div id="content" class="site-content">
	    <div class="container">
