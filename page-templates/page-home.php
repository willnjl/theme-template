<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 * Template Name: Homepage Template
 * @package fiteenTen
 */

get_header();
?>

	<main id="primary" class="site-main">
	<section class="hero">
		<img src="<?= bloginfo('template_url') ; ?>/assets/home-banner.jpg" alt="" class="bg-img">
		<div class="wrap h-max">
			<div class="flex flex-align-center h-max">
				<h1 class="w-half ">Lorem ipsum dolor sit amet consectatur amulket <i class="fa fa-wine-glass"></i></h1>
			</div>
		</div>
	   </h1> 
	</section>
	</main><!-- #main -->

<?php
get_footer();
