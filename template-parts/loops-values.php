<section class="values">
    <div class="wrap">
        <h1>
            our values
        </h1>
<?php
if( have_rows('values_repeater') ): ?>
    <ul class="loop-container">
        <?php    while( have_rows('values_repeater') ) : the_row();
            $header = get_sub_field('header');
            $body = get_sub_field('body');
        ?>
            <li>
                <hr>
                <h4 class="value_title">
                    <?= $header ?>
                </h4>
                <p>
                    <?= $body ?>
                </p>
            </li>
        <?php // End loop.
        endwhile; ?>
        </ul>
        <?php
    else :
       echo "add values";
    endif;
    ?>
</div>
</section>
        