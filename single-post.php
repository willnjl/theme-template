<?php
/**
* Template Name: Homepage Default
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
                <div class="author">
                    <h3  class="p-l">
                        Author:
                    </h3>
                    <p class="p-l">
                        <?=  $author ?>
                    </p>
                    <img src="<?= $auth_img['url'] ?>" alt="<?= $auth_img['alt'] ?>" srcset="">
                    <p class="p-s">
                        <?= $author_bio ?>
                    </p>
                </div>
            </div>
            <div class="body">
                <article class="content">
                    <?php echo get_field('content') ?>
                </article>
                <div class="shares">
                    <ul>
                        <li>Written by <?= $author ?></li>
                        <li>Connect on <a href="<?= $author_linkedin ?>" class="link">Linkedin</a></li>
                        <li>Share this post on  <a href="https://www.linkedin.com/sharing/share-offsite/?url={<?= get_page_link() ?>}" class="link">Linkedin</a>, <a href="" class="link">Facebook</a> or <a href="" class="link">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <div class="grey-bg">
        <?php get_template_part( 'template-parts/loops', 'posts--swiper' ) ?>
    </div>
</main>
<script>
    let blackNav = false;
</script>


<?php get_footer() ?>
