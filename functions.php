<?php
/**
 * Headless WP theme functions.
 *
 * @package headless-wp-theme
 */

if (!defined('ABSPATH')) {
    exit;
}

define('HEADLESS_WP_THEME_VERSION', '1.0.0');

function headless_wp_theme_setup(): void
{
    load_theme_textdomain('headless-wp-theme', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'navigation-widgets',
        'script',
        'search-form',
        'style',
    ));
    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'headless_wp_theme_setup');

function headless_wp_theme_enqueue_assets(): void
{
    wp_enqueue_style(
        'headless-wp-theme-style',
        get_stylesheet_uri(),
        array(),
        HEADLESS_WP_THEME_VERSION
    );
}
add_action('wp_enqueue_scripts', 'headless_wp_theme_enqueue_assets');
