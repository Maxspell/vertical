<?php
$contacts_section = get_field('contacts');

if (empty($contacts_section) || $contacts_section['disabled']) {
    return;
}

$address = $contacts_section['address'] ?? '';
$email = $contacts_section['email'] ?? [];
$phone = $contacts_section['phone'] ?? [];
$list = $contacts_section['list'] ?? [];
$map = $contacts_section['map'] ?? '';
?>

<section class="contacts">
    <div class="contacts__inner">
        <div class="contacts__columns">
            <div class="contacts__column contacts__column--left">
                <div class="contacts__map"><?= $map; ?></div>
                <div class="contacts__location">
                    <address class="location">
                        <?php if ($address) : ?>
                            <div class="location__address">
                                <div class="location__label">Адреса</div>
                                <div class="location__title"><?= $address; ?></div>
                            </div>
                        <?php endif; ?>
                        <?php if ($email) : ?>
                            <div class="contacts__email">
                                <div class="location__label">Email</div>
                                <div class="location__title"><?= $email; ?></div>
                            </div>
                        <?php endif; ?>
                        <?php if ($phone) : ?>
                            <div class="contacts__phone">
                                <div class="location__label">Телефон</div>
                                <div class="location__title"><?= $phone; ?></div>
                            </div>
                        <?php endif; ?>
                    </address>
                </div>
            </div>
            <div class="contacts__column contacts__column--right">
                <?php if (!empty($list)) : ?>
                    <ul class="contacts__list">
                        <?php foreach ($list as $item) :
                            $day = $item['day'] ?? '';
                            $time = $item['time'] ?? '';
                        ?>
                            <li class="contacts__item">
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