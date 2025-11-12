<?php
$location_section = get_field('location');

if (empty($location_section) || $location_section['disabled']) {
    return;
}

$address = $location_section['address'] ?? '';
$email = $location_section['email'] ?? [];
$phone = $location_section['phone'] ?? [];
$list = $location_section['list'] ?? [];
?>

<section class="location">
    <div class="location__inner">
        <div class="location__columns">
            <div class="location__column location__column--left">
                <div class="location__map"></div>
                <div class="location__contacts">
                    <address>
                        <?php if ($address) : ?>
                            <div class="location__address">
                                <div class="location__label">Адреса</div>
                                <div class=""><?= $address; ?></div>
                            </div>
                        <?php endif; ?>
                        <?php if ($email) : ?>
                            <div class="location__email">
                                <div class="location__label">Email</div>
                                <div class=""><?= $email; ?></div>
                            </div>
                        <?php endif; ?>
                        <?php if ($phone) : ?>
                            <div class="location__phone">
                                <div class="location__label">Телефон</div>
                                <div class=""><?= $phone; ?></div>
                            </div>
                        <?php endif; ?>
                    </address>
                </div>
            </div>
            <div class="location__column location__column--right">
                <?php if (!empty($list)) : ?>
                    <ul class="location__list">
                        <?php foreach ($list as $item) :
                            $day = $item['day'] ?? '';
                            $time = $item['time'] ?? '';
                        ?>
                            <li class="location__item">
                                <span><?= $day; ?></span>
                                <span><?= $time; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>