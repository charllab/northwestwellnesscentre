<div class="col-lg-4">
    <a href="<?php echo get_the_permalink($post->ID); ?>" class="card__link">
        <div class="card js-featureditem-heightset">
            <div class="card-body">
                <h3 class="card-title mb-50"><?php echo get_the_title($post->ID); ?></h3>
                <?php the_excerpt(); ?>
                <p class="btn btn-inline mb-0 mr-auto text-left">Learn More &rarr;</p>
            </div>
        </div>
    </a>
</div>