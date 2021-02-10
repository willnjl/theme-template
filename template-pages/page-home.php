<?php
/**
* Template Name: Homepage Default
*
* @package WordPress

* @since Twenty Fourteen 1.0
*/


get_header();

?>

<main id="main">
    <?php get_template_part( 'template-parts/banner', 'home' ) ?>
    <div class="first">
        <?php get_template_part( 'template-parts/section', 'panels' ) ?>
    </div>
        <section class="grey-bg--bottom">
            <?php get_template_part( 'template-parts/textblock', 'homepage' ) ?>
            <?php get_template_part( 'template-parts/section', 'trailer' ) ?>
            <?php get_template_part( 'template-parts/textblock', 'homepage--link' ) ?>
        </section>
        <?php get_template_part( 'template-parts/loops', 'client--homepage' ) ?>
        <?php get_template_part( 'template-parts/loops', 'posts--swiper' ) ?>
        <?php get_template_part( 'template-parts/form', 'small' ) ?>
    </div>
</main>

<?php get_footer() ?>
