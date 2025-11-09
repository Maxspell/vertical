<?php
$hero_section = get_field('hero');

if (empty($hero_section) || $hero_section['disabled']) {
    return;
}

$title = $hero_section['title'] ?? '';
$subtitle = $hero_section['subtitle'] ?? '';
$video = $hero_section['video'] ?? '';
$button = $hero_section['button'] ?? '';
$image_1 = $hero_section['image_1'] ?? '';
$image_2 = $hero_section['image_2'] ?? '';
?>

<section class="hero">
    <div class="container container--secondary">
        <div class="hero__inner">
            <div class="hero__media">
                <img src="<?php echo esc_url($video); ?>" alt="Відео" class="hero__video">
            </div>
            <div class="hero__content">

                <?php if ($subtitle) : ?>
                    <span class="hero__subtitle"><?php echo esc_html($subtitle); ?></span>
                <?php endif; ?>

                <?php if ($title) : ?>
                    <h1 class="hero__title"><?php echo esc_html($title); ?></h1>
                <?php endif; ?>

                <a href="<?php echo esc_url($button['url']); ?>" class="hero__button button" target="_blank">
                    <span><?php echo esc_html($button['title']); ?></span>
                    <svg class="arrow-btn" aria-hidden="true">
                        <use href="/wp-content/themes/vertical/assets/icons/icons.svg#arrow-btn"></use>
                    </svg>
                </a>

                <div class="hero__gallery">
                    <div class="hero__gallery-item">
                        <?php if ($image_1) : ?>
                            <img src="<?php echo esc_url($image_1); ?>" alt="Військові" class="hero__gallery-image">
                        <?php endif; ?>
                    </div>
                    <div class="hero__gallery-item">
                        <?php if ($image_2) : ?>
                            <img src="<?php echo esc_url($image_2); ?>" alt="Тренування" class="hero__gallery-image">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>