<?php
/**
 * Radiate functions and definitions
 *
 * @package    ThemeGrill
 * @subpackage Radiate
 * @since      Radiate 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 768; /* pixels */
}

if ( ! function_exists( 'radiate_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function radiate_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on radiate, use a find and replace
		 * to change 'radiate' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'radiate', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 * Post thumbail is used for pages that are shown in the featured section of Front page.
		 */
		add_theme_support( 'post-thumbnails' );

		// Gutenberg wide layout support.
		add_theme_support( 'align-wide' );

		// Gutenberg block layout support.
		add_theme_support( 'wp-block-styles' );

		// Gutenberg editor support.
		add_theme_support( 'responsive-embeds' );

		// Supporting title tag via add_theme_support (since WordPress 4.1)
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'radiate' ),
			)
		);

		// Enable support for Post Formats.
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

		// Setup the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'radiate_custom_background_args',
				array(
					'default-color' => 'EAEAEA',
					'default-image' => '',
				)
			)
		);

		// Adding excerpt option box for pages as well
		add_post_type_support( 'page', 'excerpt' );

		// Cropping images to different sizes to be used in the theme
		add_image_size( 'featured-image-medium', 768, 350, true );

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
			)
		);

		// Gutenberg wide layout support.
		add_theme_support( 'align-wide' );

		// Gutenberg block styles support.
		add_theme_support( 'wp-block-styles' );

		// Gutenberg responsive embeds support.
		add_theme_support( 'responsive-embeds' );

		// Enable support for WooCommerce
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
endif; // radiate_setup
add_action( 'after_setup_theme', 'radiate_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function radiate_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'radiate' ),
			'id'            => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'radiate_widgets_init' );

/**
 * Assign the Radiate version to a variable.
 */
$radiate_theme = wp_get_theme( 'radiate' );

define( 'RADIATE_THEME_VERSION', $radiate_theme->get( 'Version' ) );

/**
 * Enqueue scripts and styles.
 */
function radiate_scripts() {
	// Load our main stylesheet.
	wp_enqueue_style( 'radiate-style', get_stylesheet_uri() );

	wp_enqueue_style( 'radiate-google-fonts', '//fonts.googleapis.com/css?family=Roboto|Merriweather:400,300&display=swap' );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'radiate-genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.3.1' );

	wp_enqueue_script( 'radiate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'radiate-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'radiate-custom-js', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), false, true );

	$radiate_header_image_link = get_header_image();
	wp_localize_script( 'radiate-custom-js', 'radiateScriptParam', array( 'radiate_image_link' => $radiate_header_image_link ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array(), '3.7.3', false );
	wp_script_add_data( 'html5shiv', 'conditional', 'lte IE 8' );

}

add_action( 'wp_enqueue_scripts', 'radiate_scripts' );

/**
 * Enqueue Google fonts and editor styles.
 */
function radiate_block_editor_styles() {
	wp_enqueue_style( 'radiate-editor-googlefonts', '//fonts.googleapis.com/css2?family=Roboto|Merriweather:400,300&display=swap' );
	wp_enqueue_style( 'radiate-block-editor-styles', get_template_directory_uri() . '/style-editor-block.css' );
}

add_action( 'enqueue_block_editor_assets', 'radiate_block_editor_styles', 1, 1 );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Calling in the admin area for the Welcome Page as well as for the new theme notice too.
 */

if ( is_admin() ) {
	require get_template_directory() . '/inc/admin/class-radiate-admin.php';
	require get_template_directory() . '/inc/admin/class-radiate-dashboard.php';
	require get_template_directory() . '/inc/admin/class-radiate-notice.php';
	require get_template_directory() . '/inc/admin/class-radiate-welcome-notice.php';
	require get_template_directory() . '/inc/admin/class-radiate-upgrade-notice.php';
	require get_template_directory() . '/inc/admin/class-radiate-theme-review-notice.php';
}

add_theme_support('custom-logo');
function themename_custom_logo_setup()
{
    $defaults = array(
        'height'               => 50,
        'width'                => 100,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );

    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');



// function my_all_categories() {
// 	$my_categories_list = wp_list_categories( array(
//         'taxonomy'   => 'category',
// 		'hierarchical' => true,
//     )	
//  );		
//      return $my_categories_list;		
// }

// print_r($my_categories_list);


// add_shortcode("my_all_categories", "my_all_categories");
function my_number_pagination()
   {
      //Global variables are declared outside all the function blocks.
      global $wp_query;

      $total_pages = $wp_query -> max_num_pages;

      if ($total_pages > 1) 
      {
            $current_page = max(1, get_query_var('paged'));

            echo paginate_links( array(
               'base' => get_pagenum_link(1) . '%_%',
               'current' => $current_page,
               'total' => $total_pages,
            ));
      }
   }

   function my_custom_menu() {
    register_nav_menus(
        array(
            'my-custom-menu' => _( 'Footer Menu' ),
        )
    );
}
add_action( 'init', 'my_custom_menu' );
 

function my_custom_menu_two() {
    register_nav_menus(
        array(
            'my-custom-menu_two' => _( 'Footer Two Menu' ),
        )
    );
}
add_action( 'init', 'my_custom_menu_two' );
 

function my_custom_menu_dharmin() {
    register_nav_menus(
        array(
            'my-custom-menu-dharmin' => _( 'Footer 2' ),
        )
    );
}
add_action( 'init', 'my_custom_menu_dharmin' );
 

function my_custom_menu_about() {
    register_nav_menus(
        array(
            'my-custom-menu-about' => _( 'Footer 3' ),
        )
    );
}
add_action( 'init', 'my_custom_menu_about' );
 



function wp_get_menu_array($current_menu) {

    $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['children'] = array();
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID'] = $m->ID;
            $submenu[$m->ID]['title'] = $m->title;
            $submenu[$m->ID]['url'] = $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return $menu;
}


function theme_support_options() {
	$defaults = array(
		'height'      => 10,
		'width'       => 100,
		'flex-width'  => false,
		'flex-height' => false
	);
	add_theme_support( 'custom-logo', $defaults );
   }
   // call the function in the hook
   add_action( 'after_setup_theme', 'theme_support_options' );
   
   