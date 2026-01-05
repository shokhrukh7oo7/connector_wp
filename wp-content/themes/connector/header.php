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
					<a href="./index.html">
						<img src="<?= get_template_directory_uri() ?> /assets/images/home/logo.png" alt="image" />
					</a>
				</div>

				<div class="mobile-menu">
					<div class="navbar-menu-wrapper">
						<ul>
							<li><a href="./index.html" class="active">Главная</a></li>
							<!-- <li><a href="#">Услуги</a></li> -->
							<li class="has-dropdown">
								<a href="#!" class="dropdown-toggle">Услуги</a>
								<ul class="submenu">
									<li>
										<a href="/assets/pages/it-service.html">IT обслуживание</a>
									</li>
									<li>
										<a href="/assets/pages/installation-and-setting.html">Инсталляция и настройка
											ПО</a>
									</li>
									<li>
										<a href="/assets/pages/it-system-design.html">Проектирование IT систем</a>
									</li>
									<li>
										<a href="/assets/pages/supply-of-it-goods.html">Поставка IT товаров</a>
									</li>
									<li>
										<a href="/assets/pages/supply-lisence.html">Поставка лицензионного ПО</a>
									</li>
									<li><a href="#">Монтаж ИТ систем</a></li>
									<li><a href="#">Облачные услуги</a></li>
									<li><a href="#">Решение нестандартных задач</a></li>
									<li>
										<a href="/assets/pages/service-center.html">Сервисный центр</a>
									</li>
								</ul>
							</li>
							<li class="has-dropdown">
								<a href="#!" class="dropdown-toggle">Решения</a>
								<ul class="submenu">
									<li>
										<a href="/assets/pages/solving-it-problems.html">Решение IT задач в каждой
											отрасли</a>
									</li>
									<li>
										<a href="/assets/pages/typical-it-solution.html">Типовые IT решения</a>
									</li>
								</ul>
							</li>
							<!-- <li><a href="#">Решения</a></li> -->
							<li><a href="/assets/pages/utilities.html">Полезности</a></li>
							<li><a href="/assets/pages/clients.html">Клиенты</a></li>
							<li><a href="#">Фотособытия</a></li>
							<li><a href="/assets/pages/contact.html">Контакты</a></li>
						</ul>
					</div>

					<div class="navbar-right-wrapper">
						<div class="search-wrapper">
							<form class="search-box" id="openSearch">
								<button type="button">
									<img src="<?= get_template_directory_uri() ?>/assets/images/home/search.svg"
										alt="image" />
								</button>
							</form>
						</div>

						<div class="language-wrapper">
							<div class="dropdown">
								<button class="btn btn-secondary dropdown-toggle" type="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<img src="<?= get_template_directory_uri() ?>/assets/images/home/ru.png"
										alt="image" />
									Рус
								</button>
								<ul class="dropdown-menu">
									<li>
										<a class="dropdown-item" href="#">
											<img src="<?= get_template_directory_uri() ?>/assets/images/home/en.svg"
												alt="" />
											En
										</a>
									</li>
								</ul>
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

		<form class="search-form">
			<input type="text" placeholder="Например, IT обслуживание" autofocus />
			<button type="submit">Начать поиск</button>
		</form>
	</div>
	<!-- SEARCH END -->