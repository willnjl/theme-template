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
    <div class="first">
        <?php //get_template_part( 'template-parts/loops', 'keypoints' ) ?>
    </div>
    <?php get_template_part( 'template-parts/loops', 'client-marquee' ) ?>
        <section class="grey-bg--bottom">
          
        </section>
     
        <?php get_template_part( 'template-parts/loops', 'posts--swiper' ) ?>
        <?php get_template_part( 'template-parts/form', 'small' ) ?>
        
    </div>
</main>



<?php get_footer() ?>
