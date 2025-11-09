<?php
$partners_section = get_field('partners');

if (empty($partners_section) || $partners_section['disabled']) {
    return;
}

$label = $partners_section['label'] ?? '';
$title = $partners_section['title'] ?? '';
$list = $partners_section['list'] ?? '';
?>

<section id="partners" class="partners section">
    <div class="container container--secondary">
        <div class="partners__inner">
            <div class="section-label"><?php echo $label; ?></div>
            <h2 class="partners__title section-title"><?php echo $title; ?></h2>
            <?php if ($list) : ?>
                <ul class="partners__list">
                    <?php foreach ($list as $item) : ?>
                        <li class="partners__item">
                            <img src="<?php echo esc_url($item['image']); ?>" alt="">
                            <div class="partners__item-title"><?php echo $item['title']; ?></div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>