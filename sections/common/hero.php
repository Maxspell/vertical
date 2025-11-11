<?php
$hero_section = get_field('hero');

if (empty($hero_section) || $hero_section['disabled']) {
    return;
}

$title = $hero_section['title'] ?? '';
$subtitle = $hero_section['subtitle'] ?? '';
$image = $hero_section['image'] ?? [];
?>

<section class="page-hero">
    <div class="page-hero__inner" style="background-image: url();">
        <div class="page-hero__content">
            <?php if ($subtitle) : ?>
                <div class="page-hero__subtitle"><?= esc_html($subtitle); ?></div>
            <?php endif; ?>
            <?php if ($title) : ?>
                <div class="page-hero__title"><?= esc_html($title); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>