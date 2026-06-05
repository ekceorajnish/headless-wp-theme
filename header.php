<?php
/**
 * Header template.
 *
 * @package headless-wp-theme
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#primary"><?php esc_html_e('Skip to content', 'headless-wp-theme'); ?></a>
<div class="wrap">
    <header class="site-header">
        <?php if (is_front_page() && is_home()) : ?>
            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
        <?php else : ?>
            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
        <?php endif; ?>
        <?php if (get_bloginfo('description')) : ?>
            <p class="site-description"><?php bloginfo('description'); ?></p>
        <?php endif; ?>
        <a class="login" href="<?php echo esc_url(wp_login_url()); ?>"><?php esc_html_e('Login', 'headless-wp-theme'); ?></a>
    </header>
