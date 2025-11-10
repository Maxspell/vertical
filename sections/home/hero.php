<?php
$hero_section = get_field('hero');

if (empty($hero_section) || $hero_section['disabled']) {
    return;
}

$text = $hero_section['text'] ?? '';
$list = $hero_section['list'] ?? [];
$image_1 = $hero_section['image_1'] ?? [];
$image_2 = $hero_section['image_2'] ?? [];
?>

<section class="hero">

    <div class="hero__grid">
        <div class="hero__text">
            <?php echo $text; ?>
        </div>
        <div class="hero__image"></div>
        <div class="hero__list">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="hero__image"></div>
    </div>

</section>