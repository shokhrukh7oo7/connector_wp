<?php
/**
 * connector functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package connector
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function connector_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on connector, use a find and replace
	 * to change 'connector' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('connector', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header_menu' => esc_html__('Меню в шапке', 'connector'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'connector_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'connector_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function connector_content_width()
{
	$GLOBALS['content_width'] = apply_filters('connector_content_width', 640);
}
add_action('after_setup_theme', 'connector_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function connector_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'connector'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'connector'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'connector_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function connector_scripts()
{
	wp_enqueue_style('connector-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('bootstrap-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('swiper-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css', array(), _S_VERSION);
	wp_enqueue_style('fancybox-css', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css', array(), _S_VERSION);
	wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION);
	wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION);

	wp_style_add_data('connector-style', 'rtl', 'replace');

	wp_enqueue_script('connector-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js', array(), _S_VERSION, true);
	wp_enqueue_script('jquery-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('swiper-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('bootstrap-bundle-min-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'connector_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// ------------------------------------------------------------------------
// Разрешить загрузку SVG
function allow_svg_upload($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// Фильтр для безопасности SVG
function fix_svg_mime_type($data, $file, $filename, $mimes)
{
	$ext = isset($data['ext']) ? $data['ext'] : '';
	if ('svg' === $ext) {
		$data['type'] = 'image/svg+xml';
	}
	return $data;
}
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 4);
// ------------------------------------------------------------------------
function register_directions_post_type()
{
	register_post_type('direction', array(
		'labels' => array(
			'name' => 'Направления',
			'singular_name' => 'Направление',
		),
		'public' => true,
		'has_archive' => false,
		'show_in_rest' => true, // для Gutenberg
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
	));
}
add_action('init', 'register_directions_post_type');

// ------------------------------------------------------------------------
function register_tariffs_post_type()
{
	register_post_type('tariff', array(
		'labels' => array(
			'name' => 'Тарифы',
			'singular_name' => 'Тариф',
		),
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-list-view',
		'show_in_rest' => true,
		'supports' => array('title', 'page-attributes'),
	));
}
add_action('init', 'register_tariffs_post_type');
// ------------------------------------------------------------------------
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Настройки шапки',
		'menu_title' => 'Настройки шапки',
		'menu_slug' => 'header-settings',
		'capability' => 'edit_posts',
		'redirect' => false,
		'post_id' => 'options_' . pll_current_language()
	));
}
// ------------------------------------------------------------------------
class Header_Menu_Walker extends Walker_Nav_Menu
{

	// li
	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{

		$classes = empty($item->classes) ? [] : (array) $item->classes;
		$has_children = in_array('menu-item-has-children', $classes);

		$class_names = [];
		if ($has_children) {
			$class_names[] = 'has-dropdown';
		}

		$output .= '<li class="' . implode(' ', $class_names) . '">';

		// ссылка
		if ($has_children) {
			$output .= '<a href="#!" class="dropdown-toggle">' . esc_html($item->title) . '</a>';
		} else {
			$output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
		}
	}

	// ul
	function start_lvl(&$output, $depth = 0, $args = null)
	{
		$output .= '<ul class="submenu">';
	}
}

// ------------------------------------------------------------------------