<?php
/**
* Template Name: Recruit Landing Default
*
* @package WordPress

* @since Twenty Fourteen 1.0
*/


get_header();

?>

<main id="main">
    <?php get_template_part( 'template-parts/banner', 'bannerless' ) ?>
    <div class="first grey-bg">
        <?php get_template_part( 'template-parts/loops', 'keypoints' ) ?>
        <?php get_template_part( 'template-parts/loops', 'client-marquee' ) ?>
    </div>
        <?php get_template_part('template-parts/loops', 'recruitment-posts') ?>
        <?php get_template_part('template-parts/loops', 'testimonial') ?>
        <?php //get_template_part( 'template-parts/loops', 'posts--swiper' ) ?>
        <?php // get_template_part( 'template-parts/form', 'small' ) ?>
        
    </div>
</main>



<?php get_footer() ?>
