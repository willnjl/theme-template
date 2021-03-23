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

<body class="">
	<div id="page" class="site">
	<header id="masthead" class="site-header header-pad">
		<div class="wrap nav-bar ">
			<div class="site-branding">
				<?php get_template_part( 'template-parts/component', 'logo',  ); ?>
			</div><!-- .site-branding -->
			 
			<div class="sidenav">
				<div class="wrap">
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
								<!-- additonal Info -->
				</div>
			</div>
			<div class="navicon-container header-pad">
					<div class="wrap">
					<button class="hamburger hamburger--squeeze" type="button" id="navicon">
						<div class="container">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</div>
					</button>
				</div>
				</div>
		</div>
		<div class="bg-img" id="nav-mask"></div>

	</header><!-- #masthead -->
