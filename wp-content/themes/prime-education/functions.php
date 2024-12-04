<?php
/**
 * Prime Education functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package prime_education
 */

if ( ! defined( 'PRIME_EDUCATION_URL' ) ) {
    define( 'PRIME_EDUCATION_URL', esc_url( 'https://www.themeignite.com/products/education-wordpress-theme', 'prime-education') );
}
if ( ! defined( 'PRIME_EDUCATION_FREE_DOC_URL' ) ) {
    define( 'PRIME_EDUCATION_FREE_DOC_URL', esc_url( 'https://demo.themeignite.com/documentation/prime-education-free', 'prime-education') );
}
if ( ! defined( 'PRIME_EDUCATION_PRO_DOC_URL' ) ) {
    define( 'PRIME_EDUCATION_PRO_DOC_URL', esc_url( 'https://demo.themeignite.com/documentation/education-pro', 'prime-education') );
}
if ( ! defined( 'PRIME_EDUCATION_DEMO_URL' ) ) {
    define( 'PRIME_EDUCATION_DEMO_URL', esc_url( 'https://demo.themeignite.com/prime-education/', 'prime-education') );
}
if ( ! defined( 'PRIME_EDUCATION_REVIEW_URL' ) ) {
    define( 'PRIME_EDUCATION_REVIEW_URL', esc_url( 'https://wordpress.org/support/theme/prime-education/reviews/#new-post', 'prime-education') );
}
if ( ! defined( 'PRIME_EDUCATION_SUPPORT_URL' ) ) {
    define( 'PRIME_EDUCATION_SUPPORT_URL', esc_url( 'https://wordpress.org/support/theme/prime-education/', 'prime-education') );
}
if ( ! defined( 'PRIME_EDUCATION_BUNDLE_URL' ) ) {
    define( 'PRIME_EDUCATION_BUNDLE_URL', esc_url( 'https://www.themeignite.com/products/wp-theme-bundle', 'prime-education') );
}

$prime_education_theme_data = wp_get_theme();
if( ! defined( 'PRIME_EDUCATION_THEME_VERSION' ) ) define ( 'PRIME_EDUCATION_THEME_VERSION', $prime_education_theme_data->get( 'Version' ) );
if( ! defined( 'PRIME_EDUCATION_THEME_NAME' ) ) define( 'PRIME_EDUCATION_THEME_NAME', $prime_education_theme_data->get( 'Name' ) );

if ( ! function_exists( 'prime_education_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function prime_education_setup() {

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
		'primary' => esc_html__( 'Primary', 'prime-education' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
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
        'chat'
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'prime_education_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );


	/* Custom Logo */
    add_theme_support( 'custom-logo', array(    	
    	'header-text' => array( 'site-title', 'site-description' ),
    ) );
}
endif;
add_action( 'after_setup_theme', 'prime_education_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $prime_education_content_width
 */
function prime_education_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'prime_education_content_width', 780 );
}
add_action( 'after_setup_theme', 'prime_education_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function prime_education_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'prime-education' ),
		'id'            => 'right-sidebar',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'prime-education' ),
		'id'            => 'footer-one',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'prime-education' ),
		'id'            => 'footer-two',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'prime-education' ),
		'id'            => 'footer-three',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'prime-education' ),
		'id'            => 'footer-four',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'prime_education_widgets_init' );

if( ! function_exists( 'prime_education_scripts' ) ) :
/**
 * Enqueue scripts and styles.
 */
