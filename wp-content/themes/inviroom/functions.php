<?php
/**
 * inviroom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package inviroom
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'inviroom_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function inviroom_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on inviroom, use a find and replace
		 * to change 'inviroom' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'inviroom', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'inviroom' ),
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
				'inviroom_custom_background_args',
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
add_action( 'after_setup_theme', 'inviroom_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function inviroom_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'inviroom_content_width', 640 );
}
add_action( 'after_setup_theme', 'inviroom_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inviroom_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'inviroom' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'inviroom' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'inviroom_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function inviroom_scripts() {
	wp_enqueue_style( 'inviroom-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'inviroom-style', 'rtl', 'replace' );
	wp_enqueue_style( 'inviroom-swiper', get_template_directory_uri() . '/libs/swiper/css/swiper.min.css');
	wp_enqueue_style( 'inviroom-styles', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'inviroom-desktop', get_template_directory_uri() . '/css/desktop.css', array(), false, '(min-width: 1025px)' );
	wp_enqueue_style( 'inviroom-mobile', get_template_directory_uri() . '/css/mobile.css', array(), false, '(max-width: 1024px)' );

	wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');

	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
	wp_register_script( 'jquery', false, array('jquery-core'), null, true );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'inviroom-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'inviroom-viewportchecker', get_template_directory_uri() . '/libs/jquery.viewportchecker.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'inviroom-maskedinput', get_template_directory_uri() . '/libs/jquery.maskedinput.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'inviroom-swiper', get_template_directory_uri() . '/libs/swiper/js/swiper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'inviroom-scripts', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'inviroom_scripts' );

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

add_action('init', 'review');
function review(){
	register_post_type('review', array(
		'labels'             => array(
			'name'               => 'Reviews',
			'singular_name'      => 'Review',
			'add_new'            => 'Add new',
			'add_new_item'       => 'add new review',
			'edit_item'          => 'Edit review',
			'new_item'           => 'New review',
			'view_item'          => 'View review',
			'search_items'       => 'Search review',
			'not_found'          =>  'Not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Reviews'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	) );
}

add_action( 'init', 'review_taxonomy' );
function review_taxonomy(){

	register_taxonomy( 'review', [ 'post' ], [ 
		'label'                 => '',
		'labels'                => [
			'name'              => 'Reviews',
			'singular_name'     => 'Review',
			'search_items'      => 'Search Reviews',
			'all_items'         => 'All Reviews',
			'view_item '        => 'View Review',
			'parent_item'       => 'Parent Review',
			'parent_item_colon' => 'Parent Review:',
			'edit_item'         => 'Edit Review',
			'update_item'       => 'Update Review',
			'add_new_item'      => 'Add New Review',
			'new_item_name'     => 'New Review Name',
			'menu_name'         => 'Review',
		],
		'description'           => '',
		'public'                => true,
		'hierarchical'          => false,
		'rewrite'               => true,
		'capabilities'          => array(),
		'meta_box_cb'           => null, 
		'show_admin_column'     => false, 
		'show_in_rest'          => null, 
		'rest_base'             => null, 
	] );
}

/* Register menu */

add_action( 'after_setup_theme', 'getpayce_register_nav_menu' );
function getpayce_register_nav_menu() {
	register_nav_menu( 'language', 'Language menu' );
}

/* Send mail */

add_action( 'wp_ajax_mail', 'mail_function' ); 
add_action( 'wp_ajax_nopriv_mail', 'mail_function' );
 
function mail_function(){

	if(isset($_POST['submit'])){

	    $to = get_option('admin_email');
	    $from = "site@new.inviroom.com";
	    $name = $_POST['name'];
	    $tel = $_POST['phone'];
	    $mail = $_POST['mail'];
	    $subject = "Request Inviroom - Get a demo";
	    $subject2 = "Copy of your form submission";
	    $message = $name . "\n\n". $tel . "\n\n". $mail;
	    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

	    $headers = "From:" . $from;
	    $headers2 = "From:" . $to;
		
	    mail($to,$subject,$message,$headers);

	}
}

/* Unsubscribe */

add_action( 'wp_ajax_unsubscribe', 'unsubscribe_function' ); 
add_action( 'wp_ajax_nopriv_unsubscribe', 'unsubscribe_function' );
 
function unsubscribe_function(){

	if(isset($_POST['submit'])){

	    $to = 'ksenia@inviroom.com';
	    $from = "site@new.inviroom.com";
	    $mail = $_POST['mail'];
	    $subject = "Unsubscribe Request Inviroom";
	    $subject2 = "Copy of your form submission";
	    $message = $mail;
	    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

	    $headers = "From:" . $from;
	    $headers2 = "From:" . $to;
		
	    mail($to,$subject,$message,$headers);

	}
}
