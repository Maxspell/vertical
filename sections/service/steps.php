<?php
$steps_section = get_field('steps');

if (empty($steps_section) || $steps_section['disabled']) {
    return;
}

$title = $steps_section['title'] ?? '';
$list = $steps_section['list'] ?? [];
?>

<section class="steps section">
    <div class="container container--primary">
        <h2 class="steps__title section-title section-title--service"><?= $title; ?></h2>
        <?php if (!empty($list)) : ?>
            <div class="steps__list">
                <?php foreach ($list as $item) : ?>
                    <div class="steps__item">
                        <div class="steps__text"><?= $item['title']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>