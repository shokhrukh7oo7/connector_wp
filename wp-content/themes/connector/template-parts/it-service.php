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
                            Дополнительно мы можем взять на обслуживание существующие IT
                            системы:
                        </h5>
                        <div class="left-right-wrapper">
                            <div class="left-wrapper">
                                <ul>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="img" />
                                        Локальные вычислительные сети ЛВС/СКС/ВОЛС
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="img" />
                                        Системы видеонаблюдения и безопасности
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="img" />
                                        Охранно-пожарная сигнализация (ОПС)
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="img" />
                                        Серверные и дата-центры
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="img" />
                                        Wi-Fi системы для организаций и радиомосты
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="img" />
                                        Системы контроля доступа (СКУД) и турникеты
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="img" />
                                        Системы бесперебойного питания и солнечные панели
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="img" />
                                        Конференц-системы, мультимедийные комплексы
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="img" />
                                        Звукоусиление
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="img" />
                                        Возможность заказать модернизацию или новый монтаж IT
                                        систем
                                    </li>
                                </ul>
                            </div>
                            <div class="right-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/it-service/extra-2.png"
                                    alt="image" />
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <h6>Почему выбирают нас?</h6>
                        <p>
                            У нас не просто IT outsourcing, а предоставление полного цикла
                            услуг от возможности приобретения IT оборудования и
                            программного обеспечения, монтажа IT систем, обслуживание
                            всего спектра техники и IT систем, хранение данных и
                            безопасность до собственного сервисного центра.
                            <br />
                            <br />
                            Наша команда имеет квалифицированных инженеров для работы с
                            серверным и сетевым оборудованием, IT специалистов для работы
                            с рабочими станциями и пользователями, а так же мастеров по
                            ремонту вычислительной и оргтехники. Что позволяет выполнять
                            заявки по IT обслуживанию максимально быстро и эффективно c
                            четким соблюдением SLA (гарантированных сроков реагирования и
                            устранения неисправностей).
                            <br />
                            <br />
                            Наши специалисты оснащены автотранспортом, современными
                            ноутбуками и компьютерами, измерительными приборами,
                            оборудованием для тестирования, большим пакетом современного и
                            актуального программного обеспечения, инструментами
                            мониторинга и управления. Это позволяет осуществлять IT
                            поддержку компаний разного масштаба и расширяет географию на
                            всю территорию Узбекистана.
                            <br />
                            <br />
                            С 2009 года наш головной офис неизменно находится по одному
                            адресу в Ташкенте. Мы дорожим каждым клиентом и не допускаем
                            ситуации, когда о ком-то «забывают». В работе мы строго
                            придерживаемся принципов конфиденциальности и уделяем особое
                            внимание обеспечению безопасности данных наших клиентов. Для
                            дополнительной защиты информации мы заключаем договор о
                            неразглашении (NDA – Non-Disclosure Agreement), который
                            гарантирует соблюдение полной тайны всех полученных от
                            Заказчика сведений. Наш опыт и профессионализм заслужили
                            доверие многих локальных и международных компаний, работающих
                            на рынке Узбекистана. Ознакомиться с отзывами наших клиентов
                            можно здесь.
                            <br />
                            <br />
                            Во время IT обслуживания мы оказываем профессиональные
                            консультации по текущим вопросам и перспективе развития IT
                            вашей организации. Наши специалисты помогут подобрать
                            оптимальные решения под ваши задачи и бюджет.
                            <br />
                            <br />
                            Выгодные тарифы и прозрачные условия сотрудничества. Уже на
                            стадии подготовки коммерческого предложения по IT
                            обслуживанию, мы максимально подробно описываем
                            предоставляемые услуги. Стоимость наших услуг средняя, а порой
                            и ниже по рынку IT услуг Узбекистана. С нашими базовыми
                            тарифами на IT аутсорсинг можно ознакомится на этой странице
                            прокрутив ниже.
                        </p>
                    </div>

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

                    <div class="extra-info-wrapper">
                        <div class="banner-wrapper">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/it-service/extra-2.png"
                                alt="image" />
                        </div>

                        <div class="extra-info-content">
                            <h6>Дополнительная информация</h6>
                            <ul>
                                <li>
                                    В стоимость ежемесячной абонентской платы (подписки)
                                    входит неограниченное количество заправок сменных
                                    черно-белых печатающих картриджей популярной техники.
                                    Некоторые модели принтеров и МФУ не могут быть заправлены,
                                    тогда мы производим замену печатающих картриджей на новые.
                                </li>
                                <li>
                                    Все расходные материалы, печатающие картриджи и запасные
                                    части не входят в стоимость ежемесячной абонентской платы
                                    (подписки). Заказчик может их приобрести как
                                    самостоятельно, так и заказать у нас по дополнительным
                                    счетам-фактурам.
                                </li>
                                <li>
                                    Профилактика и чистка печатной техники без разбора
                                    оборудования выполняется при необходимости. Замена
                                    расходных материалов в печатающем картридже типа валов,
                                    барабанов, дозирующих лезвий и пр., так же выполняется при
                                    необходимости. Данные работы входят в стоимость
                                    ежемесячной абонентской платы (подписки).
                                </li>
                                <li>
                                    Детальный ремонт и глубокая профилактика с разбором
                                    техники, замена дорогостоящих комплектующих производится,
                                    как правило, в нашем сервисном центре. Наши специалисты по
                                    согласованию с Заказчиком самостоятельно заберут,
                                    отремонтируют и привезут обратно такую технику. Данные
                                    работы и запчасти оплачиваются отдельно по дополнительным
                                    (к основному договору IT обслуживания) счетам-фактурам.
                                </li>
                                <li>
                                    В случае если договор заключён на обслуживание систем
                                    охранно-пожарной сигнализации мы предоставляем журнал
                                    размеченный для отметок об осмотре и профилактике системы
                                    ОПС. Журнал создается в двух экземплярах по одному для
                                    Заказчика и Исполнителя. Ежемесячно сотрудники исполнителя
                                    заполняют журналы, а сотрудники Заказчика расписываются за
                                    каждый месяц обслуживания. Данный журнал необходим для
                                    предоставления проверяющим органам.
                                </li>
                            </ul>
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