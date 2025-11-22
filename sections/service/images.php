<?php
$images = get_field('images');

if (empty($images) || !empty($images['disabled'])) {
    return;
}

$list = $images['list'] ?? [];
?>

<section class="images section">
    <div class="container container--primary">
        <?php if (!empty($list)) : ?>
            <div class="images__list">
                <?php foreach ($list as $item) :
                    $image = $item['image'] ?? null;
                    if (!$image) continue;
                ?>
                    <div class="images__item">
                        <img
                            src="<?= esc_url($image['url']); ?>"
                            alt="<?= esc_attr($image['alt'] ?? ''); ?>"
                            loading="lazy">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>