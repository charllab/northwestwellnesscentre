<?php
$nospafooter = [40,42,44];
?>

<?php if (!is_page($nospafooter)) : ?>

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

                        <?php if (have_rows('spa_experience_list', 'options')): ?>

                            <ul class="list-inline spa__experience--list">

                                <?php while (have_rows('spa_experience_list', 'options')): the_row();

                                    // vars
                                    $item = get_sub_field('spa_experience_list_item', 'options');

                                    ?>
                                    <li class="list-inline-item mr-0"><span>&bull;</span><?php echo $item; ?></li>

                                <?php endwhile; ?>

                            </ul>

                        <?php endif; ?>

                        <?php if (get_field('spa_button_link', 'options') && get_field('spa_button_text', 'options')): ?>
                            <a href="<?php the_field('spa_button_link', 'options'); ?>"
                               class="btn btn-light mt-2"><?php the_field('spa_button_text', 'options'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6 col-lg-6 bg-dark text-white position-relative bg-size-cover"
                     style="background-image: url(<?php the_field('spa_experience_image', 'options'); ?>);">
                    <div class="spa__experience--fx spa__experience--corner h-100">
                        <img src="<?php bloginfo('template_url'); ?>/images/corner-sharp.png"
                             alt=" "
                             class="h-100 d-none d-md-block">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<footer class="<?php if (is_page($nospafooter)) : ?>mt-150 footer__bdr-top<?php endif; ?>">

    <div class="container py-1 d-none d-lg-block">
        <div class="row no-gutters">
            <div class="col-lg-9">
                <?php wp_nav_menu([
                    'theme_location' => 'tertiary',
                    'container_class' => 'footer-nav',
                    'menu_class' => 'list-unstyled d-sm-flex justify-content-center justify-content-md-start mb-0',
                    'fallback_cb' => '',
                    'walker' => new understrap_WP_Bootstrap_Navwalker(),
                ]); ?>
            </div>
            <div class="col-lg-3 d-flex">
                <a href="<?php the_sub_field('book_now_link', 'options'); ?>" target="_blank" class="btn btn-primary ml-lg-auto">
                    Book An Appointment
                </a>
            </div>
        </div>
    </div>

    <section class="py-150 py-sm-1 text-white bg-tertiary">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 text-center text-md-left">
                    <p class="small mb-75 mb-md-0">
                        Northwest Wellness Centre direct bills for Blue Cross, Veterans and RCMP, as well as Aquaterra and
                        the City of Grande Prairie for psychology.
                    </p>
                </div>
                <div class="col-md-3">
                    <div class="social-links text-center text-md-right">
                        <?php while (have_rows('social_links', 'options')): the_row(); ?>
                            <a class="social-link btn btn-link p-0 my-0 mx-250 text-white" target="_blank"
                               href="<?php the_sub_field('url'); ?>">
                                <i class="<?php the_sub_field('icon_class'); ?> fa-lg">
                                    <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                </i>
                            </a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="small mb-50 mb-md-0">&copy; <?php echo Date('Y') . ' ' . get_bloginfo('name'); ?>  |&nbsp;<a href="<?php echo esc_url(home_url('/')); ?>legalities" class="text-white">Legalities</a></p>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <p class="small mb-0">Designed, Developed and Hosted by <a href="https://sproing.ca" target="_blank"
                                                            class="text-white">Sproing&nbsp;Creative</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>

</body>

</html>