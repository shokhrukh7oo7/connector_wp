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
                    <?php if (have_rows('cards')): ?>
                        <?php while (have_rows('cards')):
                            the_row(); ?>
                            <div class="col-12 col-lg-6 p-2">
                                <div class="card-item">
                                    <div class="card-image">
                                        <?php
                                        $card_image = get_sub_field('card_icon');
                                        ?>
                                        <img src="<?= esc_url($card_image['url']) ?>"
                                            alt="<?= esc_attr($card_image['alt']); ?>" />
                                    </div>
                                    <div class="card-content">
                                        <div class="card-top-wrapper">
                                            <h5><?= get_sub_field('card_header'); ?></h5>
                                            <p>
                                                <?= nl2br(get_sub_field('card_description')); ?>
                                            </p>
                                        </div>
                                        <div class="card-bottom-wrapper">
                                            <a href="">
                                                <?= get_sub_field('card_btn'); ?>
                                                <?php
                                                $card_link_icon = get_sub_field('card_btn_icon');
                                                ?>
                                                <img src="<?= esc_url($card_link_icon['url']) ?>"
                                                    alt="<?= esc_attr($card_link_icon['alt']); ?>" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>