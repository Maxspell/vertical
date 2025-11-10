<?php
$portfolio_section = get_field('team');

if (empty($portfolio_section) || $portfolio_section['disabled']) {
    return;
}

$list = $portfolio_section['list'] ?? [];
