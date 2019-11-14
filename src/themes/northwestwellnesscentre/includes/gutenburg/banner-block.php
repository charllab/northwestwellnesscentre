<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'banner-carousel-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
$className = '';
if (!empty($block['align'])) {
    $className .= 'align' . $block['align'];
}
// Load value defaults.
$post_objects = get_field('banners');
?>

<?php if (is_admin()): ?>

    <div class="components-placeholder wp-testimonial-carousel">
        <div class="components-placeholder__label">
            <span class="editor-block-icon block-editor-block-icon has-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img"
                     aria-hidden="true" focusable="false"><path d="M0,0h24v24H0V0z" fill="none"></path><path
                        d="M19,4H5C3.89,4,3,4.9,3,6v12c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.11,4,19,4z M19,18H5V8h14V18z"></path></svg></span>Banner
            Carousel
        </div>
    </div>

<?php else: ?>

    <div class="bg-carousel <?php echo esc_attr($className); ?>">
        <div id="banner-carousel-<?php echo $id; ?>" class="carousel slide carousel-block__banner" data-ride="carousel">

            <?php if (count($post_objects) > 1) { ?>
                <ol class="carousel-indicators d-md-none">
                    <?php $index = 1; ?>

                    <?php foreach ($post_objects as $post): ?>
                        <li data-target="#banner-carousel-<?php echo $id; ?>" data-slide-to="<?php echo $index - 1; ?>"
                            class="<?php echo($index == 1 ? 'active' : ''); ?>"></li>
                        <?php $index++; endforeach; ?>
                </ol>
            <?php } ?>

            <div class="carousel-inner">

                <?php $index = 1; ?>

                <?php foreach ($post_objects as $post): ?>

                    <div
                        class="carousel-item carousel-item-<?php echo $index; ?> <?php echo($index == 1 ? 'active' : ''); ?>"
                        style="background-image: url(<?php echo $post['banner_image']; ?>); background-position: <?php echo $post['image_position']; ?>">
                        <div class="d-flex h-100">
                            <div class="banner__color-overlay"></div>
                            <div class="container py-3 py-md-1">
                                <div class="row align-items-center h-100">
                                    <div class="col-sm-9 offset-sm-1 col-xl-6 offset-xl-0">
                                        <h2 class="carousel-block__title"><?php echo $post['title']; ?></h2>
                                        <?php if ($post['blurb']): ?>
                                            <p class="lead text-primary d-none d-md-block"><?php echo $post['blurb']; ?></p>
                                        <?php endif; ?>
                                        <?php if ($post['button_text']): ?>
                                            <a href="<?php echo $post['button_link']; ?>"
                                               class="btn btn-primary"><?php echo $post['button_text']; ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $index++; endforeach; ?>

            </div>

            <?php if (count($post_objects) > 1) { ?>
                <a class="carousel-control-prev" href="#banner-carousel-<?php echo $id; ?>" role="button"
                   data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#banner-carousel-<?php echo $id; ?>" role="button"
                   data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            <?php } ?>
        </div>
    </div>


    <?php wp_reset_postdata(); ?>

<?php endif; ?>