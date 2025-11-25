<?php
$gallery_section = get_field('gallery');

if (empty($gallery_section) || $gallery_section['disabled']) {
    return;
}

$title = $gallery_section['title'] ?? '';
$list = $gallery_section['list'] ?? [];
?>

<section class="gallery section-animate">
    <div class="container">
        <div class="gallery__inner">
            <div class="container container--primary">
                <h2 class="gallery__title section-title"><?= esc_html($title); ?></h2>
                <?php if (!empty($list)) : ?>
                    <div class="gallery__list">
                        <?php foreach ($list as $item) :
                            $url = $item['item']['url'] ?? '';
                            $alt = $item['item']['alt'] ?? '';
                        ?>
                            <a
                                href="<?= esc_url($url); ?>"
                                data-fancybox="gallery"
                                data-caption="<?= esc_attr($alt); ?>"
                                class="gallery__item">
                                <img
                                    src="<?= esc_url($url); ?>"
                                    alt="<?= esc_attr($alt); ?>">
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>