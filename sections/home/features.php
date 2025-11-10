<?php
$features_section = get_field('features');

if (empty($features_section) || $features_section['disabled']) {
    return;
}

$list = $features_section['list'] ?? [];
?>

<?php if (!empty($list)) : ?>
    <section class="features">
        <div class="container">
            <div class="features__list">
                <?php foreach ($list as $item) :
                    $title = $item['title'] ?? '';
                    $description = $item['description'] ?? '';
                    $icon = $item['icon'] ?? [];
                ?>
                    <div class="features__item">
                        <?php if (!empty($icon)) : ?>
                            <img class="features__icon" src="<?= esc_url($icon['url']); ?>" alt="<?= esc_attr($icon['alt']); ?>">
                        <?php endif; ?>
                        <?php if ($title) : ?>
                            <h3 class="features__title"><?= esc_html($title); ?></h3>
                        <?php endif; ?>
                        <?php if ($description) : ?>
                            <div class="features__description"><?= esc_html($description); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>