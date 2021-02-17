<?php

// Check value exists.
if( have_rows('project_flex_content') ): ?>
    <div class="flexi">
    <?php
    // Loop through rows.
    while ( have_rows('project_flex_content') ) : the_row();

        // Case: Paragraph layout.
        if( get_row_layout() == 'two_images' ):
            $left = get_sub_field('left_col');
            $right = get_sub_field('right_col');
            ?>

            <div class="row flexi-two-cols">
                <img class="col" src="<?= $left['url'] ?>" alt="<?= $left['alt'] ?>" srcset="">
                <img class="col" src="<?= $right['url'] ?>" alt="<?= $right['alt'] ?>" srcset="">
            </div>
        <?php // Case: Download layout.
        elseif( get_row_layout() == 'full_width_image' ): $img = get_sub_field('image') ?>
            <div class="row">
                <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>" srcset="">
            </div>
        <?php // Case: Download layout.
        elseif( get_row_layout() == 'flexi_testimonial' ): 
            $body = get_sub_field('testimonial_block'); 
            $author = get_sub_field('author') 
            ?>
            <div class="row padding">
                <div class="testimonial">
                    <div class="two-thirds">
                        <span class="open-quotes"></span>
                        <p class="p-l ">
                            <q>
                                <?= $body ?>
                            </q>
                        </p>
                        <p class="p-s">
                            <?= $author ?>
                        </p>
                    </div>
                </div>
            </div>

        <?php endif; ?>
<?php    // End loop.
    endwhile; ?>

</div>
<?php
// No value.
else :
    // Do something...
endif;