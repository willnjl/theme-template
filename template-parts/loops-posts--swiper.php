<?php

    $uri = get_template_directory_uri(  );

?>

<section>
    <div class="swiper-container">
        <ul class="swiper-wrapper">
            <li class="swiper-slide post-slide">
                <a href="<?= get_the_permalink() ?>" >
                    <div class="hover-card">
                        <img src="<?= $uri ?>/images/post-1.jpg" alt="">
                        <p class="hover-card__link icon">Read More</p>
                    </div>
                    <p>
                        <a href="<?= get_the_permalink() ?>" class="link">Analytics 4. The traditional Google Analytics is now irrelevant.</a>
                    </p>
                </a>
            </li>
            <li class="swiper-slide post-slide">
                <a href="<?= get_the_permalink() ?>" >
                    <div class="hover-card">
                        <img src="<?= $uri ?>/images/post-1.jpg" alt="">
                        <p class="hover-card__link icon">Read More</p>
                    </div>
                    <p>
                        <a href="<?= get_the_permalink() ?>" class="link">Analytics 4. The traditional Google Analytics is now irrelevant.</a>
                    </p>
                </a>
            </li>
            <li class="swiper-slide post-slide">
                <a href="<?= get_the_permalink() ?>" >
                    <div class="hover-card">
                        <img src="<?= $uri ?>/images/post-1.jpg" alt="">
                        <p class="hover-card__link icon">Read More</p>
                    </div>
                    <p>
                        <a href="<?= get_the_permalink() ?>" class="link">Analytics 4. The traditional Google Analytics is now irrelevant.</a>
                    </p>
                </a>
            </li>
            <li class="swiper-slide post-slide">
                <a href="<?= get_the_permalink() ?>" >
                    <div class="hover-card">
                        <img src="<?= $uri ?>/images/post-1.jpg" alt="">
                        <p class="hover-card__link icon">Read More</p>
                    </div>
                    <p>
                        <a href="<?= get_the_permalink() ?>" class="link">Analytics 4. The traditional Google Analytics is now irrelevant.</a>
                    </p>
                </a>
            </li>
            <li class="swiper-slide post-slide">
                <a href="<?= get_the_permalink() ?>" >
                    <div class="hover-card">
                        <img src="<?= $uri ?>/images/post-1.jpg" alt="">
                        <p class="hover-card__link icon">Read More</p>
                    </div>
                    <p>
                        <a href="<?= get_the_permalink() ?>" class="link">Analytics 4. The traditional Google Analytics is now irrelevant.</a>
                    </p>
                </a>
            </li>
            <li class="swiper-slide post-slide">
                <a href="<?= get_the_permalink() ?>" >
                    <div class="hover-card">
                        <img src="<?= $uri ?>/images/post-1.jpg" alt="">
                        <p class="hover-card__link icon">Read More</p>
                    </div>
                    <p>
                        <a href="<?= get_the_permalink() ?>" class="link">Analytics 4. The traditional Google Analytics is now irrelevant.</a>
                    </p>
                </a>
            </li>
            <li class="swiper-slide post-slide">
                <a href="<?= get_the_permalink() ?>" >
                    <div class="hover-card">
                        <img src="<?= $uri ?>/images/post-1.jpg" alt="">
                        <p class="hover-card__link icon">Read More</p>
                    </div>
                    <p>
                        <a href="<?= get_the_permalink() ?>" class="link">Analytics 4. The traditional Google Analytics is now irrelevant.</a>
                    </p>
                </a>
            </li>
            <li class="swiper-slide post-slide">
                <a href="<?= get_the_permalink() ?>" >
                    <div class="hover-card">
                        <img src="<?= $uri ?>/images/post-1.jpg" alt="">
                        <p class="hover-card__link icon">Read More</p>
                    </div>
                    <p>
                        <a href="<?= get_the_permalink() ?>" class="link">Analytics 4. The traditional Google Analytics is now irrelevant.</a>
                    </p>
                </a>
            </li>
        </ul>
    </div>
</section>

<script>

const swiper = new Swiper('.swiper-container', {
   direction: 'horizontal',
   centerSlide: false,
   freeMode: true,
   width: 500,
   loop: true,
    grabCursor: true,
    loopedSlides: 3
});

</script>