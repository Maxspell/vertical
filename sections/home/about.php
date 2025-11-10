<?php
$about_section = get_field('about');

if (empty($about_section) || $about_section['disabled']) {
    return;
}

$label = $about_section['label'] ?? '';
$text = $about_section['text'] ?? '';
?>

<section id="about" class="about section">
    <div class="container container--primary">
        <div class="about__inner">
            <div class="section-label"><?php echo $label; ?></div>
            <div class="about__content">
                <?php echo $text; ?>
            </div>
        </div>
    </div>
</section>