<?php
$price_section = get_field('price');

if (empty($price_section) || $price_section['disabled']) {
    return;
}

$list = $price_section['list'] ?? [];
