<li>
	 <a href="<?= get_the_permalink() ?>" >
        <div class="hover-card">
            <img src="<?= get_the_post_thumbnail_url( $post->id, "medium_large")?>" alt="<?=  esc_html ( get_the_title() ) ?>" class="post-img">
            <p class="hover-card__link icon">Read More</p>
        </div>
        <h3 class="p-l post_title">
            <a href="<?= get_the_permalink() ?>" class="link"><?= get_the_title(  ) ?></a>
        </h3>
        <p>
            <?= the_excerpt( $post->id ); ?>
        </p>
    </a>
</li>