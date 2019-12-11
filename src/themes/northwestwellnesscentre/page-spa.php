<?php
get_header();
?>

<main>

    <h1>page-spa.php</h1>

    <div class="container py-2">

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

</main>


<?php get_footer(); ?>
