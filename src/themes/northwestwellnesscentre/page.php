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

                                <?php if(get_field('spa_button_link', 'options') && get_field('spa_button_text', 'options')): ?>
                                    <a href="<?php the_field('spa_button_link', 'options'); ?>" class="btn btn-light mt-2"><?php the_field('spa_button_text', 'options'); ?></a>
                                <?php endif; ?>
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

        <section>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="h1">Other Services</h2>
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

                                    <div class="item py-2">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h3 class="card-title"><?php the_title(); ?></h3>
                                                <p class="card-text"><?php the_excerpt(); ?></p>
                                                <a class="btn btn-secondary" href="<?php the_permalink(); ?>">Learn
                                                    More</a>
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


    <?php endif; ?>

</main>


<?php get_footer(); ?>
