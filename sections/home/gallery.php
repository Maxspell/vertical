<?php
$gallery_section = get_field('gallery');

if (empty($gallery_section) || $gallery_section['disabled']) {
    return;
}

$text = $gallery_section['text'] ?? '';
