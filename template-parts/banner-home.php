<?php 
    $img = get_field('hero_img');
    $heading = get_field('hero_heading');
    $body = get_field('hero_body');
?>

<section class="banner hero align-center"
>

<?php if($heading) : ?>
    <video src="https://fifteenten.co.uk/wp-content/uploads/2018/09/videohive-9160177-academy-leader-00.mp4" class="wp-video" autoplay loop muted></video>
<div class="text__container">
    <h1>
        <?= $heading ?>
    </h1>

    <?= $body ?>
    
</div>

<?php endif;?> 
</section>

<script>


</script>