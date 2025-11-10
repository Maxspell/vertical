<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vertical
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="wrapper">
        <?php
        $general = get_field('general', 'options');
        $logo = $general['logo'] ?? [];
        $button = $general['button'] ?? [];
        ?>

        <header class="header">
            <div class="container">
                <div class="header__inner">

                    <div class="header__logo">
                        <?php if (!empty($logo)) : ?>
                            <a href="/" class="logo">
                                <img src="<?= esc_url($logo['url']); ?>" alt="<?= esc_attr($logo['alt']); ?>" class="logo__image">
                            </a>
                        <?php endif; ?>
                    </div>

                    <nav class="header__nav">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'header-menu',
                                'container'       => false,
                                'menu_class'      => 'menu',
                            )
                        );
                        ?>
                    </nav>

                    <?php if (!empty($button)) : ?>
                        <a href="<?php echo esc_url($button['url']); ?>" class="header__button button" target="_blank">
                            <span><?php echo esc_html($button['title']); ?></span>
                            <svg class="arrow-btn" aria-hidden="true">
                                <use href="/wp-content/themes/vertical/assets/icons/icons.svg#arrow-btn"></use>
                            </svg>
                        </a>
                    <?php endif; ?>

                    <div class="burger-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </header>