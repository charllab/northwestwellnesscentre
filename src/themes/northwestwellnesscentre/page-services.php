<?php
get_header();
?>

<main class="mb-3 mb-lg-4 sproing-services">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">

                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs" class="spr-breadcrumb mb-1">', '</p>');
                }
                ?>

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
                    'posts_per_page' => -1,
                ];

                $wp_query = new WP_Query($args);

                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <?php get_template_part('partials/cards/bluecards'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata() ?>

            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>
