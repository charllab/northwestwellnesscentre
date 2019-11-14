<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'banner-carousel-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
// Load value defaults.
$post_objects = get_field('sponsor_carousel');
?>

<?php if (is_admin()): ?>

    <div class="components-placeholder sproing-block-wrapper">
        <div class="components-placeholder__label">
            <span class="editor-block-icon block-editor-block-icon has-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img"
                     aria-hidden="true" focusable="false"><path d="M0,0h24v24H0V0z" fill="none"></path><path
                        d="M19,4H5C3.89,4,3,4.9,3,6v12c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.11,4,19,4z M19,18H5V8h14V18z"></path></svg></span>Card
            Carousel Blocks
        </div>
    </div>

<?php else: ?>

    <div class="alignfull">
        <div class="pt-2 pt-lg-4 pt-1 pt-lg-2">
            <div class="container px-sm-4 px-xl-2 px-xxl-1">
                <div class="row">
                    <div class="col">
                        <h3 class="carousel-block__title mb-0">Proudly Supported&nbsp;By</h3>
                    </div>
                </div>
            </div>

            <div class="position-relative py-2 py-lg-4">
                <div class="owl-nav-outside"></div>
                <div class="container px-sm-4 px-xl-2 px-xxl-1">
                    <div class="row">
                        <div class="col">
                            <div class="owl-carousel owl-theme">
                                <?php foreach ($post_objects as $post): ?>
                                    <div class="item">
                                        <img src="<?php echo $post['sponsor_logo']; ?>"
                                             alt="<?php echo $post['sponsor_name']; ?>" class="img-fluid">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>