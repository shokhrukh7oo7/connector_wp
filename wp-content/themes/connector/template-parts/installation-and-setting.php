<?php
/*
    Template name: Инсталляция и настройка ПО
*/
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="it-service-wrapper">
                <div class="it-service-header-wrapper">
                    <h6><?= the_field('installation_header'); ?></h6>
                    <h1><?= the_field('installation_description'); ?></h1>
                    <p>
                        <?= nl2br(the_field('installation_description_2')); ?>
                    </p>
                    <?php custom_breadcrumbs(); ?>
                </div>

                <div class="banner-content-wrapper">
                    <div class="banner-wrapper">
                        <?php
                        $installation_banner = get_field('installation_banner');
                        ?>
                        <img src="<?= esc_url($installation_banner['url']) ?>"
                            alt="<?= esc_attr($installation_banner['alt']) ?>" />
                    </div>

                    <div class="banner-description-wrapper">
                        <?= nl2br(get_field('installation_banner_description')); ?>
                    </div>

                    <div class="inst-left-right-wrapper">
                        <div class="left-wrapper">
                            <h3>
                                <?= nl2br(get_field('installation_left_list_header')); ?>
                            </h3>

                            <?php if (have_rows('installation_left_list')): ?>
                                <ul>
                                    <?php while (have_rows('installation_left_list')):
                                        the_row(); ?>
                                        <?php
                                        $icon = get_sub_field('icon');
                                        $header = get_sub_field('header');
                                        $description = get_sub_field('installation_left_list_text');
                                        ?>
                                        <li>
                                            <img src="<?= esc_url($icon['url']) ?>" alt="<?= esc_attr($icon['alt']) ?>">
                                            <div>
                                                <span>
                                                    <?= esc_html($header) ?>
                                                </span><br>
                                                <?= esc_html($description) ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>

                        <div class="right-wrapper">
                            <h3>
                                <?= nl2br(get_field('installation_right_list_header')); ?>
                            </h3>

                            <?php if (have_rows('installation_right_list')): ?>
                                <ul>
                                    <?php while (have_rows('installation_right_list')):
                                        the_row(); ?>
                                        <?php
                                        $icon = get_sub_field('icon');
                                        $header = get_sub_field('header');
                                        $description = get_sub_field('installation_right_list_text');
                                        ?>
                                        <li>
                                            <img src="<?= esc_url($icon['url']) ?>" alt="<?= esc_attr($icon['alt']) ?>">
                                            <div>
                                                <span>
                                                    <?= esc_html($header) ?>
                                                </span><br>
                                                <?= esc_html($description) ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="inst-extra-wrapper">
                        <p>
                            <?= nl2br(get_field('description_under_list')); ?>
                        </p>
                        <div class="extra-banner-wrapper">
                            <?php
                            $inatallation_extra_banner = get_field('description_under_list_banner');
                            ?>
                            <img src="<?= esc_url($inatallation_extra_banner['url']) ?>"
                                alt="<?= esc_attr($inatallation_extra_banner['alt']) ?>" />
                        </div>
                    </div>

                    <div class="inst-extra-wrapper-2">
                        <h3>
                            <?= nl2br(get_field('installation_extra_list_header')); ?>
                        </h3>
                        <div class="ins-extra-wrapper-two-content">
                            <?php if (have_rows('installation_extra_left_list')): ?>
                                <ul>
                                    <?php while (have_rows('installation_extra_left_list')):
                                        the_row(); ?>
                                        <?php
                                        $icon = get_sub_field('icon');
                                        $header = get_sub_field('header');
                                        $description = get_sub_field('installation_extra_left_list_text');
                                        ?>
                                        <li>
                                            <img src="<?= esc_url($icon['url']) ?>" alt="<?= esc_attr($icon['alt']) ?>">
                                            <div>
                                                <span><?= esc_html($header) ?></span><br>
                                                <?= esc_html($description) ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                            <!--  -->
                            <?php if (have_rows('installation_extra_right_list')): ?>
                                <ul>
                                    <?php while (have_rows('installation_extra_right_list')):
                                        the_row(); ?>
                                        <?php
                                        $icon = get_sub_field('icon');
                                        $header = get_sub_field('header');
                                        $description = get_sub_field('installation_extra_right_list_text');
                                        ?>
                                        <li>
                                            <img src="<?= esc_url($icon['url']) ?>" alt="<?= esc_attr($icon['alt']) ?>">
                                            <div>
                                                <span><?= esc_html($header) ?></span><br>
                                                <?= esc_html($description) ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="inst-extra-wrapper-banner">
                        <?php
                        $extra_banner_2 = get_field('installation_under_banner');
                        ?>
                        <img src="<?= esc_url($extra_banner_2['url']) ?>"
                            alt="<?= esc_attr($extra_banner_2['alt']) ?>" />
                    </div>

                    <div class="partner-content inst-partner-content">
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
                                            <?= wp_kses_post(get_sub_field('text')); ?>
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

    <section class="inst-direction-container">
        <div class="direction-container">
            <div class="container">
                <div class="directions-wrapper">
                    <div class="directions-header-wrapper">
                        <h1><?= the_field('subsections_header'); ?></h1>
                        <h3><?= the_field('subsections_description'); ?></h3>
                        <p>
                            <?= nl2br(get_field('subsections_description_2')); ?>
                        </p>
                    </div>

                    <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                    $services = new WP_Query([
                        'post_type' => 'it_service',
                        'posts_per_page' => 20,
                        'paged' => $paged,
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

                                        <?= the_content(); ?>

                                    </div>

                                    <div class="btn-wrapper">
                                        <a href="<?= esc_url(get_permalink()); ?>">
                                            <?= esc_html($btn_text); ?>
                                        </a>
                                        <img src="<?= esc_url($btn_icon['url']) ?>" alt="<?= esc_attr($btn_icon['alt']) ?>">
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>

                        <div class="pagination-wrapper">
                            <?php
                            echo paginate_links([
                                'total' => $services->max_num_pages,
                                'current' => $paged,
                                'prev_text' => '←',
                                'next_text' => '→',
                            ]);
                            ?>
                        </div>

                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>