<?php $categories = get_the_category(  ) ?>

<ul>
    <?php foreach($categories as $cat) : ?>
        <li class="link--category">
            <?= $cat->name ?>
        </li>
        <?php endforeach; ?> 
</ul>