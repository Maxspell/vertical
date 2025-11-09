<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vertical
 */

?>
<?php
$general = get_field('general', 'options');
$logo = $general['logo'] ?? '';
$copyright = $general['copyright'] ?? '';
?>
<footer class="footer">
    <div class="container container--secondary">
        <div class="footer__inner">
            <div class="footer__top">
                <nav class="footer__nav footer__nav--left">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'header-menu-left',
                            'container'       => false,
                            'menu_class'      => 'menu menu--left',
                        )
                    );
                    ?>
                </nav>

                <div class="footer__logo">
                    <a href="/" class="logo">
                        <img src="<?= esc_url($logo); ?>" alt="Крилаті" class="logo__image">
                    </a>
                </div>

                <nav class="footer__nav footer__nav--right">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'header-menu-right',
                            'container'       => false,
                            'menu_class'      => 'menu menu--right',
                        )
                    );
                    ?>
                </nav>
            </div>

            <div class="footer__bottom">
                <div class="footer__policy">
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                </div>
                <div class="footer__copyright">
                    <span><?php echo $copyright; ?></span>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>