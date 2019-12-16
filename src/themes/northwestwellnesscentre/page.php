<?php
get_header();
?>

<main class="sproing-page">

    <?php if (is_page([187])) : ?>

        <section class="pb-2">
            <div class="container py-2">

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

    <?php elseif (is_page([42, 44])) : ?>

        <section class="pb-2">
            <div class="container py-2">

                <div class="row justify-content-center">
                    <div class="col-lg-10">

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

            <div class="row">
                <div class="col-12">

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

        <div class="slider__decorative pb-3 pb-lg-4" style="background-position-y: 52%">

            <section class="pt-2">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="h1">Other Services</h2>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_template_part('partials/cards/services'); ?>

        </div>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
