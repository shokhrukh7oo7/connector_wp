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
                            <iframe
                                src="https://yandex.uz/map-widget/v1/?ll=69.259578%2C41.322278&z=18&l=map&pt=69.259578,41.322278,pm2rdm"
                                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <!-- <p>Яндекс карты</p> -->
                        </div>
                        <!-- <div class="google-map-wrapper">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.375087624003!2d69.25658791091261!3d41.32245639990164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8bfb07ea59e5%3A0x14e42da4d90173d7!2sTole-Bi%20boutique%20store!5e0!3m2!1sru!2s!4v1766141361126!5m2!1sru!2s"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                    </div> -->
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