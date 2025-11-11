<?php
$about_section = get_field('about');

if (empty($about_section) || $about_section['disabled']) {
    return;
}

$text = $about_section['text'] ?? '';
$image = $about_section['image'] ?? [];
$list = $about_section['list'] ?? [];
?>

<section class="about section">
    <div class="container">
        <div class="about__columns">
            <div class="about__column">
                <?php if (!empty($image)) : ?>
                    <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($logo['alt']); ?>">
                <?php endif; ?>
                <?php if (!empty($list)) : ?>
                    <ul class="about__list">
                        <?php foreach ($list as $item) : ?>
                            <li><?= esc_html($item['title']); ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="about__column">
                <?= $text; ?>
            </div>
        </div>
    </div>
</section>