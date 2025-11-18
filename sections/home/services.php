<section class="services section">
    <div class="container container--primary">
        <h2 class="services__title section-title">Методи лікування</h2>
        <div class="services__list">
            <?php
            $args = array(
                'post_type'      => 'service',
                'posts_per_page' => -1,
                'order'          => 'ASC',
                'post_status'    => 'publish',
            );

            $services_query = new WP_Query($args);
            ?>

            <?php if ($services_query->have_posts()) : ?>
                <?php while ($services_query->have_posts()) : $services_query->the_post(); ?>

                    <article class="services__item">
                        <a href="<?php the_permalink(); ?>" class="services__link">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="services__thumb">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>

                            <h3 class="services__item-title">
                                <?php the_title(); ?>
                            </h3>
                        </a>
                    </article>

                <?php endwhile; ?>

                <?php
                wp_reset_postdata();
                ?>
            <?php endif; ?>
        </div>

    </div>
</section>