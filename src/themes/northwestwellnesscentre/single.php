<?php
get_header();
?>

    <main class="sproing-single">
        <?php

        /* Start the Loop */
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content/content', 'single');

        endwhile; // End of the loop.
        ?>
    </main>

<?php get_footer();