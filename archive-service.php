<?php get_header(); ?>

<main class="main">
    <section class="page-hero">
        <div class="container">
            <div class="page-hero__inner" style="background-image: url(/wp-content/uploads/2025/11/page-hero-bg-1.jpg);">
                <div class="page-hero__content">
                    <div class="page-hero__subtitle">Центр сучасної реабілітації</div>
                    <div class="page-hero__title">Послуги</div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('sections/service/list'); ?>
</main>

<?php get_footer(); ?>