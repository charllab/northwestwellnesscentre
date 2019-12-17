<?php
get_header();
?>

<main class="mb-3 mb-lg-4 sproing-services">

    <div class="container pb-2">

        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">

                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs" class="spr-breadcrumb mb-1">', '</p>');
                }
                ?>

                <h1 class="text-capitalize"><?php the_title(); ?></h1>

                <?php if (have_posts()) : ?>

                    <?php /* Start the Loop */ ?>

                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <section>
        <div class="container card-set--blue card-set--servicespage">
            <div class="row justify-content-center">

                <?php

                $args = [
                    'post_parent' => 21,
                    'post_type' => 'page',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                ];

                $wp_query = new WP_Query($args);

                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <div class="col-lg-4">
                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="card__link">
                        <div class="card js-featureditem-heightset">
                            <div class="card-body">
                                <h3 class="card-title mb-50"><?php echo get_the_title($post->ID); ?></h3>
                                <?php the_excerpt(); ?>
                                <p class="btn btn-inline mt-auto mb-0">Learn More &rarr;</p>
                            </div>
                        </div>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata() ?>

            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>
