<?php
/**
* Template Name: About Default
*
* @package WordPress

* @since Twenty Fourteen 1.0
*/


get_header();

?>

<main id="main">
    <?php get_template_part( 'template-parts/banner', 'bannerless' ) ?>
    <?php get_template_part( 'template-parts/banner', 'parallax--small',  ); ?>
</main>

<script>
    let blackNav = true;
</script>


<?php get_footer() ?>
