<?php get_header(); ?>

<section class="product-single">
    <div class="container">

        <div class="single-wrapper">

            <div class="single-image">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>
            </div>

            <div class="single-content">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>