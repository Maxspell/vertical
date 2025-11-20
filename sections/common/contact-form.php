<?php
$contact_form_section = get_field('contact_form', 'options');

if (empty($contact_form_section) || $contact_form_section['disabled']) {
    return;
}

$title = $contact_form_section['title'] ?? '';
$subtitle = $contact_form_section['subtitle'] ?? '';
$list = $contact_form_section['list'] ?? [];
$contact_form = $contact_form_section['contact_form'] ?? '';
?>

<section class="contact-form section">
    <div class="container container--primary">
        <div class="contact-form__columns">
            <div class="contact-form__column contact-form__column--left">
                <div class="contact-form__body">
                    <div class="contact-form__subtitle">
                        <?= $subtitle; ?>
                    </div>
                    <h2 class="contact-form__title">
                        <?= $title; ?>
                    </h2>
                    <div class="contact-form__form">
                        <?php echo do_shortcode($contact_form); ?>
                    </div>
                </div>
            </div>
            <div class="contact-form__column contact-form__column--right">
                <div class="contact-form__content">
                    <?php if (!empty($list)) : ?>
                        <ul class="contact-form__list">
                            <?php foreach ($list as $item) :
                                $title = $item['title'] ?? '';
                            ?>
                                <li class="contact-form__item">
                                    <i class="icon icon-checkmark"></i>
                                    <span><?= $title; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>