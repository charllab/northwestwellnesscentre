<?php
get_header();
?>

<main>

    <?php if (is_page([1716])) : ?>

        <?php if (have_rows('faq_block')) : $i = 0; ?>
            <div class="container py-2 py-md-4">
                <div class="row justify-content-center">

                    <?php while (have_rows('faq_block')) : the_row();
                        $i++; ?>

                        <div class="colps col-12">
                            <div href="#panel_<?php echo $i; ?>" data-toggle="collapse"
                                 class="col-12 px-0 faq__question-block">
                                <span class="faq__question-number"><strong><?php echo $i; ?></strong></span>
                                <span
                                    class="faq__question-text fas <?php if ($i == 1) : ?> fa-minus <?php else : ?> fa-plus <?php endif; ?>"><strong><?php echo the_sub_field('question'); ?></strong></span>
                            </div><!-- faq__question-block -->
                        </div><!-- col -->
                        <div class="col-10 collapse <?php if ($i == 1) : ?> show <?php endif; ?>"
                             id="panel_<?php echo $i; ?>">
                            <div class="faq__question-answer"><?php echo the_sub_field('answer'); ?></div>
                        </div><!-- col -->

                    <?php endwhile; ?>

                </div><!-- row -->

            </div><!-- container -->
        <?php endif; ?>

    <?php elseif (is_page([1725])) : ?>

        <section class="py-3">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 px-0">
                        <?php if (have_posts()) : ?>
                            <h2><?php the_title(); ?></h2>
                            <p>Please add markup to the page.php template…</p>

                            <?php /* Start the Loop */ ?>

                            <?php while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>

                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>
                </div>

            </div><!-- container -->
        </section>

    <?php elseif (is_page([9999])) : ?>

        <section class="py-3">
            <div class="container">
                <?php if (is_page([9999])) : ?>
                    <div class="row justify-content-between">
                        <div class="col-lg-6 section-pd">
                            <h1 class="text-capitalize"><?php the_title(); ?></h1>
                            <?php if (have_posts()) : ?>

                                <?php /* Start the Loop */ ?>

                                <?php while (have_posts()) : the_post(); ?>
                                    <?php the_content(); ?>

                                <?php endwhile; ?>

                            <?php endif; ?>
                        </div><!-- col -->
                        <div class="col-lg-5">
                            <div class="bg-secondary">

                                <div class="page-aside-pd p-5">
                                    <h2 class="ffs">Contact Information</h2>
                                    <?php echo get_field('contact_details', 'option'); ?>
                                </div><!-- col -->

                                <div class="col-12 px-0">
                                    <?php echo get_field('map_embed_code', 'option'); ?>
                                </div><!-- col -->

                            </div><!-- col -->
                        </div><!-- col -->
                    </div><!-- row -->
                <?php else : ?>
                    <div class="row py-3">
                        <div class="col-12 px-0">
                            <?php if (have_posts()) : ?>

                                <?php /* Start the Loop */ ?>

                                <?php while (have_posts()) : the_post(); ?>
                                    <?php the_content(); ?>

                                <?php endwhile; ?>

                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div><!-- container -->
        </section>

    <?php else : ?>

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


        <h3>Other Services</h3>

        <div class="alignfull pb-3">
            <div class="pt-lg-4">
                <div class="position-relative py-1">
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

                                        <div class="item py-2">
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
        </div>


    <?php endif; ?>

</main>


<?php get_footer(); ?>
