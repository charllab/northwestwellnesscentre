<?php
get_header();
?>

<main class="sproing-page">

    <?php if (is_page([187])) : ?>

        <!--legalities-->

        <section class="pb-2">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-8">

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

        </section>

    <?php elseif (is_page([661])) : ?>

        <section class="pb-2">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-8">

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

        </section>



    <?php elseif (is_page([42])) : ?>
        <!--about-->
        <section class="pb-2">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-8">

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

        </section>


    <?php elseif (is_page([44])) : ?>

        <!--link-->

        <section class="pb-2">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-8">

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

        </section>

    <?php else : ?>

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8">

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

        <div class="slider__decorative pb-0 pb-lg-1 pb-xl-3 mb-lg-50 mt-1">

            <section>
                <div class="container pt-lg-3">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="h1">Other Services</h2>
                            <p class="lead">Browse our additional services that promote optimal healing of the mind, body and spirit.</p>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_template_part('partials/cards/services'); ?>

        </div>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
