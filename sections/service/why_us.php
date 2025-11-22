<?php
$why_us_section = get_field('why_us');

if (empty($why_us_section) || $why_us_section['disabled']) {
    return;
}

$title = $why_us_section['title'] ?? '';
$list = $why_us_section['list'] ?? [];
?>

<section class="why_us section">
    <div class="container container--primary">
        <h2 class="why_us__title section-title section-title--service"><?= $title; ?></h2>
        <?php if (!empty($list)) : ?>
            <div class="why_us__list">
                <?php foreach ($list as $item) : ?>
                    <div class="why_us__item icon icon-checkmark">
                        <div class="why_us__text"><?= $item['title']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>