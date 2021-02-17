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
        <section class="">
            <div class="wrap">
                <?php get_template_part( 'template-parts/flexible', 'projects',  ); ?>
            </div> <!-- wrap -->
        </section>
    </article>
                    <div class="shares">
                        <ul>
                            <li>Written by <?= $author ?></li>
                            <li>Connect on <a href="<?= $author_linkedin ?>" class="link">Linkedin</a></li>
                            <li>Share this post on  <a href="https://www.linkedin.com/sharing/share-offsite/?url={<?= get_page_link() ?>}" class="link">Linkedin</a>, <a href="" class="link">Facebook</a> or <a href="" class="link">Twitter</a></li>
                        </ul>
                    </div> 
    <div class="grey-bg">
        <?php get_template_part( 'template-parts/loops', 'posts--swiper' ) ?>
    </div>
</main>
<script>
    let blackNav = true;
</script>


<?php get_footer() ?>
