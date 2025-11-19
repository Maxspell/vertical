<?php
$gallery_section = get_field('gallery');

if (empty($gallery_section) || $gallery_section['disabled']) {
    return;
}

$title = $gallery_section['title'] ?? '';
$list = $gallery_section['list'] ?? [];
?>

<section class="gallery">
    <div class="container">
        <div class="gallery__inner">
            <div class="container container--primary">
                <h2 class="gallery__title section-title">Галерея</h2>
                <?php if (!empty($list)) : ?>
                    <div class="gallery__list">
                        <?php foreach ($list as $item) : ?>
                            <a href="<?= esc_url($item['url']); ?>">
                                <img src="<?= esc_url($item['url']); ?>" alt="<?= esc_attr($item['alt']); ?>">
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>