function prime_education_scripts() {

	// Use minified libraries if SCRIPT_DEBUG is false
    $prime_education_build  = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '/build' : '';
    $prime_education_suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/build/bootstrap.css' );
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/build/owl.carousel.css' );

	wp_enqueue_style( 'prime-education-style', get_stylesheet_uri(), array(), PRIME_EDUCATION_THEME_VERSION );

	require get_parent_theme_file_path( '/inc/css_custom.php' );
	wp_add_inline_style( 'prime-education-style',$prime_education_custom_css );

	if( prime_education_woocommerce_activated() ) 
    wp_enqueue_style( 'prime-education-woocommerce-style', get_template_directory_uri(). '/css' . $prime_education_build . '/woocommerce' . $prime_education_suffix . '.css', array('prime-education-style'), PRIME_EDUCATION_THEME_VERSION );
	
  	wp_enqueue_script( 'all', get_template_directory_uri() . '/js' . $prime_education_build . '/all' . $prime_education_suffix . '.js', array( 'jquery' ), '6.1.1', true );
  	wp_enqueue_script( 'v4-shims', get_template_directory_uri() . '/js' . $prime_education_build . '/v4-shims' . $prime_education_suffix . '.js', array( 'jquery' ), '6.1.1', true );
  	wp_enqueue_script( 'prime-education-modal-accessibility', get_template_directory_uri() . '/js' . $prime_education_build . '/modal-accessibility' . $prime_education_suffix . '.js', array( 'jquery' ), PRIME_EDUCATION_THEME_VERSION, true );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/build/owl.carousel.js', array('jquery'), '2.6.0', true );
	wp_enqueue_script( 'prime-education-js', get_template_directory_uri() . '/js/build/custom.js', array('jquery'), PRIME_EDUCATION_THEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
endif;
add_action( 'wp_enqueue_scripts', 'prime_education_scripts' );

if( ! function_exists( 'prime_education_admin_scripts' ) ) :
/**
 * Addmin scripts
*/
function prime_education_admin_scripts() {
	wp_enqueue_style( 'prime-education-admin-style',get_template_directory_uri().'/inc/css/admin.css', PRIME_EDUCATION_THEME_VERSION, 'screen' );
}
endif;
add_action( 'admin_enqueue_scripts', 'prime_education_admin_scripts' );

function prime_education_customize_enque_js(){
	wp_enqueue_script( 'customizer', get_template_directory_uri() . '/inc/js/customizer.js', array('jquery'), '2.6.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'prime_education_customize_enque_js', 0 );


if( ! function_exists( 'prime_education_block_editor_styles' ) ) :
/**
 * Enqueue editor styles for Gutenberg
 */
function prime_education_block_editor_styles() {
	// Use minified libraries if SCRIPT_DEBUG is false
	$prime_education_build  = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '/build' : '';
	$prime_education_suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	
	// Block styles.
	wp_enqueue_style( 'prime-education-block-editor-style', get_template_directory_uri() . '/css' . $prime_education_build . '/editor-block' . $prime_education_suffix . '.css' );
}
endif;
add_action( 'enqueue_block_editor_assets', 'prime_education_block_editor_styles' );

function prime_education_sanitize_checkbox( $checked ) {
	return ( ( isset( $checked ) && true === $checked ) ? true : false );
}

function prime_education_sanitize_theme_width($input) {
    // Define the valid options
    $valid = array('full-width', 'container-fluid', 'container');
    
    // Check if the input is in the array of valid options, otherwise return the default.
    if (in_array($input, $valid, true)) {
        return $input;
    }
    
    // Default fallback if the input is not valid.
    return 'full-width';
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extra.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Social Links Widget
 */
require get_template_directory() . '/inc/widget-social-links.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Info Theme
 */
require get_template_directory() . '/inc/info.php';

/**
 * Load plugin for right and no sidebar
 */
if( prime_education_woocommerce_activated() ) {
	require get_template_directory() . '/inc/woocommerce-functions.php';
}

load_theme_textdomain( 'prime-education', get_template_directory() . '/languages' );

/**
 * Getting Started
*/
require get_template_directory() . '/inc/getting-started/getting-started.php';

/**
 * Remove header text setting and control from the Customizer.
 */
function prime_education_remove_customizer_setting($wp_customize) {
    // Replace 'your_setting_id' with the actual ID or name of the setting you want to remove
    $wp_customize->remove_control('display_header_text');
    $wp_customize->remove_setting('display_header_text');
}
add_action('customize_register', 'prime_education_remove_customizer_setting');

/**
 * Display the admin notice unless dismissed.
 */
function prime_education_dashboard_notice() {
    // Check if the notice is dismissed
    $dismissed = get_user_meta(get_current_user_id(), 'prime_education_dismissable_notice', true);

    // Display the notice only if not dismissed
    if (!$dismissed) {
        ?>
        <div class="updated notice notice-success is-dismissible notice-get-started-class" data-notice="get-start" style="display: flex;padding: 10px;">
            <p><?php echo esc_html('Clicking the "Getting Started" button will launch your theme discovery.', 'prime-education'); ?></p>
            <a style="margin-left: 30px; padding: 8px 15px;" class="button button-primary"
               href="<?php echo esc_url(admin_url('themes.php?page=prime-education')); ?>"><?php esc_html_e('Getting Started', 'prime-education') ?></a>
           <a style="margin-left: 30px; padding: 8px 15px;" class="button button-primary"
           target="_blank" href="<?php echo esc_url('https://demo.themeignite.com/documentation/prime-education-free'); ?>"><?php esc_html_e('Free Documentation', 'prime-education') ?></a>
           
        </div>
        <?php
    }
}

// Hook to display the notice
add_action('admin_notices', 'prime_education_dashboard_notice');

/**
 * AJAX handler to dismiss the notice.
 */
function prime_education_dismissable_notice() {
    // Set user meta to indicate the notice is dismissed
    update_user_meta(get_current_user_id(), 'prime_education_dismissable_notice', true);
    die();
}

// Hook for the AJAX action
add_action('wp_ajax_prime_education_dismissable_notice', 'prime_education_dismissable_notice');

/**
 * Clear dismissed notice state when switching themes.
 */
function prime_education_switch_theme() {
    // Clear the dismissed notice state when switching themes
    delete_user_meta(get_current_user_id(), 'prime_education_dismissable_notice');
}

// Hook for switching themes
add_action('after_switch_theme', 'prime_education_switch_theme');

function prime_education_menu_customizer_css() {
	$prime_education_sidebar_text_align = get_theme_mod('prime_education_sidebar_text_align', 'left');
    ?>
    <style type="text/css">
        .main-navigation ul li a {
            font-weight: <?php echo esc_html( get_theme_mod( 'menu_font_weight', '700' ) ); ?>;
            text-transform: <?php echo esc_html( get_theme_mod( 'menu_text_transform', 'uppercase' ) ); ?>;
        }
        .widget-area h2 {
            text-align: <?php echo esc_attr($prime_education_sidebar_text_align); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'prime_education_menu_customizer_css' );

function prime_education_sanitize_post_content_align($input) {
    // Define the valid options
    $valid = array('left-align', 'right-align', 'center-align');
    
    // Check if the input is in the array of valid options, otherwise return the default.
    if (in_array($input, $valid, true)) {
        return $input;
    }
    
    // Default fallback if the input is not valid.
    return 'left-align';
}

// Sanitize Font Weight
function prime_education_sanitize_font_weight( $value ) {
    $valid = array( '100', '200', '300', '400', '500', '600', '700', '800', '900' );
    return in_array( $value, $valid ) ? $value : '400';
}

// Sanitize Text Transform
function prime_education_sanitize_text_transform( $value ) {
    $valid = array( 'none', 'capitalize', 'uppercase', 'lowercase' );
    return in_array( $value, $valid ) ? $value : 'none';
}

function prime_education_custom_blog_banner_title() {
    if (is_404()) {
        echo '<h1 class="entry-title">'. esc_html( 'Comments are closed.', 'prime-education' ).'</h1>';
    } elseif (is_search()) {
        echo '<h1 class="entry-title">'. esc_html( 'Search Result For.', 'prime-education' ).' ' . get_search_query() . '</h1>';
    } elseif (is_home() && !is_front_page()) {
        echo '<h1 class="entry-title">'. esc_html( 'Blogs', 'prime-education' ).'</h1>';
    } elseif (function_exists('is_shop') && is_shop()) {
        echo '<h1 class="entry-title">'. esc_html( 'Shop', 'prime-education' ).'</h1>';
    } elseif (is_page_template('template-homepage.php')) {
    } elseif (is_page()) {
        the_title('<h1 class="entry-title">', '</h1>');
    } elseif (is_single()) {
        the_title('<h1 class="entry-title">', '</h1>');
    } elseif (is_archive()) {
        the_archive_title('<h1 class="entry-title">', '</h1>');
    } else {
        the_archive_title('<h1 class="entry-title">', '</h1>');
    }
}

function prime_education_enqueue_google_fontss() {
    $prime_education_heading_font_family = get_theme_mod('prime_education_heading_font_family', '');
    $prime_education_body_font_family = get_theme_mod('prime_education_body_font_family', '');

    // Google Fonts URL builder
    $google_fonts = array(
        'Arial'          => '',
        'Verdana'        => '',
        'Helvetica'      => '',
        'Times New Roman'=> '',
        'Georgia'        => '',
        'Courier New'    => '',
        'Trebuchet MS'   => '',
        'Tahoma'         => '',
        'Palatino'       => '',
        'Garamond'       => '',
        'Impact'         => '',
        'Comic Sans MS'  => '',
        'Lucida Sans'    => '',
        'Arial Black'    => '',
        'Gill Sans'      => '',
        'Segoe UI'       => '',
        'Open Sans'      => 'Open+Sans:wght@400;700',
        'Roboto'         => 'Roboto:wght@400;700',
        'Lato'           => 'Lato:wght@400;700',
        'Montserrat'     => 'Montserrat:wght@400;700',
        'Libre Baskerville' => 'Libre+Baskerville:wght@400;700'
    );

    $prime_education_google_fonts_url = '';

    if (!empty($google_fonts[$prime_education_heading_font_family]) || !empty($google_fonts[$prime_education_body_font_family])) {
        $fonts = array();

        if (!empty($google_fonts[$prime_education_heading_font_family])) {
            $fonts[] = $google_fonts[$prime_education_heading_font_family];
        }

        if (!empty($google_fonts[$prime_education_body_font_family])) {
            $fonts[] = $google_fonts[$prime_education_body_font_family];
        }

        // Build Google Fonts URL
        $prime_education_google_fonts_url = add_query_arg(
            'family',
            implode('|', $fonts),
            'https://fonts.googleapis.com/css2'
        );
    }

    if ($prime_education_google_fonts_url) {
        wp_enqueue_style('prime-education-google-fonts', $prime_education_google_fonts_url, false);
    }
}
add_action('wp_enqueue_scripts', 'prime_education_enqueue_google_fontss');


function prime_education_apply_typography() {
    // Get the font family settings from the customizer
    $prime_education_heading_font_family = get_theme_mod('prime_education_heading_font_family');
    $prime_education_body_font_family = get_theme_mod('prime_education_body_font_family');

    // Only output CSS if one or both fonts are set
    if ($prime_education_body_font_family || $prime_education_heading_font_family) {
        ?>
        <style type="text/css">
            <?php if ($prime_education_body_font_family): ?>
            body, a, a:active, a:hover {
                font-family: <?php echo esc_html($prime_education_body_font_family); ?> !important;
            }
            <?php endif; ?>

            <?php if ($prime_education_heading_font_family): ?>
            h1, h2, h3, h4, h5, h6 {
                font-family: <?php echo esc_html($prime_education_heading_font_family); ?> !important;
            }
            <?php endif; ?>
        </style>
        <?php
    }
}
add_action('wp_head', 'prime_education_apply_typography');