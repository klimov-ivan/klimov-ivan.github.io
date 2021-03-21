<?php
/**
 * My_site functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package My_site
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'my_site_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function my_site_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on My_site, use a find and replace
		 * to change 'my_site' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'my_site', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'my_site' ),
				'main_menu' => 'sad-ogorod',
				'foot_menu' => 'automob',
				'menu-2' => 'stroitelstvo',
				'menu-3' => 'kuhny-kulinar',
				'menu-4' => 'krasota-zdorove',
				'menu-5' => 'sovet-hitrosti'
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
				'my_site_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'my_site_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function my_site_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'my_site_content_width', 640 );
}
add_action( 'after_setup_theme', 'my_site_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function my_site_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'my_site' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'my_site' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'my_site_widgets_init' );

//---- Добавляем кнопки выше содержимого записи
function ip_post_likes($content) {
	// Проверяем, является ли это одиночной записью
	if(is_singular('post')) {
	ob_start();

	$output = ob_get_clean();

return $output . $content;
		}else {
		return $content;
		}
	}

	add_filter('the_content', 'ip_post_likes');

//---- Получаем количество лайков и дизлайков
function ip_get_like_count($type = 'likes') {
	$current_count = get_post_meta(get_the_id(), $type, true);

	return ($current_count ? $current_count : 0);
}

//---- Обрабатываем лайки и дизлайки
function ip_process_like() {
	$processed_like = false;
	$redirect       = false;

	// Проверяем, это лайк или дизлайк
	if(is_singular('post')) {
		if(isset($_GET['post_action'])) {
		if($_GET['post_action'] == 'like') {
		// Лайк
		$like_count = get_post_meta(get_the_id(), 'likes', true);

			if($like_count) {
				$like_count = $like_count + 1;
				}else {
					$like_count = 1;
				}

$processed_like = update_post_meta(get_the_id(), 'likes', $like_count);
			}elseif($_GET['post_action'] == 'dislike') {
				// Дизлайк
	$dislike_count = get_post_meta(get_the_id(), 'dislikes', true);

				if($dislike_count) {
				$dislike_count = $dislike_count + 1;
				}else {
					$dislike_count = 1;
				}

$processed_like = update_post_meta(get_the_id(), 'dislikes', $dislike_count);
			}

			if($processed_like) {
				$redirect = get_the_permalink();
			}
		}
	}

	// Редирект
	if($redirect) {
		wp_redirect($redirect);
		die;
	}
}

add_action('template_redirect', 'ip_process_like');

/**
 * Enqueue scripts and styles.
 */
function my_site_scripts() {
	wp_enqueue_style( 'my_site-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'my_site-style', 'rtl', 'replace' );

	wp_enqueue_script( 'my_site-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'my_site_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




