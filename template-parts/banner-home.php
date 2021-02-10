<?php 
    $img = get_field('hero_img');
    $heading = get_field('hero_heading');
    $body = get_field('hero_body');
?>

<section class="banner hero align-center"
class="parallax-window" data-parallax="scroll" data-image-src="<?= $img['url'] ?>"
alt="<?= $img['alt']; ?>"
>

<?php if($heading) : ?>
    
<div >
    <h1>
        <?= $heading ?>
    </h1>

    <?= $body ?>
    
</div>

<?php endif;?> 
</section>