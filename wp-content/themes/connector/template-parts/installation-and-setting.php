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
                            Настройка программного обеспечения может <br />
                            потребоваться на следующем оборудовании:
                        </h3>
                        <div class="ins-extra-wrapper-two-content">
                            <ul>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/installation-and-settings/info.svg"
                                        alt="image" />
                                    <div>
                                        <span>Персональные компьютеры, моноблоки и ноутбуки</span>
                                        <br />
                                        для установки системного ПО, офисных программ,
                                        прикладного ПО, драйверов, специализированного ПО и
                                        антивирусной защиты.
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/installation-and-settings/info.svg"
                                        alt="image" />
                                    <div>
                                        <span>Серверы </span> <br />
                                        настройка серверных операционных систем, почтовых
                                        серверов, файловых серверов, баз данных, гипервизоров
                                        (виртуализации), интернет-шлюзов, контроллеров домена,
                                        кластеров, IP телефонии, 1С, DLP-систем, PAM-систем,
                                        SIEM-систем, СКУД, Norma, центр администрирования
                                        антивирусным ПО, Zabbix (система мониторинга) и
                                        резервного копирования. Обновление прошивок контроллеров
                                        сервера. Конфигурирование RAID массивов.
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/installation-and-settings/info.svg"
                                        alt="image" />
                                    <div>
                                        <span>Мобильные устройства</span> <br />
                                        (смартфоны, планшеты) – настройка корпоративных
                                        приложений и средств безопасности. Настройка
                                        корпоративной почты. Подключение к корпоративной Wi-Fi
                                        сети. Авторизация подключения пользователей Wi-Fi через
                                        SMS.
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/installation-and-settings/info.svg"
                                        alt="image" />
                                    <div>
                                        <span>Сетевое оборудование</span> <br />
                                        (маршрутизаторы, коммутаторы, сетевые экраны, точки
                                        доступа) – настройка встроенного ПО и сервисов
                                        безопасности. Настройка IP адресации сетей и подсетей.
                                        Настройка портов. Обновление прошивок.
                                    </div>
                                </li>
                            </ul>
                            <!--  -->
                            <ul>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/installation-and-settings/info.svg"
                                        alt="image" />
                                    <div>
                                        <span>Системы хранения данных</span> <br />
                                        (NAS, SAN, СХД) – установка ПО для управления данными,
                                        резервным копированием, организации доступа.
                                        Конфигурирование RAID массивов. Обновление прошивок.
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/installation-and-settings/info.svg"
                                        alt="image" />
                                    <div>
                                        <span>Видеонаблюдение и системы безопасности</span>
                                        <br />
                                        настройка специализированного программного обеспечения
                                        на регистраторах и видеосерверах. Конфигурирование HDD.
                                        Настройка прав доступа. Настройка камер видеонаблюдения.
                                        Настройка IP адресации сетей и подсетей. Организация
                                        трансляции на вебсайт. Настройка просмотра камер на
                                        смартфонах. Настройка ПО GeoVision. Настройка системы
                                        распознавания автомобильных номеров. Настройка СКУД и
                                        Face ID. Снятие записей событий. Обновление прошивок.
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/installation-and-settings/info.svg"
                                        alt="image" />
                                    <div>
                                        <span>Рабочие станции</span> <br />
                                        для инженерного, графического, дизайнерского и
                                        аналитического ПО. Системное ПО и драйверы.
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/installation-and-settings/info.svg"
                                        alt="image" />
                                    <div>
                                        <span>МФУ и периферийные устройства</span> <br />
                                        установка драйверов, сканирующего/печатающего ПО и
                                        систем контроля доступа. Настройка печати по сети.
                                        Обновление прошивок.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="inst-extra-wrapper-banner">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/installation-and-settings/banner-2.png"
                            alt="image" />
                    </div>

                    <div class="partner-content inst-partner-content">
                        <div class="partner-content-header">
                            <p>Сотрудничество</p>
                            <h6>Процесс сотрудничества</h6>
                            <h5 class="partner-desc-header">
                                Для Вашего удобства мы упростили процесс заказа IT <br />
                                обслуживания
                            </h5>
                        </div>

                        <div class="partner-content-body">
                            <ul>
                                <li>
                                    Пришлите запрос или свяжитесь с нашим менеджером по
                                    телефону или Telegram +998 98 365-93-25
                                </li>
                                <li>
                                    Получите консультацию каким образом будут выполняться
                                    данные работы. На этом этапе можно определить примерную
                                    стоимость ежемесячной подписки на IT обслуживание.
                                </li>
                                <li>
                                    Согласуйте необходимость выезда нашего IT специалиста на
                                    осмотр объекта для точного определения объема работ.
                                </li>
                                <li>
                                    Получите коммерческое предложение на работы по
                                    ежемесячному IT обслуживанию.
                                </li>
                                <li>
                                    После утверждения коммерческого предложения получите
                                    договор для оплаты в электронном виде в Дидокс.
                                </li>
                                <li>Согласуйте необходимость подписания NDA.</li>
                                <li>
                                    После оплаты наши менеджеры готовы принимать заявки на
                                    выполнение работ. Каждая заявка фиксируется в нашей CRM
                                    системе. В базу данных заносится информация о том кто и
                                    когда дал заявку, описание задачи и описание решения этой
                                    задачи, имя специалиста ответственного за выполнения
                                    заявки. Любая (разумная) заявка берется на контроль и
                                    обязательно будет выполнена.
                                </li>
                                <li>
                                    Согласуйте необходимость первичного IT аудита. Для
                                    подробного описания текущей IT инфраструктуры. Данные
                                    работы входят в стоимость ежемесячной абонентской платы
                                    (подписки).
                                </li>
                                <li>
                                    Согласуйте необходимость проведения инвентаризации вашего
                                    IT оборудования. Инвентаризация позволит иметь подробный
                                    список техники с характеристиками, что позволит определить
                                    необходимую модернизацию в перспективе. Инвентаризация
                                    обычно проходит в течении первого месяца обслуживания.
                                    Данные работы входят в стоимость ежемесячной абонентской
                                    платы (подписки).
                                </li>
                                <li>
                                    Обычно со стороны Заказчика выделяется ответственный
                                    менеджер, который дает заявки нашему менеджеру. Так же
                                    возможно создание группы в Телеграм с добавлением
                                    сотрудников Заказчика и Исполнителя, тогда заявки
                                    принимаются прямо в этой группе.
                                </li>
                                <li>
                                    После получения заявки наш менеджер назначает инженера или
                                    IT специалиста для выполнения этой заявки. Сотрудники
                                    нашего IT блока/отдела в течении часа (SLA) начинают
                                    выполнение заявки путем выезда на объект Заказчика или
                                    дистанционно через сеть Интернет. После выполнения заявки,
                                    исполнитель фиксирует выполнение заявки в нашей CRM
                                    системе. В результате формируется база выполненных заявок
                                    по которой Заказчик всегда может затребовать отчет о
                                    проделанной работе за любой период времени.
                                </li>
                                <li>
                                    По окончанию каждого месяца обслуживания или 30 дневного
                                    периода обслуживания (если договор был заключен не 1 числа
                                    месяца) подписываются счет-фактура и акт выполненных работ
                                    за этот период IT обслуживания в электронном виде в
                                    Дидокс. Так же Заказчик делает предоплату за следующий
                                    месяц обслуживания.
                                </li>
                            </ul>
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