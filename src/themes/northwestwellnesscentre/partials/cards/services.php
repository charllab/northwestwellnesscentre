<div class="alignfull">
    <div class="position-relative">
        <div class="owl-nav-outside"></div>
        <div class="container px-75 px-sm-4 px-xl-2 px-xxl-1">
            <div class="row justify-content-center">
                <div class="col col-lg-11">
                    <div class="owl-carousel owl-theme">

                        <?php
                        $ids = get_field('featured_services', false, false);
                        $args = [
                            'post_parent' => 21,
                            'post_type' => 'page',
                            'orderby' => 'menu_order',
                            'order' => 'ASC',
                            'post__not_in' => $ids
                        ];

                        $wp_query = new WP_Query($args);

                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="card__link">
                            <div class="item pb-0 pt-1 py-md-1">
                                <div class="card js-serviceitem-heightset">
                                    <div class="card-body">
                                        <h2 class="card-title mb-50"><?php the_title(); ?></h2>
                                        <?php the_excerpt(); ?>
                                        <p class="btn btn-inline mb-0 mr-auto text-left">Learn More
                                            &rarr;</p>
                                    </div>
                                </div>
                            </div>
                            </a>

                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>