<?php
/*
    Template name: Поставка ИТ-товаров
*/
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="it-service-wrapper">
                <div class="it-service-header-wrapper">
                    <h6><?= the_field('it_product_header'); ?></h6>
                    <h1><?= the_field('it_product_description'); ?></h1>
                    <p>
                        <?= the_field('it_product_description_2'); ?>
                    </p>
                    <?php custom_breadcrumbs(); ?>
                </div>

                <div class="banner-content-wrapper">
                    <div class="banner-wrapper">
                        <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/banner.png"
                            alt="image" />
                    </div>

                    <div class="banner-description-wrapper">
                        <p>
                            ООО «ZETRIX» является торговой фирмой входящей в состав группы
                            компаний #connector.
                            <br />
                            <br />
                            Мы предлагаем широкий ассортимент современной техники от
                            ведущих производителей, обеспечивая каждому клиенту
                            профессиональный подход, индивидуальный подбор и полный цикл
                            технического сопровождения на всех этапах сотрудничества.
                        </p>
                    </div>

                    <div class="supply-left-right-wrapper">
                        <h3>Широкий ассортимент IT-продукции</h3>
                        <div class="left-right-wrapper">
                            <div class="left-wrapper">
                                <ul>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Серверы и серверное оборудование
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Сетевое оборудование (маршрутизаторы, коммутаторы,
                                        сетевые экраны, точки доступа Wi-Fi)
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Персональные компьютеры и ноутбуки
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        МФУ, принтеры и другая офисная техника
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Источники питания и системы бесперебойного питания
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Системы хранения данных
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Периферийные устройства и аксессуары
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Оборудование для звукоусиления
                                    </li>
                                    <li>
                                        <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg"
                                            alt="image" />
                                        Конференц-системы
                                    </li>
                                </ul>
                            </div>

                            <div class="right-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/type-banner.png"
                                    alt="image" />
                            </div>
                        </div>
                    </div>

                    <div class="partner-content">
                        <div class="partner-content-header">
                            <p>Процесс сотрудничества</p>
                            <h6>Преимущества работы с нами</h6>
                            <h5 class="partner-desc-header">
                                Для Вашего удобства мы упростили процесс заказа IT <br />
                                обслуживания
                            </h5>
                        </div>

                        <div class="partner-content-body supply-content-body">
                            <ul>
                                <li>
                                    Пришлите заявку или свяжитесь с нашим менеджером по
                                    телефону или Telegram +998 98 365-93-25
                                </li>
                                <li>
                                    Получите консультацию и коммерческое предложение с
                                    подбором подходящего оборудования.
                                </li>
                                <li>Согласуйте условия поставки и оплаты.</li>
                                <li>
                                    Получите договор для оплаты в электронном виде в Дидокс.
                                </li>
                                <li>
                                    После оплаты можно забрать товар на условиях самовывоза в
                                    центре Ташкента или доставкой товара в удобное для вас
                                    время и место по договорённости.
                                </li>
                                <li>
                                    Гарантируем техническую консультацию по купленной технике.
                                    Возможна дальнейшая техническая поддержка и помощь на всех
                                    этапах эксплуатации оборудования.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="supply-extra-wrapper">
                        <div class="extra-banner-wrapper">
                            <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/extra-banner.png"
                                alt="image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="product-wrapper">
                <div class="product-header-wrapper">
                    <h6>Наш опыт залог вашего успеха</h6>
                    <h5>Основные разделы нашего сайта товаров</h5>
                    <p>
                        Нам доверяют десятки организаций в Узбекистане, выбирая нас
                        своим надежным поставщиком IT-оборудования. Ознакомиться с
                        отзывами наших клиентов можно здесь.
                    </p>
                </div>

                <div class="product-item-wrapper">
                    <div class="product-container">
                        <div class="item">
                            <div class="left-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/p-1.png"
                                    alt="image" />
                            </div>
                            <div class="right-wrapper">
                                <div class="item-content">
                                    <h6>Серверы:</h6>
                                    <p>
                                        Сервера под офис, 1 С, резервное копирование, хранение
                                        данных, почтовые сервера, серверы приложений,
                                        видеосерверы. в наличии модели: dell, fujitsu, HPE,
                                        huawei, Inspur, SuperMicro. <br />
                                        <br />
                                        Подберем сервер под ваши проекты, нагрузку и бюджет
                                        https://zetrix.uz/product-category/servery/
                                    </p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#">Узнать больше</a>
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="left-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/p-2.png"
                                    alt="image" />
                            </div>
                            <div class="right-wrapper">
                                <div class="item-content">
                                    <h6>Сетевое оборудование:</h6>
                                    <p>
                                        Коммутаторы, маршрутизаторы, роутеры и межсетевые экраны
                                        для бесперебойной и устойчивой сети. в наличии: TP-link,
                                        MikroTik, fortinet, Power Link,Ruijie Reyee и другие
                                        https://zetrix.uz/product-category/setevoe-oborudovanie/
                                    </p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#">Узнать больше</a>
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="left-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/p-3.png"
                                    alt="image" />
                            </div>
                            <div class="right-wrapper">
                                <div class="item-content">
                                    <h6>Конференц-системы:</h6>
                                    <p>
                                        Оборудование для онлайн-конференций, видео и аудио
                                        созвонов в Zoom, Google meet и других: Веб-камеры,
                                        контроллер камеры, микрофоны, конференц телефоны от
                                        брендов: Televic, Jabra, Lumens и Grandstream
                                        https://zetrix.uz/product-category/konferencz-sistemy/
                                    </p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#">Узнать больше</a>
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="left-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/p-4.png"
                                    alt="image" />
                            </div>
                            <div class="right-wrapper">
                                <div class="item-content">
                                    <h6>Звукоусиление:</h6>
                                    <p>
                                        Акустические системы, усилители и AV-контроллеры от
                                        EXTRON для качественного звука в офисах, различных
                                        учреждениях и заведениях
                                        https://zetrix.uz/product-category/zvukousilenie/
                                    </p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#">Узнать больше</a>
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="left-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/p-5.png"
                                    alt="image" />
                            </div>
                            <div class="right-wrapper">
                                <div class="item-content">
                                    <h6>IP телефония:</h6>
                                    <p>
                                        IP АТС, IP-шлюзы, IP-телефонные аппараты от брендов
                                        Fanvil и Grandstream для стабильного и надежного
                                        соединения в коллцентрах, офисах, спец. организациях,
                                        организация IP телефонии на базе Asterisk
                                        https://zetrix.uz/product-category/ip-telefoniya/
                                    </p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#">Узнать больше</a>
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="left-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/p-6.png"
                                    alt="image" />
                            </div>
                            <div class="right-wrapper">
                                <div class="item-content">
                                    <h6>Компьютерная техника:</h6>
                                    <p>
                                        Компьютеры в сборе, мониторы, моноблоки, ноутбуки и
                                        планшеты от брендов: Apple, Dell, HP, Atech и Acer
                                        https://zetrix.uz/product-category/kompyuternaya-tehnika/
                                    </p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#">Узнать больше</a>
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="left-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/p-7.png"
                                    alt="image" />
                            </div>
                            <div class="right-wrapper">
                                <div class="item-content">
                                    <h6>Техника для печати:</h6>
                                    <p>
                                        Оборудование для печати – Лазерные, струйные, ч/б,
                                        цветные принтеры, МФУ, краски, тонеры и картриджи от
                                        брендов Canon, Xerox и HP <br />
                                        https://zetrix.uz/product-category/tehnika-dlya-pechati/
                                    </p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#">Узнать больше</a>
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="left-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/p-8.png"
                                    alt="image" />
                            </div>
                            <div class="right-wrapper">
                                <div class="item-content">
                                    <h6>Проекторы и экраны:</h6>
                                    <p>
                                        Телевизоры и дисплеи от бренда Samsung
                                        https://zetrix.uz/product-category/proektory-ekrany/
                                    </p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#">Узнать больше</a>
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="left-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/p-9.png"
                                    alt="image" />
                            </div>
                            <div class="right-wrapper">
                                <div class="item-content">
                                    <h6>UPS:</h6>
                                    <p>
                                        Источники резервного питания и защиты оборудования от
                                        скачков напряжения и аккумуляторные батареи для ИБП от
                                        брендов APC и 2Е
                                        https://zetrix.uz/product-category/kupit-ups-v-tashkente/
                                    </p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#">Узнать больше</a>
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="left-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/p-10.png"
                                    alt="image" />
                            </div>
                            <div class="right-wrapper">
                                <div class="item-content">
                                    <h6>Программное обеспечение:</h6>
                                    <p>
                                        Лицензионное программное обеспечение для Adobe,
                                        Microsoft, ESET, GeoVision, HCL Software, Veeam Backup и
                                        Страхановец
                                        https://zetrix.uz/product-category/programmnoe-obespechenie/
                                    </p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#">Узнать больше</a>
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="left-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/p-11.png"
                                    alt="image" />
                            </div>
                            <div class="right-wrapper">
                                <div class="item-content">
                                    <h6>Телекоммуникационные/серверные шкафы:</h6>
                                    <p>
                                        Телекоммуникационные/серверные шкафы: Настенные и
                                        напольные металлические шкафы для надежного размещения
                                        техники и серверов <br />
                                        https://zetrix.uz/product-category/telekommunikaczionnye-shkafy/
                                    </p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#">Узнать больше</a>
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="left-wrapper">
                                <img src="<?= get_template_directory_uri() ?> /assets/images/supply-of-it-goods/p-12.png"
                                    alt="image" />
                            </div>
                            <div class="right-wrapper">
                                <div class="item-content">
                                    <h6>Системы хранения данных:</h6>
                                    <p>
                                        Система хранения данных для бэкапа, резервирования,
                                        безопасности NAS и СХД для серверов от брендов: Qnap,
                                        Synology, NetApp, Promise Technology и Seagate <br />
                                        https://zetrix.uz/product-category/sistema-hraneniya-dannyh-shd/
                                    </p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#">Узнать больше</a>
                                    <img src="<?= get_template_directory_uri() ?> /assets/images/home/arrow-up.svg"
                                        alt="image" />
                                </div>
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