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
            <h5>Как выглядит ПСД?</h5>
            <p>
              Проектно-сметная документация представляет собой набор
              альбомов с бумажными чертежами, схемами, ситуационными
              планами, журналами и таблицами выполненными по ГОСТ и СНиП
              РУз. Отдельным альбомом создается сметная документация в
              соответствии с ШНК РУз. Так же мы предоставляем Заказчику
              исходные файлы ПСД в электронном виде (формат *dwg).
            </p>
          </div>

          <div class="partner-content inst-partner-content">
            <div class="partner-content-header">
              <p>Сотрудничество</p>
              <h6>Процесс сотрудничества</h6>
              <h5 class="partner-desc-header">
                Для Вашего удобства мы упростили процесс заказа IT <br />
                обслуживания
              </h5>
            </div>

            <div class="partner-content-body">
              <ul>
                <li>
                  Пришлите запрос или свяжитесь с нашим менеджером по
                  телефону или Telegram +998 98 365-93-25
                </li>
                <li>
                  Получите консультацию каким образом будут выполняться
                  данные работы. На этом этапе можно определить примерную
                  стоимость ежемесячной подписки на IT обслуживание.
                </li>
                <li>
                  Согласуйте необходимость выезда нашего IT специалиста на
                  осмотр объекта для точного определения объема работ.
                </li>
                <li>
                  Получите коммерческое предложение на работы по
                  ежемесячному IT обслуживанию.
                </li>
                <li>
                  После утверждения коммерческого предложения получите
                  договор для оплаты в электронном виде в Дидокс.
                </li>
                <li>Согласуйте необходимость подписания NDA.</li>
                <li>
                  После оплаты наши менеджеры готовы принимать заявки на
                  выполнение работ. Каждая заявка фиксируется в нашей CRM
                  системе. В базу данных заносится информация о том кто и
                  когда дал заявку, описание задачи и описание решения этой
                  задачи, имя специалиста ответственного за выполнения
                  заявки. Любая (разумная) заявка берется на контроль и
                  обязательно будет выполнена.
                </li>
                <li>
                  Согласуйте необходимость первичного IT аудита. Для
                  подробного описания текущей IT инфраструктуры. Данные
                  работы входят в стоимость ежемесячной абонентской платы
                  (подписки).
                </li>
                <li>
                  Согласуйте необходимость проведения инвентаризации вашего
                  IT оборудования. Инвентаризация позволит иметь подробный
                  список техники с характеристиками, что позволит определить
                  необходимую модернизацию в перспективе. Инвентаризация
                  обычно проходит в течении первого месяца обслуживания.
                  Данные работы входят в стоимость ежемесячной абонентской
                  платы (подписки).
                </li>
                <li>
                  Обычно со стороны Заказчика выделяется ответственный
                  менеджер, который дает заявки нашему менеджеру. Так же
                  возможно создание группы в Телеграм с добавлением
                  сотрудников Заказчика и Исполнителя, тогда заявки
                  принимаются прямо в этой группе.
                </li>
                <li>
                  После получения заявки наш менеджер назначает инженера или
                  IT специалиста для выполнения этой заявки. Сотрудники
                  нашего IT блока/отдела в течении часа (SLA) начинают
                  выполнение заявки путем выезда на объект Заказчика или
                  дистанционно через сеть Интернет. После выполнения заявки,
                  исполнитель фиксирует выполнение заявки в нашей CRM
                  системе. В результате формируется база выполненных заявок
                  по которой Заказчик всегда может затребовать отчет о
                  проделанной работе за любой период времени.
                </li>
                <li>
                  По окончанию каждого месяца обслуживания или 30 дневного
                  периода обслуживания (если договор был заключен не 1 числа
                  месяца) подписываются счет-фактура и акт выполненных работ
                  за этот период IT обслуживания в электронном виде в
                  Дидокс. Так же Заказчик делает предоплату за следующий
                  месяц обслуживания.
                </li>
              </ul>
            </div>
          </div>

          <div class="it-system-extra-wrapper-banner">
            <img src="<?= get_template_directory_uri() ?> /assets/images/it-system-design/banner-2.png" alt="image" />
          </div>

          <div class="it-system-extra-wrapper-two">
            <h5>Сколько стоит ПСД?</h5>
            <p>
              Стоимость ПСД в каждом случае индивидуальная. Зависит от
              трудозатрат и объема проекта. Ориентировочно стоимость ПСД
              составляет от 4-10% от сметной стоимости проекта.
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