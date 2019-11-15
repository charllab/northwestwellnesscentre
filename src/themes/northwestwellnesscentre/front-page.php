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
                <!-- CARD DECK -->
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Card Title</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo,
                                quas.</p>
                            <a class="btn btn-inline" href="#">Learn More &rarr;</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Card Title</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo,
                                quas.</p>
                            <a class="btn btn-inline" href="#">Learn More &rarr;</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Card Title</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo,
                                quas.</p>
                            <a class="btn btn-inline" href="#">Learn More &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- CARD DECK -->
            </div>
        </section>

        <br>
        <br>

        <section>
            <div class="container">
                <!-- CARD DECK -->
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Card Title</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo,
                                quas.</p>
                            <a class="btn btn-inline" href="#">Learn More &rarr;</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Card Title</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo,
                                quas.</p>
                            <a class="btn btn-inline" href="#">Learn More &rarr;</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Card Title</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo,
                                quas.</p>
                            <a class="btn btn-inline" href="#">Learn More &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- CARD DECK -->
            </div>
        </section>

        <section>
            <div class="container card-set--blue">
                <!-- CARD DECK -->
                <div class="card-deck">

                    <?php
                    // Init args
                    $args = [
                        'post_parent' => 21,
                        'post_type' => 'page',
                        'orderby' => 'menu_order',
                        'order' => 'ASC',

                    ];

                    $wp_query = new WP_Query($args);

                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><?php the_title(); ?></h3>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a class="btn btn-inline" href="<?php the_permalink(); ?>">Learn More &rarr;</a>
                            </div>
                        </div>

                    <?php endwhile; ?>

                    <?php wp_reset_query(); ?>

                </div>
                <!-- CARD DECK -->
            </div>
        </section>


        <br>
        <br>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card-set--blog">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Card Title</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo,
                                        quas.</p>
                                    <a class="btn btn-secondary" href="#">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="card-set--img-bg">
                            <div class="card">
                                <div class="card-body">
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
