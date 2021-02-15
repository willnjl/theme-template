<?php 
    $img = get_field('hero_img');
    $heading = get_field('hero_heading');
    $body = get_field('hero_body');
?>

<section class="parallax-window  banner--post" 
data-parallax="scroll"
data-image-src="<?= 
get_the_post_thumbnail_url()?>"
>
<div class="wrap">
    <div class="text__container two-thirds">
        <h1>
            Analytics 4. The traditional Google Analytics is now irrelevant.
        </h1>
    </div>
</div>


</section>
