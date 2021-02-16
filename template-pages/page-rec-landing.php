<?php
/**
* Template Name:  Recruitment landing Default
*
* @package WordPress

* @since Twenty Fourteen 1.0
*/


get_header();

?>


<main id="main">
    <?php get_template_part( 'template-parts/banner', 'bannerless' ) ?>
    <section class="no-pad grey-bg--bottom">
        <div class="wrap ">
            <div class="col two-thirds">
                    <div class="trailer">
                        <iframe src="https://player.vimeo.com/video/472618407"  ></iframe>
                       
                    </div>
                </div>
        </div>
    </section>

    <div class="first grey-bg">
        <?php get_template_part( 'template-parts/loops', 'keypoints' ) ?>
        <?php get_template_part( 'template-parts/loops', 'client-marquee' ) ?>
    </div>
        <?php get_template_part('template-parts/loops', 'recruitment-posts') ?>
        <?php get_template_part('template-parts/loops', 'testimonial') ?>
        <?php get_template_part( 'template-parts/banner', 'parallax--small' ) ?>
        <?php get_template_part( 'template-parts/form', 'small' ) ?>
        
    </div>
</main>

    <script>
        let blackNav = true;
    </script>


<?php get_footer() ?>
