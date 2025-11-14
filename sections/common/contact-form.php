<?php
$contact_form_section = get_field('contact_form');

if (empty($contact_form_section) || $contact_form_section['disabled']) {
    return;
}

$title = $contact_form_section['title'] ?? '';
$subtitle = $contact_form_section['subtitle'] ?? '';
$list = $contact_form_section['list'] ?? [];
$contact_form = $contact_form_section['contact_form'] ?? '';
?>

<section class="contact-form"></section>