<?php
/**
* 
*
* @package WordPress

* @since Twenty Fourteen 1.0
*/


get_header();


$auth_img = get_field('author_image');
$author = get_field('author');
$author_bio = get_field('author_bio') ;
?>

<main id="main">
    <article>
        <?php get_template_part( 'template-parts/banner', 'project',  ) ?>
        <section>
            <div class="wrap">
                <?php get_template_part( 'template-parts/flexible', 'projects',  ); ?>
            </div> <!-- wrap -->
        </section>
    </article>
    <?php get_template_part( 'template-parts/form', 'small' ) ?>
</main>
<script>
    let blackNav = true;
</script>


<?php get_footer() ?>
