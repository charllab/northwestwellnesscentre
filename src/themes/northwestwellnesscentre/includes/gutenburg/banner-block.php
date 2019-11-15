<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'banner-carousel-' . $block['id'];
?>

<?php if (is_admin()): ?>

    <div class="components-placeholder sproing-block-wrapper">
        <div class="components-placeholder__label">
            <span class="editor-block-icon block-editor-block-icon has-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img"
                     aria-hidden="true" focusable="false"><path d="M0,0h24v24H0V0z" fill="none"></path><path
                        d="M19,4H5C3.89,4,3,4.9,3,6v12c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.11,4,19,4z M19,18H5V8h14V18z"></path></svg></span>Banner
            Block with Title, Text and Button Option
        </div>
    </div>

<?php else: ?>

    <section class="bg-general bg-size-cover alignfull"
             style="background-image: url(<?php the_field('full_banner_block_image'); ?>);">
        <div class="container py-4 py-md-7">
            <div class="row">
                <div class="col <?php the_field('full_banner_block_layout'); ?>">
                    <h2 class="h1 text-white text-center mb-0
                        <?php if (get_field('full_banner_block_layout') == 'col-sm-8 offset-sm-2 col-lg-4 offset-lg-8 col-xxl-5 offset-xxl-7'): ?> text-md-left mb-0 mx-50<?php endif; ?>
                        <?php if (get_field('full_banner_block_layout') == 'col-sm-8 offset-sm-2 col-lg-4 offset-lg-0 col-xxl-5'): ?> text-md-left mb-0 mx-50<?php endif; ?>
                        ">
                        <?php the_field('full_banner_block_title'); ?>
                    </h2>
                    <?php if (have_rows('full_banner_block_buttons')):
                        while (have_rows('full_banner_block_buttons')) : the_row();
                            if (get_row_layout() == 'full_banner_block_single_button_layout'): ?>
                                <div class="mt-150">
                                    <a href="<?php the_sub_field('full_banner_block_single_button_layout_link'); ?>"
                                       class="btn btn-primary btn-xs-block"><?php the_sub_field('full_banner_block_single_button_title'); ?></a>
                                </div>
                            <?php elseif (get_row_layout() == 'full_banner_block_two_button_layout'): ?>
                                <div class="mt-50
                                <?php if (get_field('full_banner_block_layout') == 'col-sm-8 offset-sm-2 col-lg-6 offset-lg-3'): ?> text-center<?php endif; ?>
                                ">
                                    <a href="<?php the_sub_field('full_banner_block_two_button_layout_first_button_link'); ?>"
                                       class="btn btn-primary btn-xs-block mb-1 mb-md-0 mx-sm-50 mt-1"><?php the_sub_field('full_banner_block_two_button_layout_first_button_title'); ?></a>
                                    <a href="<?php the_sub_field('full_banner_block_two_button_layout_second_button_link'); ?>"
                                       class="btn btn-secondary btn-xs-block mx-sm-50 mt-1"><?php the_sub_field('full_banner_block_two_button_layout_second_button_title'); ?></a>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>