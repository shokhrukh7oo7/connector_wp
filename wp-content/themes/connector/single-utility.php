<?php get_header(); ?>

<section class="utility-detail">
    <div class="container">
        <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
        <?php custom_breadcrumbs(); ?>
        <h1><?php the_title(); ?></h1>


        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>