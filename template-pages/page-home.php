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
</main>
</script>
<?php get_footer() ?>
