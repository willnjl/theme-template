<?php 

    $heading = get_field('heading');
    $heading_points = get_field('heading_points');
?>

<div class="project-marquee-container">
    <div class="swiper-project-title">
    
    <div class="swiper-wrapper">
            <?php
                $title = get_the_title();
                $letters = str_split($title);
    
                foreach($letters as $letter) : ?>
                <span class="swiper-slide <?php if($letter === " "){echo "space";};?>">
                    <?= $letter ?>
                </span>
            <? endforeach; ?>
            <span class="swiper-slide space" ></span>
        </div>
    </div>
</div>
<section class="banner-project">
    <div class="wrap align-center">
        <h2>
           
            <?= $heading ?>
        </h2>
        <div class="banner-points">
            <?= $heading_points ?>
        </div>
    </div>

</section>

<script>

    const marquee = new Swiper(".swiper-project-title", {
        slidesPerView: "auto",
        loop: true,
        spaceBetween: 1,
        speed: 20000,
        autoplay: {
            delay: 0
        },
        // slidesPerView:'auto',
        allowTouchMove: false,
        disableOnInteraction: true,
               breakpoints: {
            1200: {
            loopedSlides: 15,
            },
        },
    });


</script>