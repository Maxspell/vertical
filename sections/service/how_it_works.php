<?php
$how_it_works_section = get_field('how_it_works');

if (empty($how_it_works_section) || $how_it_works_section['disabled']) {
    return;
}

$title = $how_it_works_section['title'] ?? '';
$text = $how_it_works_section['text'] ?? '';
?>

<section class="how-it-works section">
    <div class="container container--primary">
        <h2 class="how-it-works__title section-title section-title--service"><?= $title; ?></h2>
        <div class="how-it-works__text"><?= $text; ?></div>
    </div>
</section>