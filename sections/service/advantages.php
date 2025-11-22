<?php
$advantages_section = get_field('advantages');

if (empty($advantages_section) || $advantages_section['disabled']) {
    return;
}

$title = $advantages_section['title'] ?? '';
$list = $advantages_section['list'] ?? [];
?>

<section class="advantages section">
    <div class="container container--primary">
        <h2 class="advantages__title section-title section-title--service"><?= $title; ?></h2>
        <?php if (!empty($list)) : ?>
            <div class="advantages__list">
                <?php foreach ($list as $item) : ?>
                    <div class="advantages__item">
                        <div class="advantages__text"><?= $item['title']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>