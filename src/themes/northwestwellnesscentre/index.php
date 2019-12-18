<?php
get_header();
?>

<main class="mt-2 mb-3 mb-lg-4 sproing-index">
    <div class="container mb-2 mb-lg-3">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8 d-md-flex flex-wrap px-0 blogpage-blogblocks">

                <h1>Our Blog</h1>

                <?php
                $limit = 5;

                $temp = $wp_query;
                $wp_query = null;

                $wp_query = new WP_Query();
                $wp_query->query('posts_per_page=' . $limit . '&paged=' . $paged);

                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <div class="blog__block">
                            <h2 class="blog-title mb-250"><?php the_title(); ?></h2>
                            <?php twentynineteen_posted_on(); ?>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                            <p class="mb-0">
                                <a href="<?php the_permalink(); ?>" class="font-weight-bold">
                                    <span>Continue Reading</span> <i class="ml-250 fas fa-arrow-right"></i>
                                </a>
                            </p>

                        </div>
                        <hr class="blog__hr my-150 my-lg-2 w-100">

                    </article>

                <?php endwhile; ?>

            </div><!-- col -->
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8 text-center">
                <nav aria-label="Page navigation">
                    <?php bootstrap_pagination(); ?>
                </nav>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
