<?php
/*
    Template name: Поставка лицензионного ПО
*/
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="it-service-wrapper">
                <div class="it-service-header-wrapper">
                    <h6><?= the_field('lisence_header'); ?></h6>
                    <h1><?= the_field('lisence_description'); ?></h1>
                    <p>
                        <?= nl2br(get_field('lisence_description_2')); ?>
                    </p>
                    <?php custom_breadcrumbs(); ?>
                </div>

                <div class="banner-content-wrapper">
                    <div class="banner-wrapper">
                        <?php
                        $lisence_banner = get_field('lisence_banner');
                        ?>
                        <img src="<?= esc_attr($lisence_banner['url']); ?>"
                            alt="<?= esc_attr($lisence_banner['alt']); ?>" />
                    </div>

                    <div class="banner-description-wrapper">
                        <p>
                            <?= nl2br(get_field('lisence_banner_description')); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="supply-lisence-wrpper">
        <div class="additional-section-wrapper">
            <div class="container">
                <div class="additional-section-content">
                    <h2>
                        <?= the_field('assortment_header'); ?>

                    </h2>
                    <div class="additional-top-wrapper">
                        <div class="additional-top-left-wrapper">

                            <?php if (have_rows('assortment_list')): ?>
                                <ul>
                                    <?php while (have_rows('assortment_list')):
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
                    </div>

                    <div class="additional-bottom-wrapper">
                        <p>
                            <?= the_field('list_description'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="inst-direction-container it-system-container">
        <div class="direction-container">
            <div class="container">
                <div class="directions-wrapper">
                    <div class="directions-header-wrapper">
                        <h1><?= the_field('advantages_header'); ?></h1>
                        <h3><?= the_field('advantages_description'); ?></h3>
                        <p>
                            <?= nl2br(get_field('advantages_description_2')); ?>
                        </p>
                    </div>

                    <div class="directions-content-wrapper">

                        <?php if (have_rows('directions_items')): ?>
                            <?php while (have_rows('directions_items')):
                                the_row(); ?>
                                <?php
                                $icon = get_sub_field('icon');
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                                ?>
                                <div class="item">
                                    <div class="item-content">

                                        <?php if ($icon): ?>
                                            <div class="icon-wrapper">
                                                <img src="<?= esc_url($icon['url']); ?>" alt="<?= esc_attr($icon['alt']); ?>" />
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($title): ?>
                                            <h6><?= wp_kses_post($title); ?></h6>
                                        <?php endif; ?>

                                        <?php if ($description): ?>
                                            <p><?= wp_kses_post($description); ?></p>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <!-- <div class="item">
                            <div class="item-content">
                                <div class="icon-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/supply-lisence/1.svg"
                                        alt="image" />
                                </div>
                                <h6>Свежий и чистый дизайн</h6>
                                <p>
                                    Тема оптимизирована для обеспечения вашим посетителям
                                    ясного и великолепного опыта в плане UX/UI.
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-content">
                                <div class="icon-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/supply-lisence/2.svg"
                                        alt="image" />
                                </div>
                                <h6>
                                    Бесплатные обновления <br />
                                    на всю жизнь
                                </h6>
                                <p>
                                    При покупке темы вы получите бесплатные обновления на всю
                                    жизнь навсегда.
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-content">
                                <div class="icon-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/supply-lisence/3.svg"
                                        alt="image" />
                                </div>
                                <h6>Бесплатный плагин</h6>
                                <p>
                                    Все плагины, включенные в вашу тему, бесплатны, и вы
                                    можете наслаждаться всеми их функциями. Это здорово!
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-content">
                                <div class="icon-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/supply-lisence/4.svg"
                                        alt="image" />
                                </div>
                                <h6>Многоязычная поддержка</h6>
                                <p>
                                    Перевод готов, вам просто нужно добавить файл перевода.
                                    Очень легко переключать языки.
                                </p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>