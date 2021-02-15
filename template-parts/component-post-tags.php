<?php $categories = get_the_category(  ) ?>

<ul class="categories">
    <?php foreach($categories as $cat) : ?>
        <li class="btn link--category">
            <?= $cat->name ?>
        </li>
        <?php endforeach; ?> 
</ul>