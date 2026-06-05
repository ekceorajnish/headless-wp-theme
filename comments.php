<?php
/**
 * Comments template.
 *
 * @package headless-wp-theme
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title"><?php esc_html_e('Comments', 'headless-wp-theme'); ?></h2>
        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
            ));
            ?>
        </ol>
        <?php the_comments_navigation(); ?>
    <?php endif; ?>

    <?php comment_form(); ?>
</div>
