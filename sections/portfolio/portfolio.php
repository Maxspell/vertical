<?php
$portfolio_section = get_field('portfolio');

if (empty($portfolio_section) || $portfolio_section['disabled']) {
    return;
}

$list = $portfolio_section['list'] ?? [];
?>

<section class="portfolio section">
    <div class="container container--primary">
        <div class="portfolio__inner">
            <?php if (!empty($list)) : ?>
                <div class="portfolio__list">
                    <?php foreach ($list as $item) :
                        $url = $item['item']['url'] ?? '';
                        $alt = $item['item']['alt'] ?? '';
                    ?>
                        <a
                            href="<?= esc_url($url); ?>"
                            data-fancybox="portfolio"
                            data-caption="<?= esc_attr($alt); ?>"
                            class="portfolio__item">
                            <img
                                src="<?= esc_url($url); ?>"
                                alt="<?= esc_attr($alt); ?>">
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>