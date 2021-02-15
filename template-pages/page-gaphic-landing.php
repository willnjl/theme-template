<?php
/**
* Template Name:  Graphic landing Default
*
* @package WordPress

* @since Twenty Fourteen 1.0
*/


get_header();

?>


<main id="main">
    <?php get_template_part( 'template-parts/banner', 'bannerless' ) ?>
    <?php get_template_part( 'template-parts/banner', 'parallax--small' ) ?>
    <div class="first grey-bg">
        <?php get_template_part( 'template-parts/loops', 'keypoints' ) ?>
        <?php get_template_part( 'template-parts/loops', 'client-marquee' ) ?>
    </div>
        <?php get_template_part('template-parts/loops', 'recruitment-posts') ?>
        <?php get_template_part('template-parts/loops', 'testimonial') ?>
        <?php get_template_part( 'template-parts/form', 'small' ) ?>
        
    </div>
</main>

    <script>
        let blackNav = true;
    </script>


<?php get_footer() ?>
