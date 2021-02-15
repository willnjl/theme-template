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
    <?php get_template_part( 'template-parts/banner', 'post',  ) ?>
    <div class="wrap">
        <section class="textblock-content row">
            <div class="post-meta">
                <h3  class="p-l">
                    Reading time:
                </h3>
                <p class="p-l">
                    5mins
                </p>
                <?php get_template_part( 'template-parts/component', 'post-tags',  )?>
            </div>
            <div class="body">
                <?php echo get_field('content') ?>
            </div>
        </section>
    </div>
</main>
<script>
    let blackNav = false;
</script>


<?php get_footer() ?>
