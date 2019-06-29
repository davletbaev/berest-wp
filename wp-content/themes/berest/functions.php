<?php
/**
 * insur-asia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package insur-asia
 */

if ( ! function_exists( 'por_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function por_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on insur-asia, use a find and replace
		 * to change 'por' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'por', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Header', 'por' ),
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'por_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'por_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function por_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'por_content_width', 640 );
}
add_action( 'after_setup_theme', 'por_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function por_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'por' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'por' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Subscription',
		'id'            => 'subscription',
		'before_widget' => '',
		'after_widget'  => '',
	) );
}
add_action( 'widgets_init', 'por_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function por_scripts() {
	wp_enqueue_style( 'por-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'ofi', get_template_directory_uri() . '/js/vendor/ofi.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/vendor/slick.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'por-main', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'por_scripts' );

/**
 * Adding custom classes for nav-links
 */
function custom_menu_classes($classes, $item, $args) {
	if($args->add_li_class) {
		if (in_array('current-menu-item', $classes) ){
			$classes = [ $args->add_li_class ];
			$classes[] = 'active';
		} else {
			$classes = [ $args->add_li_class ];
		}
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'custom_menu_classes', 1, 3);

function add_menuclass($ulclass) {
	return preg_replace('/<a href/', '<a class="nav-link" href', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass', 11);

function special_nav_class ($classes, $item) {
    
    return $classes;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

/**
 * Disabling admin bar
 */
add_filter('show_admin_bar', '__return_false');

/**
 * 404 redirect to Home
 */
add_action( 'template_redirect', 'home_redirect' );
function home_redirect() {
	if ( is_404() ) {
		wp_redirect( home_url() );
		exit();
	}
}

/**
 * Adding Apptech block category
 */
function apptech_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'at-blocks',
				'title' => __( 'AppTech Blocks', 'at-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'apptech_block_category', 10, 2);

include 'includes/widgets/subscription.php';
include 'includes/shortcodes/widget.php';
include 'includes/functions/theme_options.php';