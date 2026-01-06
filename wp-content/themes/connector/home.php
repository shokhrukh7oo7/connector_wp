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
                    <h2>Типовые IT решения</h2>
                    <p>
                        Эффективные и проверенные IT-решения, внедряемые нами в
                        организациях для оптимизации рабочих процессов и повышения
                        операционной эффективности
                    </p>
                    <a href="#" class="btn btn-solution">
                        Еще больше IT решении
                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg" alt="image" />
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
                    <div class="col-12 col-lg-6 p-2">
                        <div class="card-item">
                            <div class="card-image">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/card-1.png"
                                    alt="image" />
                            </div>
                            <div class="card-content">
                                <div class="card-top-wrapper">
                                    <h5>Как организовать работу с 1C на предприятии</h5>
                                    <p>
                                        Cloud computing revolutionizes IT by offering scalable
                                        resources over the internet. Businesses can reduce
                                        costs, enhance flexibility, and improve collaboration.
                                        Popular services include AWS, Google…
                                    </p>
                                </div>
                                <div class="card-bottom-wrapper">
                                    <a href="#">
                                        Узнать больше
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="card-item">
                            <div class="card-image">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/card-2.png"
                                    alt="image" />
                            </div>
                            <div class="card-content">
                                <div class="card-top-wrapper">
                                    <h5>Регулярное бэĸапирование данных и процессов</h5>
                                    <p>
                                        Cloud computing revolutionizes IT by offering scalable
                                        resources over the internet. Businesses can reduce
                                        costs, enhance flexibility, and improve collaboration.
                                        Popular services include AWS, Google…
                                    </p>
                                </div>
                                <div class="card-bottom-wrapper">
                                    <a href="#">
                                        Узнать больше
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="card-item">
                            <div class="card-image">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/card-3.png"
                                    alt="image" />
                            </div>
                            <div class="card-content">
                                <div class="card-top-wrapper">
                                    <h5>Связь филиалов предприятия через VPN</h5>
                                    <p>
                                        Cloud computing revolutionizes IT by offering scalable
                                        resources over the internet. Businesses can reduce
                                        costs, enhance flexibility, and improve collaboration.
                                        Popular services include AWS, Google…
                                    </p>
                                </div>
                                <div class="card-bottom-wrapper">
                                    <a href="#">
                                        Узнать больше
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="card-item">
                            <div class="card-image">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/card-4.png"
                                    alt="image" />
                            </div>
                            <div class="card-content">
                                <div class="card-top-wrapper">
                                    <h5>Мониторинг IT инфраструĸтуры 24/7</h5>
                                    <p>
                                        Cloud computing revolutionizes IT by offering scalable
                                        resources over the internet. Businesses can reduce
                                        costs, enhance flexibility, and improve collaboration.
                                        Popular services include AWS, Google…
                                    </p>
                                </div>
                                <div class="card-bottom-wrapper">
                                    <a href="#">
                                        Узнать больше
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <a href="#">Тарифы</a>
                    <h3>Базовые тарифы на IT обслуживание</h3>
                    <p>
                        Как правило, стоимость IT обслуживания всегда индивидуальная.
                        Однако для ориентира мы приводим наши базовые тарифы. Заказчик
                        всегда может оценить выгоду и спланировать бюджет на IT
                        обслуживание.
                    </p>
                </div>
                <div class="tariffs-card-wrapper">
                    <div class="row m-0">
                        <div class="col-12 col-md-6 col-lg-4 p-2">
                            <div class="tariffs-item-wrapper">
                                <h5>Тариф №1</h5>
                                <h3>от 3 млн.сум / мес</h3>
                                <ul>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 5 ПК или ноутбуков
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 2 принтеров или МФУ
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Неограниченное количество заправок принтеров
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        2-3 плановых выезда в месяц
                                    </li>
                                </ul>
                                <a href="#">
                                    Получить консультацию
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 p-2">
                            <div class="tariffs-item-wrapper">
                                <h5>Тариф №2</h5>
                                <h3>от 5 млн.сум / мес</h3>
                                <ul>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 12 ПК или ноутбуков
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 4 принтеров или МФУ
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Неограниченное количество заправок принтеров
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        3-5 плановых выезда в месяц
                                    </li>
                                </ul>
                                <a href="#">
                                    Получить консультацию
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 p-2">
                            <div class="tariffs-item-wrapper">
                                <h5>Тариф №3</h5>
                                <h3>от 7 млн.сум / мес</h3>
                                <ul>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 20 ПК или ноутбуков
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 6 принтеров или МФУ
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Неограниченное количество заправок принтеров
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Индивидуальный график выездов
                                    </li>
                                </ul>
                                <a href="#">
                                    Получить консультацию
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 p-2">
                            <div class="tariffs-item-wrapper">
                                <h5>Тариф №4</h5>
                                <h3>от 7 млн.сум / мес</h3>
                                <ul>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 12 ПК или ноутбуков
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 2 принтеров или МФУ
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Неограниченное количество заправок принтеров
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        1 сервер
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        2-3 плановых выезда в месяц
                                    </li>
                                </ul>
                                <a href="#">
                                    Получить консультацию
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 p-2">
                            <div class="tariffs-item-wrapper">
                                <h5>Тариф №5</h5>
                                <h3>от 9 млн.сум / мес</h3>
                                <ul>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 20 ПК или ноутбуков
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 4 принтеров или МФУ
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Неограниченное количество заправок принтеров
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 3 серверов
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        3-5 плановых выезда в месяц
                                    </li>
                                </ul>
                                <a href="#">
                                    Получить консультацию
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 p-2">
                            <div class="tariffs-item-wrapper">
                                <h5>Тариф №6</h5>
                                <h3>от 12 млн.сум / мес</h3>
                                <ul>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 50 ПК или ноутбуков
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 15 принтеров или МФУ
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Неограниченное количество заправок принтеров
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        До 10 серверов
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Индивидуальный график выездов
                                    </li>
                                </ul>
                                <a href="#">
                                    Получить консультацию
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </a>
                            </div>
                        </div>
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
                    <a href="/assets/pages/utilities.html">Полезности</a>
                    <h3>Интересные статьи</h3>
                    <p>Здесь вы найдете много полезной информации</p>
                </div>

                <div class="article-card-wrapper">
                    <div class="row m-0">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                            <div class="item">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/ar-1.png"
                                    alt="image" />
                                <div class="item-content">
                                    <h6>Об аутсорсинге</h6>
                                    <p>
                                        Развеем мифы об аутсорсинге. В этой статье узнаете много
                                        инсайтов об этой сфере
                                    </p>
                                    <a href="/assets/pages/utilities-detail.html">
                                        Узнать больше
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                            <div class="item">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/ar-2.png"
                                    alt="image" />
                                <div class="item-content">
                                    <h6>Тренды в аутсорсинге</h6>
                                    <p>
                                        Обзор последних трендов и технологий, которые изменяют
                                        аутсорсинг в 2023 году.
                                    </p>
                                    <a href="/assets/pages/utilities-detail.html">
                                        Узнать больше
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                            <div class="item">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/ar-3.png"
                                    alt="image" />
                                <div class="item-content">
                                    <h6>Преимущества аутсорсинга</h6>
                                    <p>
                                        Почему компании выбирают аутсорсинг? Откройте для себя
                                        ключевые преимущества данной стратегии. Почему компании
                                        выбирают аутсорсинг? Откройте для себя ключевые
                                        преимущества данной стратегии. Почему компании выбирают
                                        аутсорсинг? Откройте для себя ключевые преимущества
                                        данной стратегии.
                                    </p>
                                    <a href="/assets/pages/utilities-detail.html">
                                        Узнать больше
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                            <div class="item">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/home/ar-4.png"
                                    alt="image" />
                                <div class="item-content">
                                    <h6>Риски аутсорсинга</h6>
                                    <p>
                                        Какие риски связаны с аутсорсингом и как их
                                        минимизировать? Все, что нужно знать.
                                    </p>
                                    <a href="/assets/pages/utilities-detail.html">
                                        Узнать больше
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>
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