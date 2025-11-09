<?php
$training_section = get_field('training');

if (empty($training_section) || $training_section['disabled']) {
    return;
}

$label = $training_section['label'] ?? '';
$title = $training_section['title'] ?? '';
$image = $training_section['image'] ?? '';
$info_icon_1 = $training_section['info_icon_1'] ?? '';
$info_icon_2 = $training_section['info_icon_2'] ?? '';
$info_icon_3 = $training_section['info_icon_3'] ?? '';
$info_title_1 = $training_section['info_title_1'] ?? '';
$info_title_2 = $training_section['info_title_2'] ?? '';
$info_label_1 = $training_section['info_label_1'] ?? '';
$info_label_2 = $training_section['info_label_2'] ?? '';
$info_label_3 = $training_section['info_label_3'] ?? '';
$info_list_1 = $training_section['info_list_1'] ?? '';
$info_list_2 = $training_section['info_list_2'] ?? '';
$button = $training_section['button'] ?? '';
?>

<section id="training" class="training section">
    <div class="container container--primary">
        <div class="training__inner">
            <div class="training__image">
                <img src="<?php echo esc_url($image); ?>" alt="">
            </div>
            <div class="training__content">
                <div class="section-label"><?php echo $label; ?></div>
                <h2 class="training__title section-title"><?php echo $title; ?></h2>
                <div class="training__info">
                    <h3 class="training__info-title"><?php echo $info_title_1; ?></h3>
                    <div class="training__info-block">
                        <div class="training__info-subtitle">
                            <img src="<?php echo esc_url($info_icon_1); ?>" alt="">
                            <span class="training__info-label"><?php echo $info_label_1; ?></span>
                        </div>
                        <?php if ($info_list_1) : ?>
                            <ul class="training__info-list">
                                <?php foreach ($info_list_1 as $item) : ?>
                                    <li class="training__info-item"><?php echo $item['title']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class="training__info-block">
                        <div class="training__info-subtitle">
                            <img src="<?php echo esc_url($info_icon_2); ?>" alt="">
                            <span class="training__info-label"><?php echo $info_label_2; ?></span>
                        </div>
                        <?php if ($info_list_2) : ?>
                            <ul class="training__info-list">
                                <?php foreach ($info_list_2 as $item) : ?>
                                    <li class="training__info-item"><?php echo $item['title']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class="training__info-divider"></div>

                    <h3 class="training__info-title"><?php echo $info_title_2; ?></h3>
                    <div class="training__info-block">
                        <div class="training__info-subtitle">
                            <img src="<?php echo esc_url($info_icon_3); ?>" alt="">
                            <span class="training__info-label"><?php echo $info_label_3; ?></span>
                        </div>
                    </div>
                    <a href="<?php echo esc_url($button['url']); ?>" class="contacts__button button button--secondary" target="_blank">
                        <span><?php echo esc_html($button['title']); ?></span>
                        <svg class="arrow-btn" aria-hidden="true">
                            <use href="/wp-content/themes/vertical/assets/icons/icons.svg#arrow-btn"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>