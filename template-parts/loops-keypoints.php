
<?php
if( have_rows('key_points') ): ?>
<section class="no-pad">
    <div class="wrap">
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


