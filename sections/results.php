<?php
$results_section = get_field('results');

if (empty($results_section) || $results_section['disabled']) {
    return;
}

$label = $results_section['label'] ?? '';
$title = $results_section['title'] ?? '';
$list = $results_section['list'] ?? '';
$image = $results_section['image'] ?? '';
$button = $results_section['button'] ?? '';
?>

<section id="results" class="results section">
    <div class="container container--primary">
        <div class="results__inner">
            <div class="results__content">
                <div class="section-label"><?php echo $label; ?></div>
                <h2 class="results__title section-title"><?php echo $title; ?></h2>
                <ul class="results__list">
                    <?php foreach ($list as $item) : ?>
                        <li class="results__item">
                            <div class="results__item-title"><?php echo $item['title']; ?></div>
                            <svg class="bulb-icon" aria-hidden="true">
                                <use href="/wp-content/themes/vertical/assets/icons/icons.svg#bulb"></use>
                            </svg>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?php echo esc_url($button['url']); ?>" class="results__button button" target="_blank">
                    <span><?php echo esc_html($button['title']); ?></span>
                    <svg class="arrow-btn" aria-hidden="true">
                        <use href="/wp-content/themes/vertical/assets/icons/icons.svg#arrow-btn"></use>
                    </svg>
                </a>
            </div>
            <div class="results__image">
                <img src="<?php echo esc_url($image); ?>" alt="">
            </div>
        </div>
    </div>
</section>