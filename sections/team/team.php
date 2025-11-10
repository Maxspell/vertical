<?php
$team_section = get_field('team');

if (empty($team_section) || $team_section['disabled']) {
    return;
}

$list = $team_section['list'] ?? [];
?>

<?php if (!empty($list)) : ?>
    <section class="team">
        <div class="container">
            <div class="team__list">
                <?php foreach ($list as $item) :
                    $title = $item['title'] ?? '';
                    $image = $item['image'] ?? [];
                ?>
                    <div class="team__item">
                        <?php if (!empty($image)) : ?>
                            <img class="team__item-img" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                        <?php if ($title) : ?>
                            <h3 class="team__item-title"><?= esc_html($title); ?></h3>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>