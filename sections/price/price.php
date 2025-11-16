<?php
$price_section = get_field('price');

if (empty($price_section) || $price_section['disabled']) {
    return;
}

$list = $price_section['list'] ?? [];
?>

<section class="price">
    <div class="container container--primary">
        <div class="price__columns">

            <div class="price__column price__column--left">
                <!-- Здесь можешь вывести текст / картинку при необходимости -->
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