<?php
/*
Template name: Главная страница
*/
get_header();
?>

<!-- Main start -->
<main>
    <section>
        <div class="home-banner-wrapper" style="background-image: url('<?= get_field('banner'); ?> )">
            <div class="container">
                <div class="banner-content">
                    <h1><?= the_field('banner_header'); ?></h1>
                    <p><?= the_field('banner_description'); ?></p>
                    <a href="#"><?= the_field('banner_btn'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- additional start -->
    <section>
        <div class="additional-section-wrapper">
            <div class="container">
                <div class="additional-section-content">
                    <div class="additional-top-wrapper">
                        <div class="additional-top-left-wrapper">
                            <?php if (have_rows('advantages')): ?>
                                <ul>
                                    <?php while (have_rows('advantages')):
                                        the_row(); ?>
                                        <li>
                                            <?php
                                            $icon = get_sub_field('icon');
                                            ?>
                                            <img src="<?= esc_html($icon['url']); ?>" alt="<?= esc_attr($icon['alt']); ?>" />
                                            <?= the_sub_field('text'); ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>

                        <!-- <?php
                        $start_year = get_field('company_start_year');
                        ?> -->
                        <div class="additional-top-right-wrapper">
                            <h2>
                                <!-- <span class="counter" data-start-year="<?= esc_attr($start_year); ?>">0</span> -->
                                <span class="counter" data-start-year="2008">0</span>
                                <span class="counter-suffix"><?= the_field('year'); ?></span>
                            </h2>
                            <p><?= the_field('market'); ?></p>
                        </div>
                    </div>

                    <div class="additional-bottom-wrapper">
                        <p>
                            <?= nl2br(get_field('description')); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- additional end -->

    <!-- service start -->
    <section>
        <div class="container">
            <div class="service-wrapper">
                <div class="service-header-wrapper">
                    <p>
                        <?= the_field('service_header'); ?>
                    </p>
                    <h3>
                        <?= nl2br(get_field('service_description')); ?>
                    </h3>
                </div>

                <div class="service-content-wrapper">
                    <?php if (have_rows('services')): ?>
                        <?php while (have_rows('services')):
                            the_row(); ?>
                            <div class="item">
                                <img class="ornament" src="<?= esc_html(get_sub_field('ornament')['url']); ?>"
                                    alt="<?= esc_attr(get_sub_field('ornament')['alt']); ?>" />
                                <div class="item-content">
                                    <div class="icon-wrapper">
                                        <img src="<?= esc_html(get_sub_field('icon')['url']); ?>"
                                            alt="<?= esc_attr(get_sub_field('icon')['alt']); ?>" />
                                    </div>
                                    <p><?= nl2br(get_sub_field('text')); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- service end -->

    <!-- directions start -->
    <section>
        <div class="container">
            <div class="directions-wrapper">
                <div class="directions-header-wrapper">
                    <h1><?= the_field('direction_header'); ?></h1>
                    <h3><?= the_field('direction_description'); ?></h3>
                    <p>
                        <?= nl2br(get_field('direction_description_2')); ?>
                    </p>
                </div>

                <div class="directions-content-wrapper">
                    <?php
                    $directions = new WP_Query(array(
                        'post_type' => 'direction',
                        'posts_per_page' => -1,
                    ));

                    if ($directions->have_posts()):
                        while ($directions->have_posts()):
                            $directions->the_post();
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
                                    <a href="<?= esc_url($permalink) ?>"><?= esc_html($btn_text) ?> </a>
                                    <?php if ($btn_icon): ?>
                                        <img src="<?= esc_url($btn_icon['url']) ?>" alt="icon" />
                                    <?php else: ?>
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg" alt="icon" />
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
    </section>
    <!-- directions end -->

    <!-- banner section start -->
    <section>
        <div class="banner-equipment" style="background-image: url('<?= the_field('banner_equipment'); ?>')">
            <div class="container">
                <div class="banner-equipment-content-wrapper">
                    <div class="banner-equipment-header">
                        <?php
                        $partner_logo = get_field('partner_logo');
                        ?>
                        <img src="<?= esc_url($partner_logo['url']) ?>" alt="<?= esc_attr($partner_logo['alt']); ?>" />
                        <p>
                            <?= nl2br(get_field('partner_logo_header')) ?>
                        </p>
                    </div>

                    <div class="banner-equipment-body">
                        <h1><?= the_field('banner_equipment_header'); ?></h1>
                        <p>
                            <?= nl2br(get_field('banner_equipment_description')); ?>
                        </p>
                        <div class="btn-wrapper">
                            <a href="#" class="btn-first"><?= the_field('left_btn'); ?></a>
                            <a href="#" class="btn-second">
                                <?= the_field('right_btn'); ?>
                                <?php
                                $right_btn_icon = get_field('right_btn_icon');
                                ?>
                                <img src="<?= esc_url($right_btn_icon['url']) ?>"
                                    alt="<?= esc_attr($right_btn_icon['alt']); ?>" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- task section start -->
    <section>
        <div class="additional-section-wrapper">
            <div class="container">
                <div class="industry">
                    <div class="left-industry-wrapper">
                        <h1><?= the_field('industry_header'); ?></h1>
                        <p>
                            <?= nl2br(get_field('industry_description')); ?>
                        </p>
                        <a href="#" class="btn btn-industry">
                            <?= the_field('industry_btn'); ?>
                            <?php
                            $industry_btn_icon = get_field('industry_btn_icon');
                            ?>
                            <img src="<?= esc_url($industry_btn_icon['url']) ?>"
                                alt="<?= esc_attr($industry_btn_icon['alt']); ?>" />
                        </a>
                    </div>
                    <div class="right-industry-wrapper">
                        <?php if (have_rows('industry')): ?>
                            <ul>
                                <?php while (have_rows('industry')):
                                    the_row(); ?>
                                    <li>
                                        <img src="<?= esc_url(get_sub_field('icon')['url']) ?>"
                                            alt="<?= esc_attr(get_sub_field('icon')['alt']); ?>" />
                                        <?= get_sub_field('text'); ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- task section end -->

    <!-- solution section start -->
    <section>
        <div class="solution-wrapper">
            <div class="container">
                <div class="solution-content">
                    <h2><?= the_field('type_header'); ?></h2>
                    <p>
                        <?= nl2br(get_field('type_description')); ?>
                    </p>
                    <a href="#" class="btn btn-solution">
                        <?= the_field('type_btn'); ?>
                        <?php
                        $type_btn_icon = get_field('type_btn_icon');
                        ?>
                        <img src="<?= esc_url($type_btn_icon['url']) ?>"
                            alt="<?= esc_attr($type_btn_icon['alt']); ?>" />
                    </a>
                </div>
            </div>
            <!-- <img src="<?= get_template_directory_uri() ?> /assets/images/home/years.png" class="year-counter" alt="image" /> -->
        </div>
    </section>
    <!-- solution section end -->

    <!-- card section start -->
    <section>
        <div class="container">
            <div class="card-section-wrapper">
                <div class="row m-0">
                    <?php if (have_rows('cards')): ?>
                        <?php while (have_rows('cards')):
                            the_row(); ?>
                            <div class="col-12 col-lg-6 p-2">
                                <div class="card-item">
                                    <div class="card-image">
                                        <?php
                                        $card_image = get_sub_field('card_icon');
                                        ?>
                                        <img src="<?= esc_url($card_image['url']) ?>"
                                            alt="<?= esc_attr($card_image['alt']); ?>" />
                                    </div>
                                    <div class="card-content">
                                        <div class="card-top-wrapper">
                                            <h5><?= get_sub_field('card_header'); ?></h5>
                                            <p>
                                                <?= nl2br(get_sub_field('card_description')); ?>
                                            </p>
                                        </div>
                                        <div class="card-bottom-wrapper">
                                            <a href="">
                                                <?= get_sub_field('card_btn'); ?>
                                                <?php
                                                $card_link_icon = get_sub_field('card_btn_icon');
                                                ?>
                                                <img src="<?= esc_url($card_link_icon['url']) ?>"
                                                    alt="<?= esc_attr($card_link_icon['alt']); ?>" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- card section end -->

    <!-- tariffs section start -->
    <section>
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
                                // $check_icon = get_field('check_icon');
                                $btn_icon = get_field('btn_icon');
                                $btn_text = get_field('btn_text');
                                ?>
                                <div class="col-12 col-md-6 col-lg-4 p-2">
                                    <div class="tariffs-item-wrapper">

                                        <h5>
                                            <?= esc_html(get_the_title()) ?>
                                        </h5>
                                        <h3>
                                            <?= esc_html($price) ?>
                                        </h3>

                                        <?php if ($features): ?>
                                            <ul>
                                                <?php foreach ($features as $item): ?>
                                                    <?php
                                                    $check_icon = $item['check_icon'];
                                                    ?>
                                                    <li>
                                                        <?php if ($check_icon): ?>
                                                            <img src="<?= esc_url($check_icon['url']) ?>"
                                                                alt="<?= esc_attr($check_icon['alt']) ?>" />
                                                        <?php endif; ?>

                                                        <?= esc_html($item['feature_text']) ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>

                                        <a href="" target="_blank">
                                            <?= esc_html($btn_text) ?>
                                            <?php if ($btn_icon): ?>
                                                <img src="<?= esc_url($btn_icon['url']) ?>" alt="icon" />
                                            <?php endif; ?>
                                        </a>

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
    <!-- tariffs section end -->

    <!-- article section start -->
    <section>
        <div class="container">
            <div class="article-wrapper">
                <div class="article-header-wrapper">
                    <a
                        href="<?= get_permalink(pll_get_post(get_page_by_path('utilities')->ID)); ?>"><?= the_field('utilities_header'); ?></a>
                    <h3><?= the_field('utilities_description'); ?></h3>
                    <p><?= the_field('utilities_description_2'); ?></p>
                </div>

                <div class="article-card-wrapper">
                    <div class="row m-0">
                        <?php
                        $articles = new WP_Query(array(
                            'post_type' => 'utility',
                            'posts_per_page' => 4, // сколько нужно
                            'orderby' => 'menu_order',
                            'order' => 'ASC',
                        ));

                        if ($articles->have_posts()):
                            while ($articles->have_posts()):
                                $articles->the_post();

                                $btn_icon = get_field('btn_icon');
                                $btn_text = get_field('btn_text');
                                $thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                                $permalink = get_permalink();
                                ?>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                                    <div class="item">

                                        <?php if ($thumb): ?>
                                            <img src="<?= esc_url($thumb) ?>" alt="<?= esc_attr(get_the_title()) ?>" />
                                        <?php endif; ?>

                                        <div class="item-content">
                                            <h6>
                                                <?= esc_html(get_the_title()) ?>
                                            </h6>

                                            <?= the_content();?>

                                            <a href="<?= esc_url($permalink) ?>">
                                                <?= esc_html($btn_text) ?>
                                                <?php if ($btn_icon): ?>
                                                    <img src="<?= esc_url($btn_icon['url']) ?>" alt="icon" />
                                                <?php endif; ?>
                                            </a>
                                        </div>
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
    <!-- article section ebd -->

    <!-- swiper section start -->
    <section>
        <div class="swiper-box">
            <div class="container">
                <div class="swiper-container-wrapper">
                    <div class="swiper-header">
                        <h3>Фотособытия</h3>
                        <p>Смотрите хронику наших мероприятии</p>
                    </div>
                    <!-- Slider main container -->
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-social-wrapper">
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/instagram.svg"
                                            alt="image" />
                                    </a>
                                </div>
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/swiper-1.png"
                                    class="swiper-photo" alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-social-wrapper">
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/instagram.svg"
                                            alt="image" />
                                    </a>
                                </div>
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/swiper-2.png"
                                    class="swiper-photo" alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-social-wrapper">
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/instagram.svg"
                                            alt="image" />
                                    </a>
                                </div>
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/swiper-3.png"
                                    class="swiper-photo" alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-social-wrapper">
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/instagram.svg"
                                            alt="image" />
                                    </a>
                                </div>
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/swiper-4.png"
                                    class="swiper-photo" alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-social-wrapper">
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/instagram.svg"
                                            alt="image" />
                                    </a>
                                </div>
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/swiper-5.jpg"
                                    class="swiper-photo" alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-social-wrapper">
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/instagram.svg"
                                            alt="image" />
                                    </a>
                                </div>
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/swiper-1.png"
                                    class="swiper-photo" alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-social-wrapper">
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/instagram.svg"
                                            alt="image" />
                                    </a>
                                </div>
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/swiper-2.png"
                                    class="swiper-photo" alt="image" />
                            </div>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-nav">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- swiper section end -->

    <!-- stepper section start -->
    <section>
        <div class="container">
            <div class="stepper-header-wrapper">
                <a href="#">Сотрудничество</a>
                <h3>Процесс сотрудничества</h3>
                <p>Хочешь, чтобы работало хорошо? Мы сделаем!</p>
            </div>
        </div>
        <div class="steps">
            <div class="container">
                <div class="stepper-wrapper">
                    <div class="steps-wrapper">
                        <div class="step">
                            <div class="step-circle">1</div>
                            <h4>Консультация</h4>
                            <p>Анализ потребностей и определение оптимального решения</p>
                        </div>

                        <div class="step">
                            <div class="step-circle">2</div>
                            <h4>Предложение</h4>
                            <p>Формирование технического и финансового предложения</p>
                        </div>

                        <div class="step">
                            <div class="step-circle">3</div>
                            <h4>Договор</h4>
                            <p>Согласование условий, подписание договора и предоплата</p>
                        </div>

                        <div class="step">
                            <div class="step-circle">4</div>
                            <h4>Результат</h4>
                            <p>Выполнение работ и предоставление результата</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- stepper section end -->

    <!-- footer banner section start -->
    <section>
        <div class="container">
            <div class="footer-banner-wrapper">
                <div class="banner-content-wrapper">
                    <h1>Свяжитесь с нами - и позвольте себе лучшее!</h1>
                    <div class="btn-wrapper">
                        <a href="#" class="contact-btn"> Контакты </a>
                        <a href="#" class="telegram-btn">
                            Написать в телеграм
                            <img src="<?= get_template_directory_uri() ?> /assets/images/home/telegram.png"
                                alt="image" />
                        </a>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?> /assets/images/home/footer-banner.png" class="banner-hand"
                    alt="image" />
            </div>
        </div>
    </section>
    <!-- footer banner section end -->

    <!-- partners section start -->
    <section>
        <div class="container">
            <div class="partner-wrapper">
                <div class="partner-header-wrapper">
                    <a href="#">Партнеры</a>
                    <h3>Благодарим каждого партнера</h3>
                    <p>которые доверяют нам</p>
                </div>

                <div class="partner-swiper-wrapper">
                    <!-- Slider main container -->
                    <div class="swiper-container-partner">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/p-1.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/p-2.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/p-3.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/p-4.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/p-5.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/p-6.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/p-7.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/p-8.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/p-9.png"
                                    alt="image" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/p-10.png"
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

                <!-- <div class="partner-content-wrapper">
              <div class="partner-item">
                <img src="./assets/images/home/p-1.png" alt="image" />
              </div>
              <div class="partner-item">
                <img src="./assets/images/home/p-2.png" alt="image" />
              </div>
              <div class="partner-item">
                <img src="./assets/images/home/p-3.png" alt="image" />
              </div>
              <div class="partner-item">
                <img src="./assets/images/home/p-4.png" alt="image" />
              </div>
              <div class="partner-item">
                <img src="./assets/images/home/p-5.png" alt="image" />
              </div>
              <div class="partner-item">
                <img src="./assets/images/home/p-6.png" alt="image" />
              </div>
              <div class="partner-item">
                <img src="./assets/images/home/p-7.png" alt="image" />
              </div>
              <div class="partner-item">
                <img src="./assets/images/home/p-8.png" alt="image" />
              </div>
              <div class="partner-item">
                <img src="./assets/images/home/p-9.png" alt="image" />
              </div>
              <div class="partner-item">
                <img src="./assets/images/home/p-10.png" alt="image" />
              </div>
            </div> -->
            </div>
        </div>
    </section>
    <!-- partners section end -->
</main>
<!-- Main emd -->

<?php
get_footer();
?>