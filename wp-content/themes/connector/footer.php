<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package connector
 */

?>

<!-- Footer start -->
<footer>
  <div class="footer-wrapper">
    <div class="container">
      <div class="row m-0 p-0">
        <div class="col-12 col-md-4 left-bg">
          <div class="footer-left-wrapper">
            <div class="logo-wrapper">
              <?php
              $footer_logo = get_field('logo', 'options_' . pll_current_language());
              ?>
              <a href="<?= esc_url(home_url('/')); ?>">
                <img src="<?= esc_url($footer_logo['url']) ?>" alt="<?= esc_attr($footer_logo['alt']) ?>" />
              </a>
            </div>

            <?php if (get_field('footer_address', 'options_' . pll_current_language())): ?>
              <ul>
                <?php while (have_rows('footer_address', 'options_' . pll_current_language())):
                  the_row();
                  $address = get_sub_field('text', 'options_' . pll_current_language());
                  ?>
                  <li>
                    <?= esc_html($address); ?>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>

            <div class="phone-wrapper">
              <h5><?= the_field('footer_contact_header', 'options_' . pll_current_language()) ?></h5>
              <a href="tel:<?php the_field('footer_phone_number_link', 'options_' . pll_current_language()); ?>">
                <?= the_field('footer_phone_number_text', 'options_' . pll_current_language()) ?>
              </a>
              <a
                href="tel:<?php the_field('footer_phone_number_link_extra_2', 'options_' . pll_current_language()); ?>">
                <?= the_field('footer_phone_number_text_extra', 'options_' . pll_current_language()) ?>
              </a>
            </div>

            <div class="social-wrapper">
              <?php if (get_field('footer_social_media', 'options_' . pll_current_language())): ?>
                <?php while (have_rows('footer_social_media', 'options_' . pll_current_language())):
                  the_row();
                  $link = get_sub_field('social_media_link', 'options_' . pll_current_language());
                  $text = get_sub_field('footer_social_media_text', 'options_' . pll_current_language());
                  ?>
                  <a href="<?= esc_url($link); ?>"><?= esc_html($text); ?></a>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>

            <div class="copyright-wrapper">
              <p>
                <?= the_field('copyright_text', 'options_' . pll_current_language()); ?>
              </p>
              <p>
                <?= the_field('copyright_text_2', 'options_' . pll_current_language()); ?>
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-8 right-bg">
          <div class="footer-right-wrapper">
            <h2><?= the_field('footer_links_header', 'options_' . pll_current_language()); ?></h2>

            <div class="useful-links-wrapper">
              <?php
              $menus = [
                'footer_menu_1',
                'footer_menu_2',
                'footer_menu_3',
                'footer_menu_4',
              ];
              foreach ($menus as $menu):
                if (has_nav_menu($menu)):
                  ?>
                  <ul>
                    <?php
                    wp_nav_menu([
                      'theme_location' => $menu,
                      'container' => false,
                      'items_wrap' => '%3$s',
                      'depth' => 1,
                    ]);
                    ?>
                  </ul>
                  <?php
                endif;
              endforeach;
              ?>
            </div>


            <!-- <div class="useful-links-wrapper">
              <ul>
                <li><a href="#">IT обслуживание </a></li>
                <li><a href="#">Инсталляция и настройка ПО </a></li>
                <li><a href="#">Проектирование IT систем </a></li>
                <li><a href="#">Поставка IT товаров </a></li>
                <li><a href="#">Поставка лицензионного ПО</a></li>
              </ul>

              <ul>
                <li><a href="#">Монтаж IT систем </a></li>
                <li><a href="#">Облачные услуги </a></li>
                <li><a href="#">Решение нестандартных задач </a></li>
                <li><a href="#">Сервисный центр</a></li>
              </ul>

              <ul>
                <li><a href="#">Серверы </a></li>
                <li><a href="#">Видеонаблюдение </a></li>
                <li><a href="#">Контроль доступа </a></li>
                <li><a href="#">IT-безопасность </a></li>
                <li><a href="#">Лоĸальные сети ЛВС/СКС/ ВОЛС </a></li>
                <li><a href="#">Корпоративный Wi-Fi</a></li>
              </ul>

              <ul>
                <li><a href="#">IP-Телефония </a></li>
                <li><a href="#">Звукоусиление</a></li>
                <li><a href="#">ОПС</a></li>
                <li><a href="#">Решения для видео презентаций </a></li>
                <li><a href="#">Видео ĸонференц-связь (ВКС) </a></li>
                <li><a href="#">Аудио конференции</a></li>
              </ul>
            </div> -->

            <div class="mobile-copyright">
              <p>
                <?= the_field('copyright_text', 'options_' . pll_current_language()); ?>
              </p>
              <p>
                <?= the_field('copyright_text_2', 'options_' . pll_current_language()); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Footer end -->

<?php wp_footer(); ?>

</body>

</html>