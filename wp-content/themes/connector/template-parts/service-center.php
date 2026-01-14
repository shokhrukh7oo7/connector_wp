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

    <section>
        <div class="container">
            <div class="service-extra-banner">
                <img src="<?= get_template_directory_uri() ?>/assets/images/service-center/extra-banner.png"
                    alt="image" />
            </div>
        </div>
    </section>

    <section class="service-center-container">
        <div class="direction-container">
            <div class="container">
                <div class="directions-wrapper">
                    <div class="directions-header-wrapper">
                        <h3>IT обслуживание. Подразделы</h3>
                    </div>

                    <div class="directions-content-wrapper">
                        <div class="item">
                            <div class="item-content">
                                <div class="icon-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/it-service/t-1.svg"
                                        alt="image" />
                                </div>
                                <h6>
                                    Ремонт печатной <br />
                                    техники
                                </h6>
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
                                <h6>
                                    Ремонт <br />
                                    компьютеров
                                </h6>
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
                                <h6>Ремонт ноутбуков</h6>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>