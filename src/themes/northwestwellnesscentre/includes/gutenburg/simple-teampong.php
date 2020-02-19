<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'banner-carousel-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
// Load value defaults.
$post_objects = get_field('team_pong_block');
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

        <?php $thelayout = $post['block_team_image_position']; ?>

        <section class="team-member__block-section pb-md-50 mb-md-1">
            <div class="container px-0">
                <div class="row d-none d-md-block">
                    <div class="col">
                        <h2><?php echo $post['block_team_heading']; ?></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <?php if (!$post['block_team_photo'] == ''): ?>
                        <img
                            src="<?php echo $post['block_team_photo']; ?>"
                            alt="<?php echo $post['block_team_heading']; ?>"
                            class="img-fluid d-block d-md-none alignfull mb-1"
                        >
                        <img
                            src="<?php echo $post['block_team_photo']; ?>"
                            alt="<?php echo $post['block_team_heading']; ?>"
                            class="img-fluid w-50 d-none d-md-block mb-50 <?php if ($thelayout == 'image-right-text-left'): ?>float-md-right ml-1<?php endif; ?> <?php if ($thelayout == 'image-left-text-right'): ?>float-md-left mr-1<?php endif; ?>"
                        >
                        <?php endif; ?>
                        <h2  class="d-md-none"><?php echo $post['block_team_heading']; ?></h2>
                        <?php echo $post['block_team_blurb']; ?>
                        <?php if ($post['block_team_button_text']): ?>
                            <a href="<?php echo $post['block_team_button_link']; ?>"
                               class=" btn btn-primary btn--flex-clear"
                            >
                                <?php echo $post['block_team_button_text']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </section>

    <?php endforeach; ?>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>