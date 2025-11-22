<?php
$indications_section = get_field('indications');

if (empty($indications_section) || $indications_section['disabled']) {
    return;
}

$title = $indications_section['title'] ?? '';
$list = $indications_section['list'] ?? [];
?>

<section class="indications section">
    <div class="container container--primary">
        <h2 class="indications__title section-title section-title--service"><?= $title; ?></h2>
        <div class="indications__list">
            <?php foreach ($list as $item) : ?>
                <div class="indications__item">
                    <div class="indications__text"><?= $item['title']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>