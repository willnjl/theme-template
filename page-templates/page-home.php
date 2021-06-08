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
		<img src="<?= bloginfo('template_url') ; ?>/assets/img/banner-home.jpg" alt="" class="bg-img">
		<div class="wrap h-max">
			<div class="flex flex-align-center h-max">
				<h1 class="w-half ">
					<span class="text-blue">We're</span> open <span class="text-blue">again!</span>
				</h1>
			</div>
		</div>
	</section>
	<section>
		<div class="wrap">
			<div class="row-l two-cols">
				<div class="col rel">
					<img src="<?= bloginfo('template_url') ; ?>/assets/img/iframe.jpg" alt="" class="bg-img">
				</div>
				<div class="col">
					<h2>
						Welcome to St Werburghs Community Centre
					</h2>
					<p>
						Mauris consectetur ullamcorper mi, sit amet pulvinar purus pharetra ut. lacus euismod eu. Vivamus ac luctus purus, et iaculis sapien. Donec ac lorem suscipit, rhoncus elit ac, vulputate felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis ut elit porttitor, cursus leo in, aliquam magna. Maecenas feugiat nulla augue, id porttitor augue iaculis ac. Etiam molestie, tellus condimentum tempor viverra, orci ante ullamcorper leo
					</p>
				</div>
			</div>
		</div>
	</section>
	<section>
			<div class="wrap-wide">
				<div class="three-cols row-m">
					<div class="col">
						<img src="<?= bloginfo('template_url') ; ?>/assets/img/quicklink-1.jpg" alt="">
						<a href="#"></a>
					</div>
					<div class="col">
						<img src="<?= bloginfo('template_url') ; ?>/assets/img/quicklink-2.jpg" alt="">
						<a href="#"></a>
					</div>
					<div class="col">
						<img src="<?= bloginfo('template_url') ; ?>/assets/img/quicklink-3.jpg" alt="">
						<a href="#"></a>
					</div>
				</div>
			</div>	
	</section>

	<section>
		<div class="wrap">
			<div class="row-m three-col">
				<div class="col">
					<h4>Latest News</h4>
					<article class="">
						<img src="<?= bloginfo('template_url') ; ?>/assets/img/featured-img-1.jpg" alt="">
						<h1>
							<a href="#">Lorem ipsum dolor sit amet trium vium consectatur amulet</a>
						</h1>

						<p>
							Duis ut elit porttitor, cursus leo in, aliquam magna. Maecenas feugiat nulla augue, id porttitor augue iaculis ac feugiat nulla augue, id porttitor augue iaculis ac. Etiam molestie, 
						</p>
					</article>
				</div>
				<div class="col">
					<h4>Featured Event</h4>
					<article class="">
						<img src="<?= bloginfo('template_url') ; ?>/assets/img/featured-img-2.jpg" alt="">
						<h1>
							<a href="#">Lorem ipsum dolor sit amet trium vium consectatur amulet</a>
						</h1>

						<p>
							Duis ut elit porttitor, cursus leo in, aliquam magna. Maecenas feugiat nulla augue, id porttitor augue iaculis ac feugiat nulla augue, id porttitor augue iaculis ac. Etiam molestie, 
						</p>
					</article>
				</div>
				<div class="col">
					<h4>
						Service Spotlight:
					</h4>
					<article>
						<h1>
							Family & Wellbeing
						</h1>
						<a href="#">Lorem ipsum dolor sit amet trium vium consectatur amulet</a>

						<p>
							Duis ut elit porttitor, cursus leo in, aliquam magna. Maecenas feugiat nulla augue, id porttitor augue iaculis ac. Etiam molestie, tellus condimentum tempor viverra, orci
						</p>

						<ul class="grid">
							<li>
								<a href="#">Family</a>
							</li>
							<li>
								<a href="#">Advice</a>
							</li>
							<li>
								<a href="#">Wellbeing</a>
							</li>
							<li>
								<a href="#">Digital Inclusion</a>
							</li>
							<li>
								<a href="#">Learning</a>
							</li>
						</ul>
					</article>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="wrap">
			<div class="text-center text-purple gutter">
				<h3>Hire a Space</h3>
			</div>

			<div class="row-l three-cols">
				<div class="col">
					<p>
						Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati perspiciatis assumenda voluptatem ipsa, aliquam sunt neque sit quod sint similique eos necessitatibus? Molestiae tempora ex fugit facere. Molestiae, dolores magni!
					</p>
				</div>
				<div class="col">
					<form action="">
						<input type="text" name="" id="">
						<input type="text" name="" id="">
						<input type="text" name="" id="">
						<textarea name="" id="" cols="30" rows="10"></textarea>
					</form>
				</div>
				<div class="col">
					<img src="<?= bloginfo('template_url') ; ?>/assets/img/mini-photos.png" alt="">
				</div>
			</div>
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
