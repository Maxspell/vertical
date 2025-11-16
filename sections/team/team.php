<?php
$team_section = get_field('team');

if (empty($team_section) || $team_section['disabled']) {
    return;
}

$list = $team_section['list'] ?? [];
?>

<?php if (!empty($list)) : ?>
    <section class="team">
        <div class="container container--primary">
            <ul class="team__list">
                <?php foreach ($list as $item) :
                    $title = $item['title'] ?? '';
                    $position = $item['position'] ?? '';
                    $image = $item['image'] ?? [];
                ?>
                    <li class="team__item">
                        <?php if (!empty($image)) : ?>
                            <div class="team__img">
                                <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if ($title) : ?>
                            <h3 class="team__title"><?= esc_html($title); ?></h3>
                        <?php endif; ?>
                        <?php if ($position) : ?>
                            <div class="team__position"><?= esc_html($position); ?></div>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>