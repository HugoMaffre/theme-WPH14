<?php
/**
 * Theme functions and definitions
 *
 * @package  ThemeWPH14
 * @since    1.0.0
 *
 */

if ( ! function_exists( 'WPH14_theme_setup' ) ) :
	function WPH14_theme_setup() {
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'WPH14', get_template_directory().'/languages' );
		$locale = get_locale();
		$locale_file = get_template_directory()."/languages/$locale.php";
		if ( is_readable( $locale_file ) ) {
			require_once( $locale_file );
		}

		add_theme_support( 'menus' );
		require_once( 'inc/menu-walker.php' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		//add_theme_support( 'custom-background', $args );
		//add_theme_support( 'custom-header', $args );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Enable support for custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'WPH14' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 * @link : https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		) );

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style( array( 'css/editor-style.css', WPH14_theme_fonts_url() ) );

		/*
		 * Indicate widget sidebars can use selective refresh in the Customizer.
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif; // WPH14_theme_setup
add_action( 'after_setup_theme', 'WPH14_theme_setup' );

  add_filter( 'show_admin_bar', '__return_false' );  //enlever le margin-top automatique de wordpress

  	register_nav_menus( array(
        'TopLeft' => 'Navigation principale gauche',
    ) );

    register_nav_menus( array(
        'TopRight' => 'Navigation principale droite',
    ) );

    register_nav_menus( array(
        'MenuFooter' => 'Navigation du Footer',
    ) );
/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 * @global int $content_width
 *
 * @since 1.0.0
 */
function WPH14_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'WPH14_theme_content_width', 960 );
}
add_action( 'after_setup_theme', 'WPH14_theme_content_width', 0 );

/**
 * Registers a widget area.
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since 1.0.0
 */
function WPH14_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'WPH14' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'WPH14' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'WPH14_theme_widgets_init' );

if ( ! function_exists( 'WPH14_theme_fonts_url' ) ) :
	/**
	 * Register Google fonts for the theme.
	 * Create your own WPH14_theme_fonts_url() function to override in a child theme.
	 *
	 * @since 1.0.0
	 */
	function WPH14_theme_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';

		/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
		$lato = _x( 'on', 'Lato font: on or off', 'WPH14' );
		$merriweather = _x( 'on', 'Merriweather font: on or off', 'WPH14' );
		$open_sans = _x( 'on', 'Open Sans font: on or off', 'WPH14' );

		if ( 'off' !== $lato ) {
			$font_families[] = 'Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic';
		}
		if ( 'off' !== $merriweather ) {
			$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
		}
		if ( 'off' !== $open_sans ) {
			$fonts[] = 'Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic';
		}

		if ( $fonts ) {
			$fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $fonts ) ),
				'subset' => urlencode( $subsets ),
			), 'https://fonts.googleapis.com/css' );
		}
		return $fonts_url;
	}
endif;

/**
 * Handles JavaScript detection.
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since 1.0.0
 */
function WPH14_theme_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'WPH14_theme_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */

/** CUSTOM JAVASCRIPT **/
function jquery_jquery_ui() {
 if (!is_admin()) {
  wp_deregister_script('jquery');

  // Google API (CDN)
  wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', false, '1.10.1', true);
  wp_register_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array('jquery'), "1.10.3", true);

  wp_enqueue_script('jquery');
  wp_enqueue_script('jquery-ui');
 }
}
add_action('init', 'jquery_jquery_ui');

/** END **/


/** CHANGING EXCERPT **/

function wp_trim_all_excerpt($text) { // Creates an excerpt if needed; and shortens the manual excerpt as well
	global $post;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
	}
	$text = strip_shortcodes( $text ); // optional
	$text = strip_tags($text);
	$excerpt_length = apply_filters('excerpt_length', 35);
	$excerpt_more = apply_filters('excerpt_more', ' ' . '...');
	$words = explode(' ', $text, $excerpt_length + 1);
	if (count($words)> $excerpt_length) {
		array_pop($words);
		$text = implode(' ', $words);
		$text = $text . $excerpt_more;
	} else {
		$text = implode(' ', $words);
	}
	return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wp_trim_all_excerpt');

/** END **/


