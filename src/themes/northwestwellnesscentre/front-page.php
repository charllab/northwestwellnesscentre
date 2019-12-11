<?php get_header(); ?>

    <section>
        <?php if (have_posts()) : ?>

            <?php /* Start the Loop */ ?>

            <?php while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </section>

    <section>
        <div class="container card-set--blue">
            <div class="row justify-content-center">

                <?php $featured_services = get_field('featured_services');
                if ($featured_services):
                    $services = $featured_services;
                    ?>

                    <?php foreach ($services as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo get_the_title($post->ID); ?></h3>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a class="btn btn-inline" href="<?php echo get_the_permalink($post->ID); ?>">Learn
                                    More
                                    &rarr;</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php wp_reset_postdata(); endif ?>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="h1">Additional Core Services</h2>
                    <p>Browse our additional services that promote optimal healing of the mind, body and spirit.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="alignfull pb-3">
        <div class="position-relative">
            <div class="owl-nav-outside"></div>
            <div class="container px-sm-4 px-xl-2 px-xxl-1">
                <div class="row">
                    <div class="col">
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

                                <div class="item py-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title"><?php the_title(); ?></h3>
                                            <p class="card-text"><?php the_excerpt(); ?></p>
                                            <a class="btn btn-inline" href="<?php the_permalink(); ?>">Learn More
                                                &rarr;</a>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>

                            <?php wp_reset_postdata(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-5">
                    <div class="d-flex justify-content-between px-250">
                        <h2 class="lead mb-250">Latest Blog Article</h2> <a
                            href="<?php echo esc_url(home_url('/blog')); ?>" class="btn btn-inline"
                            style="align-self: center;">Visit Blog →</a>
                    </div>

                    <div class="card-set--blog">
                        <div class="card">
                            <div class="card-body p-150 pr-lg-25">

                                <?php
                                $limit = 1;

                                $temp = $wp_query;
                                $wp_query = null;

                                $wp_query = new WP_Query();
                                $wp_query->query('posts_per_page=' . $limit . '&paged=' . $paged);

                                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <h3 class="h2"><?php the_title(); ?></h3>
                                        <p class="card-text"><?php echo get_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Continue
                                            Reading</a>
                                    </article>

                                <?php endwhile; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="card-set--img-bg">
                        <div class="card">
                            <div class="card-body px-3 py-2">
                                <h3 class="card-title">Want to learn more about our heath and wellness
                                    services?</h3>
                                <p class="card-text">Learn about the latest services we are providing our patients
                                    and what to expect with your first visit.</p>
                                <a class="btn btn-light" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>


<?php get_footer();
