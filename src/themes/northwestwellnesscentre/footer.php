<footer class="bg-tertiary">
    <section class="py-150 py-sm-1 text-white">
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
                    <p class="small mb-50 mb-md-0">&copy; <?php echo Date('Y') . ' ' . get_bloginfo('name'); ?></p>
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