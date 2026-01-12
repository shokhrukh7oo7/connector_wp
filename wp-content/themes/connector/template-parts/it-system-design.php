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
            <?php
            $cooperation_image = get_field('cooperation_banner');
            ?>
            <img src="<?= esc_url($cooperation_image['url']) ?>" alt="<?= esc_attr($cooperation_image['alt']) ?>" />
          </d>

          <div class="it-system-extra-wrapper-two">
            <h5><?= the_field('cooperation_extra_header'); ?></h5>
            <p>
              <?= nl2br(get_field('cooperation_extra_description')); ?>
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
            <h1><?= the_field('subsections_header'); ?></h1>
            <h3><?= the_field('subsections_description'); ?></h3>
            <p>
              <?= nl2br(get_field('subsections_description_2')); ?>
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
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
?>