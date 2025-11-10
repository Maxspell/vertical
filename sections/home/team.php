<?php
$team_section = get_field('team');

if (empty($about_section) || $about_section['disabled']) {
    return;
}

$text = $about_section['text'] ?? '';
