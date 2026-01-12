<?php get_header(); ?>

<section class="direction-single">
    <div class="container">

        <?php if (has_post_thumbnail()): ?>
            <div class="direction-thumb">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>

        <?php if (get_field('icon')): ?>
            <img src="<?= esc_url(get_field('icon')['url']); ?>" alt="">
        <?php endif; ?>

        <h1>
            <?php the_title(); ?>
        </h1>

        <div class="direction-content">
            <?php the_content(); ?>
        </div>

        <!-- <a href="<?= esc_url(get_permalink(pll_get_post(42))); ?>">←
            <?php pll_e('Назад'); ?>
        </a> -->

    </div>
</section>

<?php get_footer(); ?>