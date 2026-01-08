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
                    <h6><?= the_field('clients_header'); ?></h6>
                    <h1><?= the_field('clients_description'); ?></h1>
                    <p>
                        <?= nl2br(get_field('clients_description_2')); ?>
                    </p>
                    <?php custom_breadcrumbs(); ?>
                    <!-- <p class="breadcrumbs">Главная / <span>Клиенты</span></p> -->
                </div>

                <div class="detail-content-wrapper">
                    <div class="banner-wrapper">
                        <?php
                        $clienst_banner = get_field('banner');
                        ?>
                        <img src="<?= esc_url($clienst_banner['url']) ?>"
                            alt="<?= esc_attr($clienst_banner['alt']) ?>" />
                    </div>

                    <div class="content-wrapper">
                        <div class="content">
                            <?php echo the_content(); ?>
                        </div>
                    </div>

                    <div class="comment-wrapper">
                        <h3>Отзывы</h3>
                        <p>Что говорят наши клиенты</p>

                        <div class="comment-card-wrapper">
                            <div class="row m-0">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                                    <div class="item">
                                        <a data-fancybox="gallery"
                                            href="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg">
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg"
                                                alt="image" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                                    <div class="item">
                                        <a data-fancybox="gallery"
                                            href="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg">
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg"
                                                alt="image" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                                    <div class="item">
                                        <a data-fancybox="gallery"
                                            href="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg">
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg"
                                                alt="image" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                                    <div class="item">
                                        <a data-fancybox="gallery"
                                            href="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg">
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/comment-1.jpg"
                                                alt="image" />
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