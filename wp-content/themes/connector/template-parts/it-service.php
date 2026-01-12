<?php
/*
    Template name: IT обслуживание
*/
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="it-service-wrapper">
                <div class="it-service-header-wrapper">
                    <h6><?= the_field('it_service_header'); ?></h6>
                    <h1><?= the_field('it_service_description'); ?></h1>
                    <p>
                        <?= nl2br(get_field('it_service_description_2')) ?>
                    </p>
                    <?php custom_breadcrumbs(); ?>
                </div>

                <div class="banner-content-wrapper">
                    <div class="banner-wrapper">
                        <?php
                        $banner = get_field('it_service_banner');
                        ?>
                        <img src="<?= esc_url($banner['url']) ?>" alt="<?= esc_attr($banner['alt']) ?>" />
                    </div>

                    <div class="banner-description-wrapper">
                        <?= the_content(); ?>
                    </div>

                    <div class="extra-section-wrapper">
                        <h5><?= the_field('it_service_extra_info'); ?></h5>
                        <div class="left-right-wrapper">
                            <div class="left-wrapper">
                                <?php if (have_rows('extra_info')): ?>
                                    <ul>
                                        <?php while (have_rows('extra_info')):
                                            the_row(); ?>
                                            <?php
                                            $extra_icon = get_sub_field('extra_icon');
                                            ?>
                                            <li>
                                                <img src="<?= esc_url($extra_icon['url']) ?>"
                                                    alt="<?= esc_attr($extra_icon['alt']) ?>" />
                                                <?= esc_html(get_sub_field('extra_text')); ?>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <div class="right-wrapper">
                                <?php
                                $extra_image = get_field('extra_right_image');
                                ?>
                                <img src="<?= esc_url($extra_image['url']) ?>"
                                    alt="<?= esc_attr($extra_image['alt']) ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="extra-section-wrapper">
                        <h5>
                            <?= the_field('it_service_extra_info_2'); ?>
                        </h5>
                        <div class="left-right-wrapper">
                            <div class="left-wrapper">
                                <?php if (have_rows('extra_info_2')): ?>
                                    <ul>
                                        <?php while (have_rows('extra_info_2')):
                                            the_row(); ?>
                                            <?php
                                            $extra_icon = get_sub_field('extra_icon');
                                            ?>
                                            <li>
                                                <img src="<?= esc_url($extra_icon['url']) ?>"
                                                    alt="<?= esc_attr($extra_icon['alt']) ?>" />
                                                <?= esc_html(get_sub_field('extra_text')); ?>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <div class="right-wrapper">
                                <?php
                                $extra_image_2 = get_field('extra_right_image_2');
                                ?>
                                <img src="<?= esc_url($extra_image_2['url']) ?>"
                                    alt="<?= esc_attr($extra_image_2['alt']) ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <h6><?= the_field('choose_us_header'); ?></h6>
                        <p>
                            <?= nl2br(get_field('choose_us_description')) ?>
                        </p>
                    </div>

                    <div class="partner-content">
                        <div class="partner-content-header">
                            <p><?= the_field('cooperation_header'); ?></p>
                            <h6><?= the_field('cooperation_description'); ?></h6>
                            <h5 class="partner-desc-header">
                                <?= nl2br(get_field('cooperation_description_2')) ?>
                            </h5>
                        </div>

                        <div class="partner-content-body">
                            <?php if (have_rows('partner_steps')): ?>
                                <ul>
                                    <?php while (have_rows('partner_steps')):
                                        the_row(); ?>
                                        <li>
                                            <?= wp_kses_post(get_sub_field('text')); ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>


                    </div>

                    <div class="extra-info-wrapper">
                        <div class="banner-wrapper">
                            <?php
                            $banner_list_icon = get_field('banner_list_icon');
                            ?>
                            <img src="<?= esc_url($banner_list_icon['url']) ?>"
                                alt="<?= esc_attr($banner_list_icon['alt']) ?>" />
                        </div>

                        <div class="extra-info-content">
                            <h6><?= the_field('banner_list_header'); ?></h6>

                            <?php if (have_rows('subscription_list')): ?>
                                <ul>
                                    <?php while (have_rows('subscription_list')):
                                        the_row(); ?>
                                        <?php
                                        $text = get_sub_field('text');

                                        // пропускаем реально пустые строки
                                        if (trim(wp_strip_all_tags($text)) === '') {
                                            continue;
                                        }
                                        ?>
                                        <li>
                                            <?= esc_html($text); ?>
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
        <div class="tariffs-container">
            <div class="container">
                <div class="tariffs-wrapper">
                    <div class="tariffs-header-wrapper">
                        <h1><?= the_field('tariffs_header'); ?></h1>
                        <h3><?= the_field('tariffs_description'); ?></h3>
                        <p>
                            <?= nl2br(get_field('tariffs_description_2')); ?>
                        </p>
                    </div>
                    <div class="tariffs-card-wrapper">
                        <div class="row m-0">
                            <?php
                            $tariffs = new WP_Query(array(
                                'post_type' => 'tariff',
                                'posts_per_page' => -1,
                                'orderby' => 'menu_order',
                                'order' => 'ASC',
                            ));

                            if ($tariffs->have_posts()):
                                while ($tariffs->have_posts()):
                                    $tariffs->the_post();

                                    $price = get_field('price');
                                    $features = get_field('features');
                                    $btn_icon = get_field('btn_icon');
                                    $btn_text = get_field('btn_text');
                                    ?>
                                    <div class="col-12 col-md-6 col-lg-4 p-2">
                                        <div class="tariffs-item-wrapper">

                                            <h5><?= esc_html(get_the_title()) ?></h5>
                                            <h3><?= esc_html($price) ?></h3>

                                            <?php if ($features): ?>
                                                <ul>
                                                    <?php foreach ($features as $item): ?>
                                                        <li>
                                                            <?php if (!empty($item['check_icon'])): ?>
                                                                <img src="<?= esc_url($item['check_icon']['url']) ?>"
                                                                    alt="<?= esc_attr($item['check_icon']['alt']) ?>">
                                                            <?php endif; ?>
                                                            <?= esc_html($item['feature_text']) ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>

                                            <?php if ($btn_text): ?>
                                                <a href="#" target="_blank">
                                                    <?= esc_html($btn_text) ?>
                                                    <?php if ($btn_icon): ?>
                                                        <img src="<?= esc_url($btn_icon['url']) ?>" alt="icon">
                                                    <?php endif; ?>
                                                </a>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="direction-container">
            <div class="container">
                <div class="directions-wrapper">
                    <div class="directions-header-wrapper">
                        <h1><?= the_field('subsections_header'); ?></h1>
                        <h3><?= the_field('subsections_description'); ?></h3>
                        <p>
                            <?= nl2br(get_field('subsections_description_2')) ?>
                        </p>
                    </div>

                    <?php
                    $services = new WP_Query([
                        'post_type' => 'it_service',
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