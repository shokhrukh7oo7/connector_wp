<?php
/*
    Template name: Контакты
*/
get_header();
?>

<main>
    <section class="contact-container">
        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-header-wrapper">
                    <h6><?= the_field('contact_header'); ?></h6>
                    <h1><?= the_field('contact_description'); ?></h1>
                    <?php custom_breadcrumbs(); ?>
                </div>

                <div class="contact-body-wrapper">
                    <!-- contact -->
                    <div class="address-wrapper">
                        <?= the_field('contact_adress'); ?>
                    </div>

                    <!-- address -->
                    <div class="address-image-wrapper">
                        <div class="left-image-wrapper">
                            <?php
                            $left_image = get_field('contact_left_photo'); // массив
                            if ($left_image):
                                ?>
                                <img src="<?= esc_url($left_image['url']); ?>" alt="<?= esc_attr($left_image['alt']); ?>" />
                                <p><?= the_field('contact_left_photo_text'); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="right-image-wrapper">
                            <?php
                            $right_image = get_field('contact_right_photo'); // массив
                            if ($right_image):
                                ?>
                                <img src="<?= esc_url($right_image['url']); ?>"
                                    alt="<?= esc_attr($right_image['alt']); ?>" />
                                <p><?= the_field('contact_right_photo_text'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>


                    <!-- maps -->
                    <div class="address-location-wrapper">
                        <div class="yandex-map-wrapper">
                            <?php
                            $map = get_field('yandex_map'); // массив ACF
                            
                            if ($map && $map['latitude'] && $map['longitude']):
                                $lat = esc_attr($map['latitude']);
                                $lng = esc_attr($map['longitude']);
                                $zoom = isset($map['zoom']) ? intval($map['zoom']) : 18;

                                // фиксируем тип маркера pm2rdm
                                $marker = 'pm2rdm';

                                // формируем src iframe
                                $src = "https://yandex.uz/map-widget/v1/?ll={$lng}%2C{$lat}&z={$zoom}&l=map&pt={$lng},{$lat},{$marker}";
                                ?>
                                <iframe src="<?= esc_url($src); ?>" width="600" height="450" style="border: 0"
                                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-counsultation">
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
</main>

<?php
get_footer();
?>