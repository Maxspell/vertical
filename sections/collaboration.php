<?php
$collaboration_section = get_field('collaboration');

if (empty($collaboration_section) || $collaboration_section['disabled']) {
    return;
}

$label = $collaboration_section['label'] ?? '';
$title = $collaboration_section['title'] ?? '';
$button = $collaboration_section['button'] ?? '';
$lists = $collaboration_section['lists'] ?? '';
?>

<section id="collaboration" class="collaboration section">
    <div class="container container--primary">
        <div class="collaboration__inner">
            <div class="collaboration__header">
                <div class="collaboration__heading">
                    <div class="section-label"><?php echo $label; ?></div>
                    <h2 class="collaboration__title section-title"><?php echo $title; ?></h2>
                </div>
                <a href="<?php echo esc_url($button['url']); ?>" class="collaboration__button button" target="_blank">
                    <span><?php echo esc_html($button['title']); ?></span>
                    <svg class="arrow-btn" aria-hidden="true">
                        <use href="/wp-content/themes/vertical/assets/icons/icons.svg#arrow-btn"></use>
                    </svg>
                </a>
            </div>
            <?php if ($lists) : ?>
                <div class="collaboration__lists">
                    <?php foreach ($lists as $list) : ?>
                        <div class="collaboration__list-group">
                            <?php if (!empty($list['title'])) : ?>
                                <h3 class="collaboration__list-title">
                                    <?php echo esc_html($list['title']); ?>
                                </h3>
                            <?php endif; ?>
                            <?php if (!empty($list['list'])) : ?>
                                <ul class="collaboration__list">
                                    <?php foreach ($list['list'] as $item) : ?>
                                        <li class="collaboration__item">
                                            <?php if (!empty($item['title'])) : ?>
                                                <svg class="circle-icon" aria-hidden="true">
                                                    <use href="/wp-content/themes/vertical/assets/icons/icons.svg#circle"></use>
                                                </svg>
                                                <div class="collaboration__item-title">
                                                    <?php echo esc_html($item['title']); ?>
                                                </div>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>