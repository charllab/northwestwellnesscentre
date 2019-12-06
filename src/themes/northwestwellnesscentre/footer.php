<footer>

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
                <a href="" target="_blank" class="btn btn-primary ml-lg-auto">
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