<?php get_header(); ?>

<main class="main">
    <?php
    get_template_part('sections/hero');
    get_template_part('sections/about');
    get_template_part('sections/geography');
    get_template_part('sections/directions');
    get_template_part('sections/training');
    get_template_part('sections/benefits');
    get_template_part('sections/results');
    get_template_part('sections/collaboration');
    get_template_part('sections/partners');
    get_template_part('sections/contacts');
    ?>
</main>

<?php get_footer(); ?>