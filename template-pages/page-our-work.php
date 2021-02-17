<?php
/**
* Template Name:  Our Work Default
*
* @package WordPress

* @since Twenty Fourteen 1.0
*/


get_header();

?>


<main id="main">
    <?php get_template_part( 'template-parts/banner', 'bannerless' ) ?>
    <div class="wrap">
        <?php echo do_shortcode( '[searchandfilter id="161"]',  ); ?>
    </div>
    <div class="grey-grey-bg--bottom ">
        <?php echo do_shortcode( '[searchandfilter id="161" show="results"]',  ); ?>
    </div>
    </div>    
        <?php get_template_part( 'template-parts/form', 'small' ) ?>
    </div>
</main>

    <script>
        let blackNav = true;
    </script>


<?php get_footer() ?>
