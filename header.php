<?php
/**
 * Header template.
 *
 * @package VereschaginPhotoPremium
 */

if (!defined('ABSPATH')) {
    exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#content"><?php esc_html_e('Перейти к контенту', 'vereschagin-photo-premium'); ?></a>

<header class="site-header" id="top">
    <div class="container site-header__inner">
        <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>

        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
            <span></span>
            <span></span>
            <span></span>
            <span class="sr-only"><?php esc_html_e('Открыть меню', 'vereschagin-photo-premium'); ?></span>
        </button>

        <nav class="main-nav" aria-label="<?php esc_attr_e('Главная навигация', 'vereschagin-photo-premium'); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => 'vereschagin_photo_fallback_menu',
                )
            );
            ?>
        </nav>
    </div>
</header>

<main id="content" class="site-content">
