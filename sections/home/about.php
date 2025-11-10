<?php
$about_section = get_field('about');

if (empty($about_section) || $about_section['disabled']) {
    return;
}

$text = $about_section['text'] ?? '';
?>

<section class="about section">
    <div class="container">
        <div class="about__inner">
            <div class="about__content">
                <?php echo $text; ?>
            </div>
        </div>
    </div>
</section>