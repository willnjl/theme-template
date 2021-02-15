<section class="no-pad">

<?php

wp_reset_query();
// Check rows exists.
if( have_rows('client_marquee') ): ?>
<div class="swiper-marquee">
    <ul class="swiper-wrapper">
        <?php
    while( have_rows('client_marquee') ) : the_row();
    $img = get_sub_field('img'); ?>
        <li class="swiper-slide">
            <img src="<?= $img['url'] ?>" alt="<?= $img['alt']?>" srcset="">
        </li>
        <?php
    // End loop.
endwhile;
?>
</ul>
<?php

else :
endif;
?>
</div>
</section>

<script>
    const marquee = new Swiper(".swiper-marquee", {
        width: 190,
        loop: true,
        spaceBetween: 10,
        speed: 20000,
        autoplay: {
            delay: 0
        },
        // slidesPerView:'auto',
        allowTouchMove: false,
        disableOnInteraction: true,
               breakpoints: {
            1200: {
            loopedSlides: 10,
            },
        },
    });

</script>