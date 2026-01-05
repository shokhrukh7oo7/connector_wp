<?php
/*
    Template name: Клиенты
*/
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="utilities-wrapper">
                <div class="utilities-header-wrapper">
                    <h6>Клиенты</h6>
                    <h1>Наши заказчики</h1>
                    <p>
                        Команда IT специалистов #connector имеет форму нескольких
                        юридический лиц и осуществляет свою деятельность на рынке
                        Узбекистана более 16 лет.
                    </p>
                    <p class="breadcrumbs">Главная / <span>Клиенты</span></p>
                </div>

                <div class="detail-content-wrapper">
                    <div class="banner-wrapper">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/detail/1.png" alt="image" />
                    </div>

                    <div class="content-wrapper">
                        <div class="content">
                            <p>
                                Команда IT специалистов #connector имеет форму нескольких
                                юридических лиц и осуществляет свою деятельность на рынке
                                Узбекистана более 16 лет. Мы имеем лицензии на
                                проектирование, монтаж, ремонт, наладку и техническое
                                обслуживание сетей передачи данных, строительство сетей
                                телекоммуникаций, монтаж систем охранно-пожарной
                                сигнализации и видеонаблюдения.

                                <br />
                                <br />
                                Нашими заказчиками в Узбекистане являются: Президентский
                                Аппарат РУз, Генеральная Прокуратура РУз, МЧС РУз, Новое
                                здание ОлийМажлиса г.Ташкента, более 40 банков г.Ташкента,
                                из них- Республиканский банк АСАКА, 3 банка ВЭД NBU, 3-ПСБ
                                банка, отделения Халк банка, МВД РУз, СП ЗАО «ШОШТРАНС»,
                                Политический Совет Движения предпринимателей и деловых людей
                                Либерально-демократической партии Узбекистана «UzLiDep»,
                                Ассоциация Деловых Женщин Узбекистана «ТадбиркорАёл», ООО
                                Торговый Дом «TRANSTRADEKOMPLEKT», Центральный Дом Офицеров
                                Вооруженных Сил Республики Узбекистан, ООО «VIOL» (Системы
                                Радиосвязи), ОАО «ГЕОБУРТЕХНИКА», ООО «TrodatLomond»,
                                бизнес-комплекс «AVALON», мебельная фабрика «KATRIS» (ЧП
                                «ORIGINAL LYUKS SERVIS»), железнодорожный терминал СП
                                «AsiaTransTerminal», ООО «SINOMED», ООО «Standard Testing»,
                                группа компаний Faberlic, AgroFood, фармацевтическая
                                компания ASKLEPIY, представительство ABBOTT, Государственный
                                комитет Республики Узбекистан по статистике, ДП ARKTIKA,
                                автосервис FORS.UZ, Мубарекский ГПЗ, туроператор CATS, ТРЦ
                                NEXT и это далеко не полный список.
                            </p>

                            <h5>
                                Мы стремимся к долгосрочному обоюдовыгодному сотрудничеству.
                            </h5>
                        </div>
                    </div>

                    <div class="comment-wrapper">
                        <h3>Отзывы</h3>
                        <p>Что говорят наши клиенты</p>

                        <div class="comment-card-wrapper">
                            <div class="row m-0">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                                    <div class="item">
                                        <a data-fancybox="gallery" href="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg">
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg" alt="image" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                                    <div class="item">
                                        <a data-fancybox="gallery" href="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg">
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg" alt="image" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                                    <div class="item">
                                        <a data-fancybox="gallery" href="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg">
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg" alt="image" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                                    <div class="item">
                                        <a data-fancybox="gallery" href="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg">
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg" alt="image" />
                                        </a>
                                    </div>
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