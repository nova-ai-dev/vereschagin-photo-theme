<?php
/**
 * Theme functions and definitions.
 *
 * @package VereschaginPhotoPremium
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('vereschagin_photo_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function vereschagin_photo_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

        register_nav_menus(
            array(
                'primary' => __('Главное меню', 'vereschagin-photo-premium'),
            )
        );
    }
}
add_action('after_setup_theme', 'vereschagin_photo_setup');

/**
 * Enqueue theme styles and scripts.
 */
function vereschagin_photo_enqueue_assets()
{
    wp_enqueue_style('vereschagin-photo-google-fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Playfair+Display:wght@600;700&display=swap', array(), null);
    wp_enqueue_style('vereschagin-photo-main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');

    wp_enqueue_script('vereschagin-photo-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'vereschagin_photo_enqueue_assets');

/**
 * Fallback menu for one-page sections.
 */
function vereschagin_photo_fallback_menu()
{
    echo '<ul id="primary-menu" class="menu">';
    echo '<li><a href="#hero">Главная</a></li>';
    echo '<li><a href="#services">Услуги</a></li>';
    echo '<li><a href="#portfolio">Портфолио</a></li>';
    echo '<li><a href="#pricing">Цены</a></li>';
    echo '<li><a href="#contacts">Контакты</a></li>';
    echo '</ul>';
}
