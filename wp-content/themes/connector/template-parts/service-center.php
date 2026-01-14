<?php
/*
    Template name: Сервисный центр
*/
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="it-service-wrapper">
                <div class="it-service-header-wrapper">
                    <h6><?= the_field('service_center_header'); ?></h6>
                    <h1><?= the_field('service_center_description'); ?></h1>
                    <p>
                        <?= nl2br(get_field('service_center_description_2')); ?>
                    </p>
                    <?php custom_breadcrumbs(); ?>
                </div>

                <div class="banner-content-wrapper">
                    <div class="banner-wrapper">
                        <?php
                        $banner_image = get_field('service_center_banner');
                        ?>
                        <img src="<?= esc_attr($banner_image['url']); ?>"
                            alt="<?= esc_attr($banner_image['alt']); ?>" />
                    </div>

                    <div class="banner-description-wrapper">
                        <p>
                            <?= nl2br(get_field('banner_description')); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-center-wrapper">
        <div class="container">
            <div class="it-system-left-right-wrapper">
                <h3><?= the_field('service_center_list_header'); ?></h3>
                <div class="left-right-wrapper">
                    <div class="left-wrapper">
                        <?php if (have_rows('service_center_left_list')): ?>
                            <ul>
                                <?php while (have_rows('service_center_left_list')):
                                    the_row(); ?>
                                    <li>
                                        <?php
                                        $icon = get_sub_field('icon');
                                        $text = get_sub_field('text');
                                        ?>
                                        <img src="<?= esc_attr($icon['url']); ?>" alt="<?= esc_attr($icon['alt']); ?>" />
                                        <?= $text; ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class="right-wrapper">
                        <?php
                        $right_image = get_field('service_center_right_photo');
                        ?>
                        <img src="<?= esc_attr($right_image['url']); ?>" alt="<?= esc_attr($right_image['alt']); ?>" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="it-service-wrapper">
                <div class="banner-content-wrapper">
                    <div class="partner-content">
                        <div class="partner-content-header">
                            <p><?= the_field('cooperation_header'); ?></p>
                            <h6><?= the_field('cooperation_description'); ?></h6>
                            <h5 class="partner-desc-header">
                                <?= nl2br(get_field('cooperation_description_2')); ?>
                            </h5>
                        </div>

                        <div class="partner-content-body">
                            <?php if (have_rows('partner_steps')): ?>
                                <ul>
                                    <?php while (have_rows('partner_steps')):
                                        the_row(); ?>
                                        <li>
                                            <?= get_sub_field('text'); ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="service-extra-banner">
                <?php
                $banner_photo = get_field('cooperation_banner');
                ?>
                <img src="<?= $banner_photo['url'] ?>" alt="<?= $banner_photo['alt'] ?>" />
            </div>
        </div>
    </section>

    <section class="service-center-container">
        <div class="direction-container">
            <div class="container">
                <div class="directions-wrapper">
                    <div class="directions-header-wrapper">
                        <h3><?= the_field('subsections_header'); ?></h3>
                    </div>

                    <?php
                    $services = new WP_Query([
                        'post_type' => 'service_center',
                        'posts_per_page' => 4,
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    ]);
                    ?>

                    <?php if ($services->have_posts()): ?>
                        <div class="directions-content-wrapper">

                            <?php while ($services->have_posts()):
                                $services->the_post();
                                $icon = get_field('icon');
                                $btn_text = get_field('btn_text');
                                $btn_icon = get_field('btn_icon');
                                ?>

                                <div class="item">
                                    <div class="item-content">

                                        <?php if ($icon): ?>
                                            <div class="icon-wrapper">
                                                <img src="<?= esc_url($icon['url']); ?>" alt="<?= esc_attr($icon['alt']); ?>">
                                            </div>
                                        <?php endif; ?>

                                        <h6>
                                            <?= esc_html(get_the_title()); ?>
                                        </h6>

                                        <?php echo the_content(); ?>

                                    </div>

                                    <div class="btn-wrapper">
                                        <a href="<?= esc_url(get_permalink()); ?>">
                                            <?= esc_html($btn_text); ?>
                                        </a>
                                        <img src="<?= esc_url($btn_icon['url']) ?>" alt="<?= esc_attr($btn_icon['alt']) ?>">
                                    </div>
                                </div>

                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>