<?php
/*
    Template name: Полезности
*/
get_header();
?>

<main>
    <div class="section">
        <div class="container">
            <div class="utilities-wrapper">
                <div class="utilities-header-wrapper">
                    <h6><?= the_field('utilities_header'); ?></h6>
                    <h1><?= the_field('utilities_description'); ?></h1>
                    <p><?= the_field('utilities_description_2'); ?></p>
                    <?php custom_breadcrumbs(); ?>
                </div>

                <div class="article-card-wrapper">
                    <div class="container">
                        <div class="row m-0">

                            <?php
                            // Получаем текущую страницу пагинации
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                            $utilities = new WP_Query(array(
                                'post_type' => 'utility',
                                'posts_per_page' => 12,      // 👈 ВСЕ
                                'orderby' => 'menu_order',
                                'order' => 'ASC',
                                'paged' => $paged,
                            ));

                            if ($utilities->have_posts()):
                                while ($utilities->have_posts()):
                                    $utilities->the_post();

                                    $btn_icon = get_field('btn_icon');
                                    $btn_text = get_field('btn_text') ?: 'Узнать больше';
                                    $thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                                    ?>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2">
                                                <div class="item">
                                                    <?php if ($thumb): ?>
                                                            <img src="<?= esc_url($thumb) ?>" alt="<?= esc_attr(get_the_title()) ?>">
                                                    <?php endif; ?>

                                                    <div class="item-content">
                                                        <h6><?= esc_html(get_the_title()) ?></h6>

                                                        <?php the_content(); ?>

                                                        <a href="<?= esc_url(get_permalink()) ?>">
                                                            <?= esc_html($btn_text) ?>
                                                            <?php if ($btn_icon): ?>
                                                                    <img src="<?= esc_url($btn_icon['url']) ?>" alt="icon">
                                                            <?php endif; ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                endwhile;

                                // ПАГИНАЦИЯ
                                $total_pages = $utilities->max_num_pages;

                                if ($total_pages > 1):
                                    $current_page = max(1, get_query_var('paged'));

                                    echo '<div class="pagination-wrapper">';
                                    echo paginate_links(array(
                                        'base' => get_pagenum_link(1) . '%_%',
                                        'format' => 'page/%#%/',
                                        'current' => $current_page,
                                        'total' => $total_pages,
                                        'prev_text' => '«',
                                        'next_text' => '»',
                                    ));
                                    echo '</div>';
                                endif;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>