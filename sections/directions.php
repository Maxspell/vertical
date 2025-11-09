<?php
$directions_section = get_field('directions');

if (empty($directions_section) || $directions_section['disabled']) {
    return;
}

$label = $directions_section['label'] ?? '';
$title = $directions_section['title'] ?? '';
$directions__list = $directions_section['directions_list'] ?? '';
$image_1 = $directions_section['image_1'] ?? '';
$image_2 = $directions_section['image_2'] ?? '';
$image_3 = $directions_section['image_3'] ?? '';
?>

<section id="directions" class="directions section">
    <div class="container container--primary">
        <div class="directions__inner">
            <div class="directions__content">
                <div class="section-label"><?php echo $label; ?></div>
                <h2 class="directions__title section-title"><?php echo $title; ?></h2>
                <?php if ($directions__list) : ?>
                    <ul class="directions__list">
                        <?php foreach ($directions__list as $item) : ?>
                            <li class="directions__list-item">
                                <?= $item['title'] ?>
                                <svg class="circle-icon" aria-hidden="true">
                                    <use href="/wp-content/themes/vertical/assets/icons/icons.svg#circle"></use>
                                </svg>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="directions__gallery">
                <img src="<?php echo esc_url($image_1); ?>" alt="">
                <img src="<?php echo esc_url($image_2); ?>" alt="">
                <img src="<?php echo esc_url($image_3); ?>" alt="">
            </div>
        </div>
    </div>
</section>