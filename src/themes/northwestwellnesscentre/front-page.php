<?php get_header(); ?>

    <main>
        <section class="bg-warning">
            <div class="container py-4 py-md-7">
                <div class="row">
                    <div class="col col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
                        <h2 class="h1 text-white text-center mb-0">Balanced health for your mind, body and spirit.</h2>
                        <div class="d-sm-flex justify-content-center mt-150">
                            <a href="#" class="btn btn-primary btn-xs-block mb-1 mb-sm-0 mx-sm-50">Our Services</a>
                            <a href="#" class="btn btn-secondary btn-xs-block mx-sm-50">Watch Video</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br>
        <br>

        <section class="bg-warning">
            <div class="container py-4 py-md-7">
                <div class="row">
                    <div class="col col-sm-8 offset-sm-2 col-lg-4 offset-lg-8 col-xxl-5 offset-xxl-7">
                        <h2 class="h1 text-center text-md-left text-white mb-0 mx-50">Child & Family Therapy
                            Counseling</h2>
                        <div class="d-sm-flex mt-150">
                            <a href="#" class="btn btn-primary btn-xs-block mb-1 mb-sm-0 mx-sm-50">Our Services</a>
                            <a href="#" class="btn btn-secondary btn-xs-block mx-sm-50">Watch Video</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br>
        <br>

        <section class="bg-warning">
            <div class="container py-4 py-md-7">
                <div class="row">
                    <div class="col col-sm-8 offset-sm-2 col-lg-4 col-xxl-5 offset-lg-0">
                        <h2 class="h1 text-center text-md-left text-white mb-0 mx-50">Child & Family Therapy
                            Counseling</h2>
                        <div class="d-sm-flex mt-150">
                            <a href="#" class="btn btn-primary btn-xs-block mb-1 mb-sm-0 mx-sm-50">Our Services</a>
                            <a href="#" class="btn btn-secondary btn-xs-block mx-sm-50">Watch Video</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container py-2">
                <div class="row justify-content-center">
                    <div class="col col-sm-8 text-center">
                        <h2 class="h1">Health and Wellness Services in Grande Prairie and Grimshaw Alberta</h2>
                        <p class="mb-0">Our experienced practitioners offer a complete range of health services
                            including
                            individualized care plans that promote optimal healing of the mind, body and spirit.</p>
                        <a href="#" class="btn btn-primary btn-xs-block mt-150 mb-sm-0 mx-sm-50">Make An Appointment</a>
                    </div>
                </div>
            </div>
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
                                                    <a class="btn btn-inline" href="<?php the_permalink(); ?>">Learn More &rarr;</a>
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
                            <h2 class="lead mb-250">Latest Blog Article</h2> <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn btn-inline" style="align-self: center;">Visit Blog →</a>
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
                                            <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Continue Reading</a>
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
