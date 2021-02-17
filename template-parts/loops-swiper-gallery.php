
<?php

if( have_rows('gallery_images') ): ?>
<div class="swiper-gallery-container" class="white-bg">
    <ul class="swiper-wrapper">
    <?php 
        while( have_rows('gallery_images') ) : the_row();
            $img = get_sub_field('image');
        ?>
        <li class="swiper-slide">
            <a href="<?= $img['url'] ?>" class="gallery-view" title="<?php $img['alt'] ?>">
                <img src="<?= $img['url'] ?>" alt="<?php $img['alt'] ?>" />
            </a>
        </li>
        <?php
        endwhile;?>
    </ul>
</div>
<script>
    const swiper = new Swiper('.swiper-gallery-container', {
        spaceBetween: 5,
        width: 400,
    });
Chocolat(document.querySelectorAll('.gallery-view'), {
    // options here
})
</script>

<?php
else :
    // Do something...
endif;

?>