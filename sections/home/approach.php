<?php
$approach_section = get_field('approach');

if (empty($approach_section) || $approach_section['disabled']) {
    return;
}

$text = $approach_section['text'] ?? '';
$photo = $approach_section['photo'] ?? [];
$name = $approach_section['name'] ?? '';
$position = $approach_section['position'] ?? '';
?>

<section class="approach section">
    <div class="container">
        <div class="approach__columns">
            <div class="approach__column">
                <?php if ($text) : ?>
                    <div class="approach__content">
                        <?= $text; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="approach__column">
                <div class="approach__expert">
                    <?php if (!empty($photo)) : ?>
                        <img src="<?= esc_url($photo['url']); ?>" alt="<?= esc_attr($photo['alt']); ?>" class="approach__photo">
                    <?php endif; ?>
                    <?php if ($name) : ?>
                        <div class="approach__name"><?= $name; ?></div>
                    <?php endif; ?>
                    <?php if ($position) : ?>
                        <div class="approach__position">
                            <?= $position; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>