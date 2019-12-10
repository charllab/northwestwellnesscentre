<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$discussion = !is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null; ?>

<?php if (!is_page()) : ?>

    <div class="entry-meta mb-2">

        <?php the_title('<h1 class="entry-title mb-250">', '</h1>'); ?>
        <?php twentynineteen_posted_on(); ?>

    </div><!-- .entry-meta -->
<?php endif; ?>
