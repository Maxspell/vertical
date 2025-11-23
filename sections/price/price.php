<?php
$general = get_field('general', 'options');
$contacts = get_field('contacts', 'options');
$price_section = get_field('price');

if (empty($price_section) || $price_section['disabled']) {
    return;
}

$button = $general['button'] ?? [];
$address = $contacts['address'] ?? '';
$email = $contacts['email'] ?? [];
$phone = $contacts['phone'] ?? [];
$image = $price_section['image'] ?? [];
$list = $price_section['list'] ?? [];
?>

<section class="price">
    <div class="container container--primary">
        <div class="price__columns">

            <div class="price__column price__column--left">
                <div class="price__contacts">
                    <?php if (!empty($image)) : ?>
                        <div class="price__image">
                            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                        </div>
                    <?php endif; ?>
                    <address class="location">
                        <?php if ($address) : ?>
                            <div class="location__address">
                                <div class="location__label icon icon-location2"><span>Адреса</span></div>
                                <div class="location__title"><?= $address; ?></div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($email)) : ?>
                            <div class="location__email">
                                <div class="location__label icon icon-envelop"><span>Email</span></div>
                                <div class="location__title"><a href="<?= $email['url']; ?>"><?= $email['title']; ?></a></div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($phone)) : ?>
                            <div class="location__phone">
                                <div class="location__label icon icon-phone"><span>Телефон</span></div>
                                <div class="location__title"><a href="<?= $phone['url']; ?>"><?= $phone['title']; ?></a></div>
                            </div>
                        <?php endif; ?>
                    </address>
                    <?php if (!empty($button)) : ?>
                        <a href="<?php echo esc_url($button['url']); ?>" class="price__button button">
                            <span><?php echo esc_html($button['title']); ?></span>
                            <i class="icon icon-arrow-right2" aria-hidden="true"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="price__column price__column--right">
                <ul class="price__list">

                    <?php foreach ($list as $item) :
                        $category_title = $item['title'] ?? '';
                        $sub_list = $item['sub_list'] ?? [];
                    ?>
                        <li class="price__item">

                            <?php if ($category_title) : ?>
                                <h3 class="price__item-title">
                                    <?= esc_html($category_title); ?>
                                </h3>
                            <?php endif; ?>

                            <?php if (!empty($sub_list)) : ?>
                                <ul class="price__sublist">
                                    <?php foreach ($sub_list as $sub) :
                                        $service_title = $sub['title'] ?? '';
                                        $service_price = $sub['price'] ?? '';
                                    ?>
                                        <li class="price__subitem">

                                            <?php if ($service_title) : ?>
                                                <span class="price__subitem-title">
                                                    <?= esc_html($service_title); ?>
                                                </span>
                                            <?php endif; ?>
                                            <span class="price__subitem-dots" aria-hidden="true"></span>
                                            <?php if ($service_price) : ?>
                                                <span class="price__subitem-price">
                                                    <?= esc_html($service_price); ?>
                                                </span>
                                            <?php endif; ?>

                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>

        </div>
    </div>
</section>