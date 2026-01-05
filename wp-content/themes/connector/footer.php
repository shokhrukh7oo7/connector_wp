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
                  <img src="<?= get_template_directory_uri() ?>/assets/images/home/logo.png" alt="image" />
                </div>

                <ul>
                  <li>
                    Республика Узбекистан, г. Ташкент, 100011, ул. Навои 16А
                  </li>
                  <li>Моб.: +998 (98) 365-93-25</li>
                  <li>Режим работы: Пн-Пт с 9:00 до 18:00</li>
                  <li>
                    Для абонентов действует круглосуточная поддержка по телефону
                  </li>
                </ul>

                <div class="phone-wrapper">
                  <h5>Телефоны для связи:</h5>
                  <a href="#">Тел/факс: +998 (71) 241-56-50</a>
                  <a href="#">Моб: +998 (98) 365-93-25</a>
                </div>

                <div class="social-wrapper">
                  <a href="#">Facebook</a>
                  <a href="№">Twitter / X</a>
                  <a href="№">Instagram</a>
                  <a href="№">Telegram</a>
                </div>

                <div class="copyright-wrapper">
                  <p>
                    © 2009-2025 #connector. Сайт содержит авторский контент.
                    Копирование запрещено. Все права защищены.
                  </p>
                  <p>
                    Сайт разработал с любовью
                    <a href="https://webline.uz/">Webline</a>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-8 right-bg">
              <div class="footer-right-wrapper">
                <h2>Наши услуги</h2>

                <div class="useful-links-wrapper">
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
                </div>

                <div class="mobile-copyright">
                  <p>
                    © 2009-2025 #connector. Сайт содержит авторский контент.
                    Копирование запрещено. Все права защищены.
                  </p>
                  <p>
                    Сайт разработал с любовью
                    <a href="https://webline.uz/">Webline</a>
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
