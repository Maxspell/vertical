<?php
$reviews_section = get_field('reviews');

if (empty($reviews_section) || $reviews_section['disabled']) {
    return;
}

$list = $reviews_section['list'] ?? [];
?>

<section class="reviews">
    <div class="container">
        <div class="reviews__inner">
            <div class="container container--primary">
                <h2 class="reviews__title section-title">Відгуки</h2>
                <div class="reviews__columns">
                    <div class="reviews__column reviews__column--left">
                        <div class="reviews__slider-wrapper">
                            <div class="reviews__slider swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ($list as $item) : ?>
                                        <div class="reviews__slide swiper-slide">
                                            <div class="reviews__name"><?= $item['title']; ?></div>
                                            <div class="reviews__service"><?= $item['service']; ?></div>
                                            <div class="reviews__text"><?= $item['text']; ?></div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="swiper-pagination reviews__pagination"></div>
                            <div class="swiper-button swiper-button--prev icon icon-arrow-left2"></div>
                            <div class="swiper-button swiper-button--next icon icon-arrow-right2"></div>
                        </div>
                    </div>
                    <div class="reviews__column reviews__column--right">
                    </div>
                </div>
            </div>
        </div>
</section>