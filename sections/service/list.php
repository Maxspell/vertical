<section class="services section">
    <div class="container container--primary">

        <div class="services__list">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
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
            <?php else : ?>
                <p>Пока нет услуг.</p>
            <?php endif; ?>
        </div>

    </div>
</section>