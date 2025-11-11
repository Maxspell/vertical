<?php
$team_section = get_field('team');

if (empty($about_section) || $about_section['disabled']) {
    return;
}

$text = $about_section['text'] ?? '';
?>

<section class="team">
    <div class="containers">
        <div class="team__columns">
            <div class="team__column"></div>
            <div class="team__column"></div>
        </div>
    </div>
</section>
