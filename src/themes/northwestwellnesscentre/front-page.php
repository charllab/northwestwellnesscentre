<?php get_header(); ?>

    <section>
        <?php if (have_posts()) : ?>

            <?php /* Start the Loop */ ?>

            <?php while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </section>

    <section class="d-none d-lg-block">
        <div class="container card-set--blue">
            <div class="row justify-content-center">

                <?php $featured_services = get_field('featured_services');
                if ($featured_services):
                    $services = $featured_services;
                    ?>

                    <?php foreach ($services as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
                    <?php get_template_part('partials/cards/bluecards'); ?>
                <?php endforeach; ?>

                    <?php wp_reset_postdata(); endif ?>

            </div>
        </div>
    </section>

    <div class="slider__decorative pb-0 pb-lg-1 pb-xl-3 mb-lg-50">

        <section>
            <div class="container pt-lg-3">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="h1">Additional Services</h2>
                        <p class="lead">Browse our additional services that promote optimal healing of the mind, body
                            and spirit.</p>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('partials/cards/services'); ?>

    </div>

    <section>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-5">
                    <div class="d-sm-flex justify-content-between px-250">
                        <h2 class="lead mb-250">Latest Blog Article</h2> <a
                            href="<?php echo esc_url(home_url('/blog')); ?>" class="btn btn-inline mb-1 mb-sm-0"
                            style="align-self: center;">Visit Blog →</a>
                    </div>

                    <div class="card-set--blog">

                        <?php
                        $limit = 1;

                        $temp = $wp_query;
                        $wp_query = null;

                        $wp_query = new WP_Query();
                        $wp_query->query('posts_per_page=' . $limit . '&paged=' . $paged);

                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                        <a href="<?php the_permalink(); ?>" class="card__link">
                        <div class="card">
                            <div class="card-body min-height-auto pr-lg-25">

                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <h3 class="card-title"><?php the_title(); ?></h3>
                                        <p class="card-text"><?php echo get_excerpt(); ?></p>
                                        <p class="btn btn-secondary d-none d-md-inline-block text-white mb-0">Continue
                                            Reading</p>
                                        <p class="btn btn-inline mt-auto mb-0 d-md-none">Learn More
                                            &rarr;</p>
                                    </article>

                            </div>
                        </div>
                        </a>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="card-set--img-bg">
                        <a href="<?php echo esc_url(home_url('/services')); ?>" class="card__link">
                        <div class="card">
                            <div class="card-body min-height-auto px-lg-3 py-2">
                                <h3 class="card-title">Want to learn more about our heath and wellness
                                    services?</h3>
                                <p class="card-text">Learn about the latest services we are providing our patients
                                    and what to expect with your first visit.</p>
                                <p class="btn btn-light btn-light-flex d-none d-md-inline-block mb-0">Learn
                                    More</p>
                                <p class="btn btn-inline mt-auto mb-0 d-md-none text-white">Learn More
                                    &rarr;</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>


<?php get_footer();
