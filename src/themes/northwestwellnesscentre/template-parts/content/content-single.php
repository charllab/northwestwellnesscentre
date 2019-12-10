<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php //the_post_thumbnail('full', array('class' => 'img-fluid')); ?>

    <div class="container pt-3">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <header class="entry-header">
                    <?php get_template_part('template-parts/header/entry', 'header'); ?>
                </header>

                <div class="entry-content ">

                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen'),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        )
                    );

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . __('Pages:', 'twentynineteen'),
                            'after' => '</div>',
                        )
                    );
                    ?>

                </div>

            </div>
        </div>
        <div class="row pt-2 pb-3">
            <div class="col col-md-5 offset-md-1 text-left">
                <span
                    class="nav-previous h5 d-md-none mb-0"><?php previous_post_link('%link', '<span class="meta-nav">' . _x('Prev', 'Previous post link', 'sproingcreative') . '</span>'); ?></span>
                <span
                    class="nav-previous text-primary font-weight-bold d-none d-md-block"><?php previous_post_link('%link', '<span class="meta-nav">' . _x('<i class="fas fa-arrow-left"></i>', 'Previous post link', 'sproingcreative') . '</span> Previous Post'); ?></span>
            </div><!-- col -->
            <div class="col col-md-5 text-right">
                <span
                    class="nav-next h5 d-md-none mb-0"><?php next_post_link('%link', '<span class="meta-nav">' . _x('Next', 'Next post link', 'sproingcreative') . '</span>'); ?></span>
                <span
                    class="nav-next text-primary font-weight-bold d-none d-md-block"><?php next_post_link('%link', 'Next Post <span class="meta-nav">' . _x('<i class="fas fa-arrow-right"></i>', 'Next post link', 'sproingcreative') . '</span>'); ?></span>
            </div><!-- col -->
        </div>
    </div>


</article><!-- #post-<?php the_ID(); ?> -->
