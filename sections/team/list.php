<?php
$args = array(
    'post_type' => 'team',
    'posts_per_page' => -1,
    'meta_key' => 'team_order',
    'orderby' => 'meta_value_num',
    'order' => 'ASC'
);
$team_query = new WP_Query($args);
?>

<section class="team section section-animate">
    <div class="container container--primary">

        <div class="team__list">
            <?php if ($team_query->have_posts()) : ?>
                <?php while ($team_query->have_posts()) : $team_query->the_post(); ?>
                    <?php
                    $team = get_field('team');
                    $position = $team['position'] ?? '';
                    ?>
                    <article class="team__item">
                        <a href="<?php the_permalink(); ?>" class="team__link">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="team__img">
                                    <?php the_post_thumbnail('full'); ?>
                                </div>
                            <?php endif; ?>

                            <h3 class="team__title">
                                <?php the_title(); ?>
                            </h3>
                            <?php if ($position) : ?>
                                <div class="team__position"><?= esc_html($position); ?></div>
                            <?php endif; ?>
                        </a>
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

    </div>
</section>