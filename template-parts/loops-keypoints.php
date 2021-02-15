
<?php
if( have_rows('key_points') ): ?>
<section class="grey-bg no-pad">
    <div class="wrap-tight">
        <ul class="loop-container--grid">
            <?php while( have_rows('key_points') ) : the_row(); $point = get_sub_field('point'); ?>
            <li class="info">
                <hr>
                <?= $point ?>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>
<?php else :
endif; ?>


<script>
    const marquee = new Swiper(".swiper-marquee", {
        width: 500,
        loop: true,

        breakpoints: {
            1200: {
            loopedSlides: 10,
            },
        },
    });

</script>