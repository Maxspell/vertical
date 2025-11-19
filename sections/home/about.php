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
    <div class="container container--primary">
        <div class="about__columns">
            <div class="about__column">
                <?php if (!empty($image)) : ?>
                    <div class="about__image">
                        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                    </div>
                <?php endif; ?>
                <?php if (!empty($list)) : ?>
                    <ul class="about__list">
                        <?php foreach ($list as $item) : ?>
                            <li class="about__item">
                                <i class="icon icon-checkmark"></i>
                                <?= esc_html($item['title']); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="about__column">
                <div class="about__content">
                    <?= $text; ?>
                </div>
            </div>
        </div>
    </div>
</section>