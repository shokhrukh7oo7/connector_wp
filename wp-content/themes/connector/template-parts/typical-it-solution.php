<?php
/*
    Template name: Типовые IT решения
*/
get_header();
?>

<main>
    <section class="solving-wrapper">
        <div class="container">
            <div class="it-service-wrapper">
                <div class="it-service-header-wrapper">
                    <h6><?= the_field('type_header'); ?></h6>
                    <h1><?= the_field('type_description'); ?></h1>
                    <p>
                        <?= the_field('type_description_2'); ?>
                    </p>
                    <?php custom_breadcrumbs(); ?>
                </div>

                <div class="banner-content-wrapper">
                    <div class="banner-wrapper">
                        <?php
                        $type_banner = get_field('banner');
                        ?>
                        <img src="<?= esc_url($type_banner['url']) ?>" alt="<?= esc_attr($type_banner['alt']) ?>" />
                    </div>

                    <div class="banner-description-wrapper">
                        <?= the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="typical-card-container">
        <div class="container">
            <div class="card-section-wrapper">
                <div class="row m-0">
                    <div class="col-12 col-lg-6 p-2">
                        <div class="card-item">
                            <div class="card-image">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/home/card-1.png"
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
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="card-item">
                            <div class="card-image">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/home/card-2.png"
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
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="card-item">
                            <div class="card-image">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/home/card-3.png"
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
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/home/arrow-up.svg"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="card-item">
                            <div class="card-image">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/home/card-4.png"
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
</main>

<?php
get_footer();
?>