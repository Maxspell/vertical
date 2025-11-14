<?php

/**
 * Template Name: Home
 */

get_header();
?>

<main class="main">
    <?php get_template_part('sections/home/hero'); ?>
    <?php get_template_part('sections/home/features'); ?>
    <?php get_template_part('sections/home/about'); ?>
    <?php get_template_part('sections/home/approach'); ?>
    <?php get_template_part('sections/home/services'); ?>
    <?php get_template_part('sections/home/gallery'); ?>
    <?php get_template_part('sections/home/reviews'); ?>
    <?php get_template_part('sections/common/contact-form'); ?>
    <?php get_template_part('sections/common/contacts'); ?>
</main>

<?php get_footer(); ?>