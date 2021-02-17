        
<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

<div class="padding grey-bg--bottom">
	<div class="wrap">
		
			<ul class="loop--two-col">
				<?php
		if ( $query->have_posts() ) :?>
					<?php while($query->have_posts()): $query->the_post(); ?>
						<?php get_template_part( 'template-parts/content',  'post-card' ) ?>
					<?php endwhile; wp_reset_query() ?>
				
		</ul>
			<p class="link">	Page <?php echo $query->query['paged']; ?> of <?php echo $query->max_num_pages; ?><br /> </p>
				
				<div class="pagination">
					
					<div class="nav-previous"><?php next_posts_link( 'Older posts', $query->max_num_pages ); ?></div>
					<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
					<?php
				/* example code for using the wp_pagenavi plugin */
				if (function_exists('wp_pagenavi'))
				{
					echo "<br />";
					wp_pagenavi( array( 'query' => $query ) );
				}
				?>
			</div>
		<?php else :?>
			<h3>No Results</h3>
			
			<?php endif;?>
			

<script>
	let pagi = document.querySelector('.wp-pagenavi');
	let form = document.querySelector('#blog-search');
	pagi.addEventListener('click', () => {
		form.scrollIntoView({behavior: 'smooth'})
	})
</script>
        
        