<?php
$approach_section = get_field('approach');

if (empty($approach_section) || $approach_section['disabled']) {
    return;
}

$text = $about_section['text'] ?? '';
$photo = $about_section['photo'] ?? [];
$name = $about_section['name'] ?? '';
$position = $about_section['position'] ?? '';
?>

<section class="approach">
    <div class="containers">
        <div class="approach__columns">
            <div class="approach__column">
                <div class="approach__content">
                    <h2 class="approach__title">Командна робота – для Вашого результату:</h2>

                    <p class="approach__text">У нашій клініці з пацієнтом працює одразу кілька фахівців...</p>

                    <h3 class="approach__subtitle">Тепло, як у родині:</h3>

                    <p class="approach__text">
                        Ми розуміємо, що біль — не лише фізичний...
                    </p>
                </div>
            </div>
            <div class="approach__column">
                <div class="approach__expert">
                    <img src="..." alt="" class="approach__photo">

                    <div class="approach__name">Смірнова Олена Сергіївна</div>
                    <div class="approach__position">
                        Клінічний психолог, психоаналітик та сексолог
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>