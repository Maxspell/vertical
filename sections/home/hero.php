<?php
$hero_section = get_field('hero');

if (empty($hero_section) || $hero_section['disabled']) {
    return;
}

$text = $hero_section['text'] ?? '';
$list = $hero_section['list'] ?? [];
$image_1 = $hero_section['image_1'] ?? [];
$image_2 = $hero_section['image_2'] ?? [];
?>

<section class="hero">
    <div class="container container--secondary">
        <div class="hero__columns">
            <div class="hero__column">
                <div class="hero__text">
                    <?= $text; ?>
                </div>
                <div class="hero__image">
                    <?php if (!empty($image_2)) : ?>
                        <img src="<?= esc_url($image_2['url']); ?>" alt="<?= esc_attr($image_2['alt']); ?>">
                    <?php endif; ?>
                </div>
                <?php if (!empty($list)) : ?>
                    <ul class="hero__list">
                        <?php foreach ($list as $item) : ?>
                            <li><?= $item['title']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="hero__column">
                <?php if (!empty($image_1)) : ?>
                    <img src="<?= esc_url($image_1['url']); ?>" alt="<?= esc_attr($image_1['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>