<?php
/*
    Template name: Проектирование IT систем
*/
get_header();
?>

<main>
  <section>
    <div class="container">
      <div class="it-service-wrapper">
        <div class="it-service-header-wrapper">
          <h6><?= the_field('it_system_design_header'); ?></h6>
          <h1><?= the_field('it_system_design_description'); ?></h1>
          <p>
            <?= nl2br(the_field('it_system_design_description_2')); ?>
          </p>
          <?php custom_breadcrumbs(); ?>
        </div>

        <div class="banner-content-wrapper">
          <div class="banner-wrapper">
            <?php
            $banner_image = get_field('banner');
            ?>
            <img src="<?= esc_url($banner_image['url']) ?>" alt="<?= esc_attr($banner_image['alt']) ?>" />
          </div>

          <div class="it-system-banner-description">
            <div class="left-wrapper">
              <p>
                <?= nl2br(get_field('banner_description_left')); ?>
              </p>
            </div>
            <div class="right-wrapper">
              <h6><?= the_field('banner_right_header'); ?></h6>
              <p>
                <?= nl2br(get_field('banner_right_description')); ?>
              </p>
              <div class="icon-wrapper">
                <?php
                $icon_image = get_field('banner_right_icon');
                ?>
                <img src="<?= esc_url($icon_image['url']) ?>" alt="<?= esc_attr($icon_image['alt']) ?>" />
              </div>
            </div>
          </div>

          <div class="it-system-left-right-wrapper">
            <h3><?= the_field('type_it_system_header'); ?></h3>
            <div class="left-right-wrapper">
              <div class="left-wrapper">
                <?php if (have_rows('type_list')): ?>
                  <ul>
                    <?php while (have_rows('type_list')):
                      the_row(); ?>
                      <?php
                      $icon = get_sub_field('icon');
                      $description = get_sub_field('text');
                      ?>
                      <li>
                        <img src="<?= esc_url($icon['url']) ?>" alt="<?= esc_attr($icon['alt']) ?>">
                        <?= esc_html($description) ?>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
              </div>

              <div class="right-wrapper">
                <?php
                $type_image = get_field('type_it_system_banner');
                ?>
                <img src="<?= esc_url($type_image['url']) ?>" alt="<?= esc_attr($type_image['alt']) ?>" />
              </div>
            </div>
          </div>

          <div class="it-system-extra-wrapper">
            <h5><?= the_field('type_it_system_extra_header'); ?></h5>
            <p>
              <?= nl2br(get_field('type_it_system_extra_description')); ?>
            </p>
          </div>

          <div class="partner-content inst-partner-content">
            <div class="partner-content-header">
              <p><?= the_field('cooperation_header'); ?></p>
              <h6><?= the_field('cooperation_description'); ?></h6>
              <h5 class="partner-desc-header">
                <?= nl2br(get_field('cooperation_description_2')); ?>
              </h5>
            </div>

            <div class="partner-content-body">
              <?php if (have_rows('partner_steps')): ?>
                <ul>
                  <?php while (have_rows('partner_steps')):
                    the_row(); ?>
                    <?php
                    $text = get_sub_field('text');
                    ?>
                    <li>
                      <?= esc_html($text) ?>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
              </div>
          </div>
 
            <d iv class="it-system-extra-wrapper-banner">
              <img src="<?= get_template_directory_uri() ?> /assets/images/it-system-design/banner-2.png" alt="image" />
          </d>
  
          <d  iv class="it-system-extra-wrapper-two">
              <h5>Сколько стоит ПСД?</h5>
             <p >
                Стоимость ПСД в каждом случае индивидуальная. Зависит от
                трудозатрат и объема проекта. Ориентировочно стоимость ПСД
                составляет от 4-10% от сметной стоимости проекта.
              </p>
            </d>
          </div>
        </div>
    </div>
  </section>

  <section class="inst-direction-container it-system-container">
    <div class="direction-container">
      <div class="container">
        <div class="directions-wrapper">
          <div class="directions-header-wrapper">
            <a href="#">IT обслуживание. Подразделы</a>
            <h3>Наш опыт - залог Вашего успеха!</h3>
            <p>
              Нам доверяют десятки организаций в Узбекистане, выбирая нас
              своим надежным партнером по IT обслуживанию. Ознакомиться с
              отзывами наших клиентов можно здесь.
            </p>
          </div>

          <div class="directions-content-wrapper">
            <div class="item">
              <div class="item-content">
                <div class="icon-wrapper">
                  <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg" alt="image" />
                </div>
                <h6>
                  Глубокий опыт <br />
                  и экспертиза
                </h6>
                <p>
                  Мы разрабатываем проектную документацию с учетом всех
                  нюансов будущего монтажа и дальнейшей эксплуатации
                  IT-систем с 2009 года, опираясь на опыт реализации
                  десятков сложных проектов.
                </p>
              </div>
            </div>

            <div class="item">
              <div class="item-content">
                <div class="icon-wrapper">
                  <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg" alt="image" />
                </div>
                <h6>Максимальная практичность решений</h6>
                <p>
                  Наши проекты реально исполнимы. Монтажники получают
                  понятные и четкие инструкции, благодаря чему исключаются
                  несостыковки и ошибки на этапе монтажа.
                </p>
              </div>
            </div>

            <div class="item">
              <div class="item-content">
                <div class="icon-wrapper">
                  <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg" alt="image" />
                </div>
                <h6>Прозрачность расчетов и отсутствие лишних затрат</h6>
                <p>
                  Вся смета составляется на основе детального анализа
                  проекта, текущего состояния рынка и норм ШНК РУз, что
                  позволяет максимально точно определить объемы работ и
                  исключить ненужные расходы.
                </p>
              </div>
            </div>

            <div class="item">
              <div class="item-content">
                <div class="icon-wrapper">
                  <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg" alt="image" />
                </div>
                <h6>Персонализация и учет специфики Заказчика</h6>
                <p>
                  Каждый проект индивидуален — мы учитываем отраслевые
                  особенности, требования по безопасности, бюджет и задачи
                  Заказчика.
                </p>
              </div>
            </div>
            <!--  -->
            <div class="item">
              <div class="item-content">
                <div class="icon-wrapper">
                  <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg" alt="image" />
                </div>
                <h6>Соблюдение всех норм и стандартов</h6>
                <p>
                  Проектная документация соответствует действующим
                  требованиям законодательства и стандартам проектирования в
                  Узбекистане, что облегчает согласование и прохождение
                  экспертизы.
                </p>
              </div>
            </div>

            <div class="item">
              <div class="item-content">
                <div class="icon-wrapper">
                  <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg" alt="image" />
                </div>
                <h6>
                  Интеграция <br />
                  “под ключ”
                </h6>
                <p>
                  Оказываем поддержку на всех этапах — от изысканий и
                  проектирования до монтажа и последующего обслуживания
                  IT-системы.
                </p>
              </div>
            </div>

            <div class="item">
              <div class="item-content">
                <div class="icon-wrapper">
                  <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg" alt="image" />
                </div>
                <h6>Техническая поддержка и сопровождение</h6>
                <p>
                  Консультируем на любом этапе реализации проекта, а также
                  обеспечиваем оперативное внесение изменений по мере
                  необходимости.
                </p>
              </div>
            </div>

            <div class="item">
              <div class="item-content">
                <div class="icon-wrapper">
                  <img src="<?= get_template_directory_uri() ?> /assets/images/home/check-circle.svg" alt="image" />
                </div>
                <h6>Конфиденциальность и надежность</h6>
                <p>
                  Гарантируем защиту ваших данных и соблюдение коммерческой
                  тайны..
                </p>
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