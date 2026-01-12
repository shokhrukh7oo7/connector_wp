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
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 5 ПК или ноутбуков
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 2 принтеров или МФУ
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            Неограниченное количество заправок принтеров
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            2-3 плановых выезда в месяц
                                        </li>
                                    </ul>
                                    <a href="#">
                                        Получить консультацию
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
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
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 12 ПК или ноутбуков
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 4 принтеров или МФУ
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            Неограниченное количество заправок принтеров
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            3-5 плановых выезда в месяц
                                        </li>
                                    </ul>
                                    <a href="#">
                                        Получить консультацию
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
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
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 20 ПК или ноутбуков
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 6 принтеров или МФУ
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            Неограниченное количество заправок принтеров
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            Индивидуальный график выездов
                                        </li>
                                    </ul>
                                    <a href="#">
                                        Получить консультацию
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
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
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 12 ПК или ноутбуков
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 2 принтеров или МФУ
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            Неограниченное количество заправок принтеров
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            1 сервер
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            2-3 плановых выезда в месяц
                                        </li>
                                    </ul>
                                    <a href="#">
                                        Получить консультацию
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
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
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 20 ПК или ноутбуков
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 4 принтеров или МФУ
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            Неограниченное количество заправок принтеров
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 3 серверов
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            3-5 плановых выезда в месяц
                                        </li>
                                    </ul>
                                    <a href="#">
                                        Получить консультацию
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
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
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 50 ПК или ноутбуков
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 15 принтеров или МФУ
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            Неограниченное количество заправок принтеров
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            До 10 серверов
                                        </li>
                                        <li>
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/home/check-circle.svg"
                                                alt="image" />
                                            Индивидуальный график выездов
                                        </li>
                                    </ul>
                                    <a href="#">
                                        Получить консультацию
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
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

    <section>
        <div class="direction-container">
            <div class="container">
                <div class="directions-wrapper">
                    <div class="directions-header-wrapper">
                        <a href="#">IT обслуживание. Подразделы</a>
                        <h3>Наш опыт - залог Вашего успеха!</h3>
                        <p>
                            Нам доверяют десятки организаций в Узбекистане, выбирая нас
                            своим надежным партнером по IT обслуживанию. Ознакомиться с
                            отзывами наших клиентов можно здесь.
                        </p>
                    </div>

                    <div class="directions-content-wrapper">
                        <div class="item">
                            <div class="item-content">
                                <div class="icon-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/it-service/t-1.svg"
                                        alt="image" />
                                </div>
                                <h6>IT аудит</h6>
                                <p>
                                    IT аудит оценивает технологии в компании, выявляет
                                    уязвимости и оптимизирует процессы, помогая
                                    соответствовать законодательству и снижать риски.
                                </p>
                            </div>
                            <div class="btn-wrapper">
                                <a href="#">Узнать больше</a>
                                <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
                                    alt="image" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-content">
                                <div class="icon-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/it-service/t-2.svg"
                                        alt="image" />
                                </div>
                                <h6>Подписание NDA</h6>
                                <p>
                                    Соглашение о неразглашении (NDA) — это юридический
                                    документ, который защищает конфиденциальную информацию
                                    между сторонами.
                                </p>
                            </div>
                            <div class="btn-wrapper">
                                <a href="#">Узнать больше</a>
                                <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
                                    alt="image" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-content">
                                <div class="icon-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/it-service/t-3.svg"
                                        alt="image" />
                                </div>
                                <h6>Система контроля заявок</h6>
                                <p>
                                    Система контроля заявок обеспечивает надежный и
                                    эффективный процесс управления запросами.
                                </p>
                            </div>
                            <div class="btn-wrapper">
                                <a href="#">Узнать больше</a>
                                <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
                                    alt="image" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-content">
                                <div class="icon-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/it-service/t-4.svg"
                                        alt="image" />
                                </div>
                                <h6>Об IT аутсорсинге</h6>
                                <p>
                                    IT аутсорсинг — это стратегический подход, позволяющий
                                    компаниям сосредоточиться на своих ключевых задачах,
                                    передавая управление IT-услугами профессионалам.
                                </p>
                            </div>
                            <div class="btn-wrapper">
                                <a href="#">Узнать больше</a>
                                <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
                                    alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>