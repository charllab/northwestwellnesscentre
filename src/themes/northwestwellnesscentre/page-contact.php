<?php
/**
 *
 * Template Name: Contact Page
 *
 **/
get_header(); ?>

    <main>

        <div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">

                        <?php if (have_posts()) : ?>

                            <?php /* Start the Loop */ ?>

                            <?php while (have_posts()) : the_post(); ?>

                                <h1 class="text-capitalize"><?php the_title(); ?></h1>

                                <?php the_content(); ?>

                            <?php endwhile; ?>

                        <?php endif; ?>

                        <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=10]'); ?>

                    </div><!-- col -->


                    <div class="col-lg-5">
                        <div>

                            <div class="row">
                                <?php
                                $removethese = array("(", " ", ")", "-");
                                ?>


                                <?php if (have_rows('location', 'option')): ?>


                                    <?php while (have_rows('location', 'option')): the_row();

                                        // vars
                                        $otherwebsite = get_sub_field('other_website', 'option');

                                        ?>
                                        <div class="col-12 location__info--repeater-col p-1 p-md-2 bg-light mb-150">

                                            <h5 class="location__info--header"><?php echo get_sub_field('location_name', 'option'); ?></h5>

                                            <table class="location__info">
                                                <tr>
                                                    <td class="location__info--td"><strong>Phone: </strong></td>
                                                    <td>
                                                        <a href="tel:+1<?php echo strip_tel(get_field('phone_number', 'option')); ?>"><?php echo get_sub_field('phone_number', 'option'); ?></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Address: </strong></td>
                                                    <td><?php echo get_sub_field('physical_address', 'option'); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Hours: </strong></td>
                                                    <td><p class="mb-50 "><?php echo get_sub_field('trading_hours', 'option'); ?></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="location__info--blanks">&nbsp;</td>
                                                    <td>
                                                        <a
                                                            href="<?php echo get_sub_field('map_embed_code', 'option'); ?>"
                                                            target="_blank"><strong>Get Directions</strong> <i
                                                                class="fas fa-external-link-alt"></i></a></td>
                                                </tr>
                                                <?php if ($otherwebsite): ?>
                                                    <tr>
                                                        <td class="location__info--blanks">&nbsp;</td>
                                                        <td>
                                                            <a href="<?php echo get_sub_field('other_website', 'option'); ?>" class="d-inline-block mt-md-50" target="_blank">
                                                                <strong>Visit <?php echo get_sub_field('location_name', 'option'); ?>
                                                                    Website</strong>&nbsp;<i
                                                                    class="fas fa-external-link-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            </table>
                                        </div>
                                    <?php endwhile; ?>

                                <?php endif; ?>


                            </div>
                        </div><!-- bg-light -->

                    </div><!-- col -->
                </div><!-- row -->

            </div><!-- container -->
        </div>

    </main>

<?php get_footer();