<?php
/**
 * fogodechao functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fogodechao
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fogodechao_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on fogodechao, use a find and replace
		* to change 'fogodechao' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'fogodechao', get_template_directory() . '/languages' );

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
	function register_fdc_menu() {
		register_nav_menu('menu-princial',__( 'Menu Principal' ));
		register_nav_menu('menu-rodape',__( 'Menu Rodapé' ));
	}

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
			'fogodechao_custom_background_args',
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
add_action( 'after_setup_theme', 'fogodechao_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fogodechao_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fogodechao_content_width', 640 );
}
add_action( 'after_setup_theme', 'fogodechao_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fogodechao_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fogodechao' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fogodechao' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fogodechao_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fogodechao_scripts() {
	wp_enqueue_style( 'fogodechao-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'fogodechao-style', 'rtl', 'replace' );

	wp_enqueue_script( 'fogodechao-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
	wp_enqueue_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', ['jquery']);
	wp_enqueue_script('bootstrapjs','https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js',['jquery', 'popperjs']);
	wp_enqueue_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css');
	//wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.1.0/css/all.css"');
	wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
	wp_enqueue_script('fdc-menu', get_template_directory_uri() . '/assets/js/menu.js');
	wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/assets/js/owlcarousel/dist/owl.carousel.min.js');
	wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/assets/js/owlcarousel/dist/assets/owl.carousel.min.css');
	wp_enqueue_style('owlcarousel-theme', get_template_directory_uri() . '/assets/js/owlcarousel/dist/assets/owl.theme.default.min.css');
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fogodechao_scripts' );

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

// The custom function MUST be hooked to the init action hook
add_action( 'init', 'fdc_register_promocao_post_type' );

// A custom function that calls register_post_type
function fdc_register_promocao_post_type() {

    // Set various pieces of text, $labels is used inside the $args array
    $labels = [
        'name' => _x( 'Promoções', 'post type general name' ),
        'singular_name' => _x( 'Promoção', 'post type singular name' ),
        'add_new'            => __( 'Add Nova Promoção' ),
        'add_new_item'       => __( 'Add Nova Promoção' ),
        'edit_item'          => __( 'Edit Promoção' ),
        'new_item'           => __( 'Nova Promoção' ),
        'all_items'          => __( 'Todas as Promoções' ),
        'view_item'          => __( 'Ver Promoção' ),
        'search_items'       => __( 'Buscar Promoção' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    ];

    // Set various pieces of information about the post type
    $args = [
        'labels'        => $labels,
        'description'   => 'Promoções',
        'public'        => true,
        'supports'      => ['title', 'editor','thumbnail'],
        'menu_icon'     => 'dashicons-format-image'
    ];

  // Register the movie post type with all the information contained in the $arguments array
  register_post_type( 'promocao', $args );
}

// The custom function MUST be hooked to the init action hook
add_action( 'init', 'fdc_register_historia_post_type' );

// 
function fdc_register_historia_post_type() {

    // 
    $labels = [
        'name' => _x( 'História', 'post type general name' ),
        'singular_name' => _x( 'História', 'post type singular name' ),
        'add_new'            => __( 'Add Nova História' ),
        'add_new_item'       => __( 'Add Nova História' ),
        'edit_item'          => __( 'Editar História' ),
        'new_item'           => __( 'Nova História' ),
        'all_items'          => __( 'Todas as Histórias' ),
        'view_item'          => __( 'Ver História' ),
        'search_items'       => __( 'Buscar História' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    ];

    // 
    $args = [
        'labels'        => $labels,
        'description'   => 'História',
        'public'        => true,
        'supports'      => ['title','thumbnail'],
        'menu_icon'     => 'dashicons-images-alt'
    ];

  // 
  register_post_type( 'historia', $args );
}

add_action( 'init', 'fdc_register_popup_post_type' );
function fdc_register_popup_post_type()
{
    $labels = [
        'name' => _x( 'Avisos', 'post type general name' ),
        'singular_name' => _x( 'Aviso', 'post type singular name' ),
        'add_new'            => __( 'Add Nova Pergunta' ),
        'add_new_item'       => __( 'Add Nova Pergunta' ),
        'edit_item'          => __( 'Editar Aviso' ),
        'new_item'           => __( 'Nova Aviso' ),
        'all_items'          => __( 'Todas os Avisos' ),
        'view_item'          => __( 'Ver Aviso' ),
        'search_items'       => __( 'Buscar Aviso' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    ];

    // 
    $args = [
        'labels'        => $labels,
        'description'   => 'Aviso',
        'public'        => true,
        'supports'      => ['title','thumbnail'],
        'menu_icon'     => 'dashicons-megaphone'
    ];

  // 
  register_post_type( 'avisos', $args );
}
function fdc_register_fogopedia_post_type()
{
    $labels = [
        'name' => _x( 'Fogopedia', 'post type general name' ),
        'singular_name' => _x( 'Fogopedia', 'post type singular name' ),
        'add_new'            => __( 'Add Nova Pergunta' ),
        'add_new_item'       => __( 'Add Nova Pergunta' ),
        'edit_item'          => __( 'Editar Pergunta' ),
        'new_item'           => __( 'Nova Aviso' ),
        'all_items'          => __( 'Todas as Perguntas' ),
        'view_item'          => __( 'Ver Pergunta' ),
        'search_items'       => __( 'Buscar Pergunta' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    ];

    // 
    $args = [
        'labels'        => $labels,
        'description'   => 'Fogopedia',
        'public'        => true,
        'supports'      => ['title'],
        'menu_icon'     => 'dashicons-clipboard'
    ];

  // 
  register_post_type( 'fogopedia', $args );
}
add_action( 'init', 'fdc_register_fogopedia_post_type' );