function WPH14_theme_scripts() {
	/**
	 * Theme main stylesheet.
	 */
	wp_enqueue_style( 'WPH14_theme-style', get_stylesheet_uri() );

	/**
	 * Other stylesheets.
	 */

	// Bulma CSS flexboxes
	wp_enqueue_style( 'WPH14_theme-bulma-css', get_template_directory_uri() . '/inc/vendor/bulma/bulma.css', array(), null );

	// Chocolat
	wp_enqueue_style( 'WPH14_theme-chocolat-css', get_template_directory_uri() . '/inc/vendor/chocolat/chocolat.css', array(), null );

	// Animate css
	wp_enqueue_style( 'WPH14_theme-animate-css', get_template_directory_uri() . '/css/animate.css', array(), null );

	// Font awesome
	wp_enqueue_style( 'WPH14_theme-awesome-css', get_template_directory_uri() . '/css/font-awesome.min.css', array(), null );

	// Normalize css
	wp_enqueue_style( 'WPH14_theme-normalize-css', get_template_directory_uri() . '/css/normalize.css', array(), null );

	// Style vegas slider
	wp_enqueue_style( 'WPH14_theme-vegas-css', get_template_directory_uri() . '/css/vegas.css', array(), null );

	// Style des liens
	wp_enqueue_style( 'WPH14_theme-links-css', get_template_directory_uri() . '/css/links.css', array(), null );

	// Style pages
	wp_enqueue_style( 'WPH14_theme-pages-css', get_template_directory_uri() . '/css/pages.css', array(), null );

	// Style page actu
	wp_enqueue_style( 'WPH14_theme-actu-css', get_template_directory_uri() . '/css/actu.css', array(), null );

	// RESPONSIVE
	wp_enqueue_style( 'WPH14_theme-responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), null );

	// Google Fonts
	wp_enqueue_style( 'WPH14_theme-google-fonts', WPH14_theme_fonts_url(), array(), null );

	/**
	 * JS scripts.
	 */

	// Load the html5 shiv.
	wp_enqueue_script( 'WPH14_theme-html5', get_template_directory_uri() . '/js/html5shiv.js', array(), '3.7.3' );
	wp_script_add_data( 'WPH14_theme-html5', 'conditional', 'lt IE 9' );

	// Skip Link Focus.
	wp_enqueue_script( 'WPH14_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), null, true );

	// Comments Reply
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
		// Chocolat Script
	wp_enqueue_script( 'theme_WPH14-chocolat-script', get_template_directory_uri() . '/inc/vendor/chocolat/jquery.chocolat.js', array( 'jquery' ), null, true );

	// Custom Script
	wp_enqueue_script( 'WPH14_theme-script', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), null, true );

	// Custom Script sticky menu
	wp_enqueue_script( 'WPH14_theme-sticky-script', get_template_directory_uri() . '/js/stickyMenu.js', array( 'jquery' ), null, true );

	// Custom Script page actu
	wp_enqueue_script( 'WPH14_theme-actu-script', get_template_directory_uri() . '/js/scriptsPageActu.js', array( 'jquery' ), null, true );

	// Custom Script slider
	wp_enqueue_script( 'WPH14_theme-vegas-script', get_template_directory_uri() . '/js/vegas.js', array( 'jquery' ), null, true );

	// Custom Script fancybox
	wp_enqueue_script( 'WPH14_theme-fancybox-script', get_template_directory_uri() . '/js/jquery.fancybox.js', array( 'jquery' ), null, true );



}
add_action( 'wp_enqueue_scripts', 'WPH14_theme_scripts' );

/**
 * Includes
 */
require locate_template( '/inc/extras/cleanup.php' );						// Cleanup
require locate_template( '/inc/extras/extras.php' );						// Extras

/**
 * Minimum Requirements
 */
require locate_template( '/inc/extras/minimum-requirements.php' );
$requirements = new Minimum_Requirements( '5.3.4', '4.5', 'WPH14 Theme', array() );
register_activation_hook( __FILE__, array( $requirements, 'check_compatibility_on_install' ) );
if ( ! $requirements->is_compatible_version() ) {
	add_action( 'admin_notices', array( $requirements, 'load_admin_notices' ) );
	return;
}

/**
 * Pagination
 */
if ( ! function_exists( 'WPH14_pagination' ) ) {

	function WPH14_pagination( $numpages = '', $pagerange = '', $paged = '' ) {
		if ( empty( $pagerange ) ) {
			$pagerange = 2;
		}
		global $paged;
		if ( empty( $paged ) ) {
			$paged = 1;
		}
		if ( '' == $numpages ) {
			global $wp_query;
			$numpages = $wp_query->max_num_pages;
			if ( ! $numpages ) {
				$numpages = 1;
			}
		}
		$pagination_args = array(
			'base'            => get_pagenum_link( 1 ) . '%_%',
			'format'          => 'page/%#%',
			'total'           => $numpages,
			'current'         => $paged,
			'show_all'        => false,
			'end_size'        => 1,
			'mid_size'        => $pagerange,
			'prev_next'       => true,
			'prev_text'       => '',
			'next_text'       => '',
			'type'            => 'plain',
			'add_args'        => false,
			'add_fragment'    => ''
		);

		$paginate_links = paginate_links( $pagination_args );

		echo "<div class='WPH14-pagination'>";
		echo $paginate_links;
		echo '</div>';

	}
}
/* Gravity */

function load_jquery() {        
  wp_deregister_script('jquery'); 
  wp_register_script('jquery',   'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', false, '2.1.3'); 
  wp_enqueue_script('jquery');
}
add_action('init', 'load_jquery');


