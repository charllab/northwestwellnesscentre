<?php
get_header();
?>

    <h1>single.php</h1>

    <main>
        <?php

        /* Start the Loop */
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content/content', 'single');

        endwhile; // End of the loop.
        ?>
    </main>

<?php get_footer();