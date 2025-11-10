<?php
$hero_section = get_field('hero');

if (empty($hero_section) || $hero_section['disabled']) {
    return;
}

$title = $hero_section['title'] ?? '';
?>

<section class=""></section>