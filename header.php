<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package furisode
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'furisode' ); ?></a>
	<header class="navigation" role="banner">
	  <div class="navigation-wrapper">
	    <a href="javascript:void(0)" class="logo">
	      <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_square.png" alt="Logo Image">
	    </a>
	    <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
	    <nav role="navigation">
	      <ul id="js-navigation-menu" class="navigation-menu show">
	        <li class="nav-link"><a href="javascript:void(0)">Products</a></li>
	        <li class="nav-link"><a href="javascript:void(0)">About Us</a></li>
	        <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
	        <li id="js-navigation-more" class="nav-link more"><a href="javascript:void(0)">More</a>
	          <ul class="submenu">
	            <li><a href="javascript:void(0)">Submenu Item</a></li>
	            <li><a href="javascript:void(0)">Another Item</a></li>
	            <li class="more"><a href="javascript:void(0)">Item with submenu</a>
	              <ul class="submenu">
	                <li><a href="javascript:void(0)">Sub-submenu Item</a></li>
	                <li><a href="javascript:void(0)">Another Item</a></li>
	              </ul>
	            </li>
	            <li class="more"><a href="javascript:void(0)">Another submenu</a>
	              <ul class="submenu">
	                <li><a href="javascript:void(0)">Sub-submenu</a></li>
	                <li><a href="javascript:void(0)">An Item</a></li>
	              </ul>
	            </li>
	          </ul>
	        </li>
	      </ul>
	    </nav>
	    <div class="navigation-tools">
	      <div class="search-bar">
	        <form role="search">
	          <input type="search" placeholder="Enter Search" />
	          <button type="submit">
	            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/search-icon.png" alt="Search Icon">
	          </button>
	        </form>
	      </div>
	    </div>
	  </div>
	</header>
	<div id="content" class="site-content">
