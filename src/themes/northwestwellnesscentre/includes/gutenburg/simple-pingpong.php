<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'banner-carousel-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
// Load value defaults.
$post_objects = get_field('ping_pong_block');
?>

<?php if (is_admin()): ?>

    <div class="components-placeholder wp-testimonial-carousel">
        <div class="components-placeholder__label">
            <span class="editor-block-icon block-editor-block-icon has-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img"
                     aria-hidden="true" focusable="false"><path d="M0,0h24v24H0V0z" fill="none"></path><path
                        d="M19,4H5C3.89,4,3,4.9,3,6v12c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.11,4,19,4z M19,18H5V8h14V18z"></path></svg></span>Simple
            Image and Text Layout Blocks
        </div>
    </div>

<?php else: ?>

    <?php foreach ($post_objects as $post): ?>

        <?php $thelayout = $post['block_image_position']; ?>


        <div class="alignfull">
            <div class="row justify-content-start no-gutters">
                <div class="col-xl-6">
                    <img
                        src="<?php echo $post['block_image_mobile']; ?>"
                        alt="<?php echo $post['block_heading']; ?>"
                        class="img-full d-block d-md-none alignfull mb-1"
                    >
                    <img
                        src="<?php echo $post['block_image_desktop']; ?>"
                        alt="<?php echo $post['block_heading']; ?>"
                        class="img-full d-none d-md-block d-xl-none mb-1"
                    >
                </div>
            </div>
            <section class="section">
                <div class="container">
                    <div class="row justify-content-start">
                        <div
                            class="d-none d-xl-block<?php if ($thelayout == 'image-right-text-left'): ?> right-image--bg right-image--bg-full order-xl-1<?php endif; ?><?php if ($thelayout == 'image-left-text-right'): ?> left-image--bg left-image--bg-full<?php endif; ?>"
                            style="background-image: url(<?php echo $post['block_image_desktop']; ?>);"></div>
                        <div
                            class="col-xl-6 px-lg-2 px-xl-25 py-xl-2<?php if ($thelayout == 'image-right-text-left'): ?> order-xl-0<?php endif; ?><?php if ($thelayout == 'image-left-text-right'): ?> offset-xl-6<?php endif; ?>">
                            <h2><?php echo $post['block_heading']; ?></h2>
                            <p><?php echo $post['block_blurb']; ?></p>
                            <?php if ($post['block_button_text']): ?>
                                <a class="btn btn-primary btn--flex-clear"
                                   href="<?php echo $post['block_button_link']; ?>"
                                   target="_self"><?php echo $post['block_button_text']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>


    <?php endforeach; ?>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>