<?php
/*
    Template name: Решение IT задач в каждой отрасли
*/
get_header();
?>

<main>
    <section class="solving-wrapper">
        <div class="container">
            <div class="it-service-wrapper">
                <div class="it-service-header-wrapper">
                    <h6><?= the_field('solving_header'); ?></h6>
                    <h1><?= the_field('solving_description'); ?></h1>
                    <p>
                        <?= nl2br(get_field('solving_description_2')); ?>
                    </p>
                    <?php custom_breadcrumbs(); ?>
                </div>

                <div class="banner-content-wrapper">
                    <div class="banner-wrapper">
                        <?php
                        $solving_banner = get_field('solving_banner');
                        ?>
                        <img src="<?= esc_url($solving_banner['url']); ?>"
                            alt="<?= esc_attr($solving_banner['alt']); ?>" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="inst-direction-container solving-direction-wrapper">
        <div class="direction-container">
            <div class="container">
                <div class="directions-wrapper">
                    <div class="directions-header-wrapper">
                        <h1><?= the_field('industry_header'); ?></h1>
                        <h3><?= the_field('industry_description'); ?></h3>
                        <p>
                            <?= nl2br(get_field('industry_description_2')); ?>
                        </p>
                    </div>

                    <div class="directions-content-wrapper">
                        <?php
                        $industry = new WP_Query(array(
                            'post_type' => 'industry',
                            'posts_per_page' => -1,
                        ));

                        if ($industry->have_posts()):
                            while ($industry->have_posts()):
                                $industry->the_post();
                                $icon = get_field('icon'); // ACF поле для иконки направления
                                $btn_text = get_field('btn_text'); // ACF поле для текста кнопки
                                $btn_icon = get_field('btn_icon'); // ACF поле для иконки кнопки
                                // $description = get_field('description'); // ACF поле для описания
                                $permalink = get_permalink(); // Ссылка на пост
                                ?>
                                <div class="item">
                                    <div class="item-content">
                                        <div class="icon-wrapper">
                                            <?php if ($icon): ?>
                                                <img src="<?= esc_url($icon['url']) ?>" alt="<?= esc_attr(get_the_title()) ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <h6>
                                            <?= get_the_title() ?>
                                        </h6>
                                        <!-- <?= esc_html($description) ?> -->
                                        <?= the_content() ?>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="<?= esc_url($permalink) ?>">
                                            <?= esc_html($btn_text) ?>
                                        </a>
                                        <?php if ($btn_icon): ?>
                                            <img src="<?= esc_url($btn_icon['url']) ?>" alt="icon" />
                                        <?php else: ?>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
                                                alt="icon" />
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
    </section>

    <section>
        <div class="container">
            <div class="map-container-wrapper">
                <img class="map-banner"
                    src="<?= get_template_directory_uri() ?>/assets/images/solving-it-problems/map.png" alt="image" />
                <div class="map-content-wrapper">
                    <div class="left-wrapper">
                        <h1>Где бы вы ни были, мы можем помочь</h1>
                        <p>
                            Наша задача - помочь вашему бизнесу работать быстрее и
                            прибыльнее, взяв на себя все рутинные IT-задачи.
                        </p>
                    </div>
                    <div class="right-wrapper">
                        <div class="right-contact-wrapper">
                            <h3>Бесплатная консультация</h3>
                            <p>Позвоните или напишите в Телеграм</p>
                            <div class="btn-wrapper">
                                <a href="#">
                                    Позвонить
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/solving-it-problems/phone.svg"
                                        alt="image" />
                                </a>
                                <a href="#">
                                    Написать в Телеграм
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/solving-it-problems/telegram-logo.svg"
                                        alt="image" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="solving-partner">
                <div class="partner-swiper-wrapper">
                    <!-- Slider main container -->
                    <div class="swiper-container-solving-partner">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/solving-it-problems/p-1.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/solving-it-problems/p-2.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/solving-it-problems/p-3.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/solving-it-problems/p-4.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/solving-it-problems/p-5.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/solving-it-problems/p-6.png"
                                    alt="image" />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-nav">
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>