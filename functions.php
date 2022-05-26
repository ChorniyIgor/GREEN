<?php
/**
 * GETG functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GETG
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'getg_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function getg_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on GETG, use a find and replace
		 * to change 'getg' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'getg', get_template_directory() . '/languages' );

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

        add_image_size( 'singlepost-thumb', 450, 9999 ); // Unlimited Height Mode

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'getg' ),
                'footer-1' => esc_html__( 'Footer 1', 'getg' ),
                'footer-2' => esc_html__( 'Footer 2', 'getg' ),
                'footer-3' => esc_html__( 'Footer 3', 'getg' ),
                'footer-4' => esc_html__( 'Footer 4', 'getg' ),
                'bottom-line' => esc_html__( 'Bottom Line', 'getg' ),
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
				'getg_custom_background_args',
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
add_action( 'after_setup_theme', 'getg_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function getg_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'getg_content_width', 640 );
}
add_action( 'after_setup_theme', 'getg_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function getg_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'getg' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'getg' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer column 1', 'getg' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'getg' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer column 2', 'getg' ),
            'id'            => 'footer-2',
            'description'   => esc_html__( 'Add widgets here.', 'getg' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer column 3', 'getg' ),
            'id'            => 'footer-3',
            'description'   => esc_html__( 'Add widgets here.', 'getg' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer column 4', 'getg' ),
            'id'            => 'footer-4',
            'description'   => esc_html__( 'Add widgets here.', 'getg' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer column 5', 'getg' ),
            'id'            => 'footer-5',
            'description'   => esc_html__( 'Add widgets here.', 'getg' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer column 6', 'getg' ),
            'id'            => 'footer-6',
            'description'   => esc_html__( 'Add widgets here.', 'getg' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'getg_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function getg_scripts() {
	wp_enqueue_style( 'wpb-google-fonts-2', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap', false );
	wp_enqueue_style( 'getg-style', get_template_directory_uri() . '/css/main.css', array(), '10994' );
	wp_enqueue_script( 'getg-menu-script', get_template_directory_uri() . '/js/menu.js', array(), '5344', true );

	wp_register_script( 'jquery-core2', get_template_directory_uri() . '/libs/jQuery/main.js', array(), '333335630042' );
	wp_register_style( 'lightslider-style', get_template_directory_uri() . '/libs/lightsliderjQuery/src/css/lightslider.css', array(), '333342' );
	wp_register_script( 'lightslider-script', get_template_directory_uri() . '/libs/lightsliderjQuery/src/js/lightslider.js', array('jquery-core2'), '53245344', true );
	wp_register_script( 'light-slider', get_template_directory_uri() . '/libs/light-slider/main.js', array(), '53245344', true);
	wp_register_script( 'getg_news_container', get_template_directory_uri() . '/js/getg_news_container.js', array('jquery-core2'), '53348544', true );
}

remove_filter( 'the_content', 'wpautop' );



add_action( 'wp_enqueue_scripts', 'getg_scripts' );

function admin_style() {
    wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

function page_title_sc( ){
    return get_the_title();
}
add_shortcode( 'page_title', 'page_title_sc' );

function quality_mark( ){
   return '<style>.quality_mark img {margin-right: 10px;} .quality_mark {margin-bottom: 20px;}</style><div class="quality_mark">' . wp_get_attachment_image(1141) . wp_get_attachment_image(1142) . '</div>';
}
add_shortcode( 'show_quality_mark', 'quality_mark' );

/*=============================================
=            BREADCRUMBS			            =
=============================================*/

//  to include in functions.php
function the_breadcrumb() {

    $sep = '<span class="breadcrumbs-sep">|</span>';

    if (!is_front_page()) {

        // Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs container">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a> ' . $sep;

        // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category()){
            $categories = get_queried_object();
           // var_dump($categories);
            if ($categories->parent) { //if we have parent
                echo "<a href='".get_category_link($categories->parent)."'>".get_the_category_by_ID($categories->parent)."</a>" . $sep;
            }
            echo $categories->name;
        } elseif ( is_single() ){
            the_category($sep, 'multiple');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month()   ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }

        // If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }

        // If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }

        // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) {
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }

        echo '</div>';
    }
}
/*
* Credit: http://www.thatweblook.co.uk/blog/tutorials/tutorial-wordpress-breadcrumb-function/
*/

//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');



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

/**
 * REST API.
 */
require get_template_directory() . '/inc/REST_API.php';

/**
 * Visual Composer customize
 */
require get_template_directory() . '/inc/vc.php';

/**
 * Product page
 */
require get_template_directory() . '/inc/product.php';
