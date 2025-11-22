<section class="content-section section">
    <div class="container container--primary">
        <article class="team-single">
            <div class="team-single__grid">
                <div class="team-single__left">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="team-single__img">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="team-single__right">
                    <div class="team-single__content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>