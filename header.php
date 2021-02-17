 <?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fiteenTen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="sidenav-open">

<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="wrap nav-bar">
			<div class="site-branding">
				<?php get_template_part( 'template-parts/component', 'logo',  ); ?>
			</div><!-- .site-branding -->
			 
			<div class="sidenav">
				<nav id="site-navigation" class="main-navigation">
					<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						)
					);
					?>
			</nav><!-- #site-navigation -->
			<div class="header__contact">
				<ul>
					<li><a href="tel:0117 427 1510">0117 427 1510</a></li>
					<li><a href="mailto:info@fifteenten.co.uk">info@fifteenten.co.uk</a></li>
					<li><a href="/">www.fifteenten.co.uk</a></li>
				</ul>

				<p>
					<address>36 King Street, Bristol, BS1 4DZ</address>
				</p>
				<p class="p-s">
					Fifteen Ten Ltd is a Limited Company in England and Wales. Registered Company Number 8016262. Registered Address Park House, 10 Park Street, Bristol, BS1 5HX. VAT registration number 170 2018 53.
				</p>
				<ul class="social-icons">
					<li class="social-icon"><a href=""><span class="fa fa-twitter"></span></a></li>
					<li class="social-icon"><a href=""><span class="fa fa-linkedin "></span></a></li>
					<li class="social-icon"><a href=""><span class="fa fa-instagram "></span></a></li>
				</ul>
			</div>
		</div>
			<button class="hamburger hamburger--squeeze" type="button" id="navicon">
	        <span class="hamburger-box">
	          <span class="hamburger-inner"></span>
	        </span>
		  </button>
		</div>
		<div class="bg-img" id="nav-mask"></div>

	</header><!-- #masthead -->
