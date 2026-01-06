<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package connector
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- Header start -->
	<header class="header">
		<div class="container">
			<nav class="navbar-wrapper">
				<div class="logo-wrapper">
					<?php
					$logo = get_field('logo', 'options_' . pll_current_language());
					?>
					<?php if ($logo): ?>
						<a href="<?= esc_url(home_url('/')); ?>">
							<img src="<?= esc_url($logo['url']); ?>" alt="<?= esc_attr($logo['alt']); ?>">
						</a>
					<?php endif; ?>
				</div>

				<div class="mobile-menu">
					<div class="navbar-menu-wrapper">
						<?php
						wp_nav_menu([
							'theme_location' => 'header_menu',
							'container' => false,
							'menu_class' => '',
							'items_wrap' => '<ul>%3$s</ul>',
							'walker' => new Header_Menu_Walker(),
						]);
						?>
					</div>

					<div class="navbar-right-wrapper">
						<div class="search-wrapper">
							<button type="button" id="openSearch" class="search-open-btn" aria-label="Открыть поиск">
								<img src="<?= get_template_directory_uri() ?>/assets/images/home/search.svg"
									alt="Поиск" />
							</button>
						</div>

						<div class="language-wrapper">
							<div class="dropdown">
								<?php
								$languages = pll_the_languages([
									'hide_if_empty' => 0,
									'raw' => 1
								]);

								if ($languages):
									$current_lang = pll_current_language();
									$current = $languages[$current_lang];

									$current_icon = get_template_directory_uri() . "/assets/images/home/{$current_lang}.png";
									?>
									<button class="btn btn-secondary dropdown-toggle" type="button"
										data-bs-toggle="dropdown" aria-expanded="false">
										<img src="<?= esc_url($current_icon); ?>" alt="">
										<?= esc_html($current['name']); ?>
									</button>

									<ul class="dropdown-menu">
										<?php foreach ($languages as $slug => $lang): ?>
											<?php if ($slug !== $current_lang):
												$icon = get_template_directory_uri() . "/assets/images/home/{$slug}.png";
												?>
												<li>
													<a class="dropdown-item" href="<?= esc_url($lang['url']); ?>">
														<img src="<?= esc_url($icon); ?>" alt="">
														<?= esc_html($lang['name']); ?>
													</a>
												</li>
											<?php endif; ?>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</div>
						</div>

						<div class="contact-us-btn-wrapper">
							<button>Связаться снами</button>
						</div>
					</div>

					<button class="mobile-close" aria-label="Close">
						<img src="<?= get_template_directory_uri() ?>/assets/images/home/close.svg" alt="image" />
					</button>
				</div>

				<button class="burger-btn" aria-label="Menu">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</nav>
		</div>
	</header>
	<!-- Header end -->

	<!-- SEARCH START -->
	<div class="search-overlay" id="searchOverlay"></div>

	<!-- Search panel -->
	<div class="search-panel" id="searchPanel">
		<h3>Поиск по сайту</h3>

		<form role="search" method="get" class="search-form" action="<?= esc_url(home_url('/')); ?>">
			<input type="search" name="s" placeholder="<?php esc_attr_e('Поиск...', 'textdomain'); ?>"
				value="<?= get_search_query(); ?>" autofocus />
			<button type="submit">Начать поиск</button>
		</form>
	</div>
	<!-- SEARCH END -->