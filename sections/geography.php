<?php
$geography_section = get_field('geography');

if (empty($geography_section) || $geography_section['disabled']) {
    return;
}

$label = $geography_section['label'] ?? '';
$title = $geography_section['title'] ?? '';
$cities = $geography_section['cities'] ?? '';
$image = $geography_section['image'] ?? '';
$button = $geography_section['button'] ?? '';
?>

<section id="geography" class="geography section">
    <div class="container container--secondary">
        <div class="geography__inner">
            <div class="geography__content">
                <div class="section-label"><?php echo $label; ?></div>
                <h2 class="geography__title section-title"><?php echo $title; ?></h2>
                <div class="geography__cities">
                    <?php echo $cities; ?>
                </div>
                <a href="<?php echo esc_url($button['url']); ?>" class="geography__button button" target="_blank">
                    <span><?php echo esc_html($button['title']); ?></span>
                    <svg class="arrow-btn" aria-hidden="true">
                        <use href="/wp-content/themes/vertical/assets/icons/icons.svg#arrow-btn"></use>
                    </svg>
                </a>
            </div>
            <div class="geography__map">
                <img src="<?php echo esc_url($image); ?>" alt="Мапа" class="geography__map-image">
            </div>
        </div>
    </div>
</section>