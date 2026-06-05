<?php
/**
 * 404 template.
 *
 * @package headless-wp-theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="entry">
        <h1 class="entry-title"><?php esc_html_e('Page not found', 'headless-wp-theme'); ?></h1>
        <div class="entry-content">
            <p><?php esc_html_e('The page you requested could not be found.', 'headless-wp-theme'); ?></p>
            <?php get_search_form(); ?>
        </div>
    </section>
</main>

<?php
get_footer();
