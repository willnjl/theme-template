<section class="textblock__about no-pad">
    <div class="wrap">
        <div class="body two-thirds padding">
            <?= get_field('body') ?>
        </div>
        <ul class="loop-container ">
           <?php 
            while( have_rows('clients') ) : the_row();
            $img = get_sub_field('image');
            ?>
            <li>
                <img src="<?= $img['url'] ?>" alt="<?php $img['alt'] ?>" />
            </li>
        <?php
        endwhile;?>
        </ul>
    </div>
</section>