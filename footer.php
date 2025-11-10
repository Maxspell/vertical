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
$logo = $general['logo'] ?? [];
$copyright = $general['copyright'] ?? '';
?>
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__top">
                <?php if (!empty($logo)) : ?>
                    <div class="footer__logo">
                        <a href="/" class="logo">
                            <img src="<?= esc_url($logo['url']); ?>" alt="<?= esc_attr($logo['alt']); ?>">
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="footer__bottom">
                <?php if ($copyright) : ?>
                    <div class="footer__copyright">
                        <?= esc_html($copyright); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>