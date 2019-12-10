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

    <section class="bg-sand">
        <div class="container-fluid px-md-0 spa__experience--sand">

            <div class="row">
                <div class="col-md-6 col-lg-4 offset-lg-2 spa__experience pr-lg-2 position-relative">

                    <div class="spa__experience--fx spa__experience--trans h-100">
                        <img src="<?php bloginfo('template_url'); ?>/images/trans.png"
                             alt=" "
                             class="h-100 d-none d-md-block">
                    </div>

                    <div class="spa__experience--footer-content px-md-1 px-lg-0 py-2 py-lg-3">

                        <h3 class="h1 spa__experience--header">Your Perfect Spa Experience</h3>
                        <p><?php the_field('spa_blurb', 'options'); ?></p>

                        <?php if( have_rows('spa_experience_list', 'options') ): ?>

                            <ul class="list-inline spa__experience--list">

                                <?php while( have_rows('spa_experience_list', 'options') ): the_row();

                                    // vars
                                    $item = get_sub_field('spa_experience_list_item', 'options');

                                    ?>
                                    <li class="list-inline-item mr-0"><span>&bull;</span><?php echo $item; ?></li>

                                <?php endwhile; ?>

                            </ul>

                        <?php endif; ?>

                        <a href="#" class="btn btn-light">Learn More</a>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6 col-lg-6 bg-dark text-white position-relative bg-size-cover" style="background-image: url(<?php the_field('spa_experience_image', 'options'); ?>);">
                    <div class="spa__experience--fx spa__experience--corner h-100">
                        <img src="<?php bloginfo('template_url'); ?>/images/corner-sharp.png"
                             alt=" "
                             class="h-100 d-none d-md-block">
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>
