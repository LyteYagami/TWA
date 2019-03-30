<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Minamalist_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
   

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'minamalistblog' ); ?></a>
    
    <header class="blog-header py-3" role="banner">
          
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-6 pt-1">
            <a class="text-muted" href="#">TWA</a>
          </div>
          <div class="col-6 d-flex justify-content-end align-items-center">
              <!-- search magnifying glass -->
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>
        </div>
          
        <div class="text-center">
            <a class="blog-header-logo text-dark" href="#"><?php bloginfo('name'); ?></a>
        </div>
        
        <div class="blog-header-logo-footer text-center">
            <small><?php bloginfo('description'); ?></small>
            <!--<small id="tagline1">Eat</small>
                    <small>&bull;</small>
                    <small id="tagline2">Pray</small>
                    <small>&bull;</small>
                    <small id="tagline3">Explore</small>
            -->
        </div>
          
        <div class="nav-scroller"> 
            
            <?php 
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'container'         => 'nav',
                    'menu_class'        => 'nav d-flex justify-content-center'
                ));
            ?>
            
            <!--<nav class="nav d-flex justify-content-center">
              <a class="p-2 text-muted" href="#">Travel</a>
              <a class="p-2 text-muted" href="#">Food</a>
              <a class="p-2 text-muted" href="#">Mosque</a>
              <a class="p-2 text-muted" href="#">More M+Z</a>
            </nav>-->
        </div>
          
      </header>

	<!-- #masthead -->

	<div id="content" class="site-content">
