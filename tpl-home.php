<?php

/**
 * Template Name: Home
 */

get_header();
?>

<main class="main">
    <?php get_template_part('sections/home/hero'); ?>
    <?php get_template_part('sections/home/benefits'); ?>
    <?php get_template_part('sections/home/requirements'); ?>
    <?php get_template_part('sections/common/reviews'); ?>
    <?php get_template_part('sections/common/events'); ?>
    <?php get_template_part('sections/home/upcoming-events'); ?>
    <?php get_template_part('sections/home/owners'); ?>
    <?php get_template_part('sections/common/partners'); ?>
    <?php get_template_part('sections/common/philosophy'); ?>
</main>

<?php get_footer(); ?>