<?php
$reviews_section = get_field('reviews');

if (empty($reviews_section) || $reviews_section['disabled']) {
    return;
}

$list = $reviews_section['list'] ?? [];
