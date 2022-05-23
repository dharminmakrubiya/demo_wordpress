<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Add styles inline.
		wp_add_inline_style( 'twentytwentytwo-style', twentytwentytwo_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

if ( ! function_exists( 'twentytwentytwo_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_editor_styles() {

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', twentytwentytwo_get_font_face_styles() );

	}

endif;

add_action( 'admin_init', 'twentytwentytwo_editor_styles' );

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
}
	
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if ( ! function_exists( 'twentytwentytwo_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions twentytwentytwo_styles() and twentytwentytwo_editor_styles() above.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return string
	 */
	function twentytwentytwo_get_font_face_styles() {

		return "
		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Roman.ttf.woff2' ) . "') format('woff2');
		}

		@font-face {
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Italic.ttf.woff2' ) . "') format('woff2');
		}
		";

	}

endif;

if ( ! function_exists( 'twentytwentytwo_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
	 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Roman.ttf.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'twentytwentytwo_preload_webfonts' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';










// Step :-1 Create a Custom Post Type


// +++++++++++++++++++++++++++++++++++++++++++++++++++ Create a Custom Post Type Demo +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/* Create a Custom Post Type function */


function create_posttype() 
{
	// Register a Post Type
	register_post_type( 'Demo',
	
	// CPT UI Plugin Using And Query To Create a Post Type

	//Create a Multidimentional Array
	
	array(
	  'labels' => array(
	   'name' => __( 'Demo' ),
	   'singular_name' => __( 'Demo' )
	   
	  ),
	  'supports' => array(
		'title', // post title
		'editor', // post content
		'author', // post author
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'comments', // post comments
		'revisions', // post revisions
		'post-formats', // post formats
	),
	  'public' => true,
	  'has_archive' => false,
	  'rewrite' => array('slug' => 'Demo'),
	 )
	);
	
	}

	add_action( 'init', 'create_posttype' );
	/* Demo Custom Post Type End function*/



	// ++++++++++++++++++++++++++++++++++++++++++++Custom Post Type Demo End++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++





	//Step :- 2 Add a Custom Taxonomies Using a Wordpress Query


	// +++++++++++++++++++++++++++++++++++++++++++++++++++++++ Add a Custom Taxonomies +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


	function add_custom_taxonomies() {

		// Add new "Locations" taxonomy to Posts

		register_taxonomy('location', 'post', array(

		  // Hierarchical taxonomy (like categories)
		  'hierarchical' => true,

		  // Displays Wordpress UI

		  'labels' => array(
			'name' => _x( 'Locations', 'taxonomy general name' ),
			'singular_name' => _x( 'Location', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Locations' ),
			'all_items' => __( 'All Locations' ),
			'parent_item' => __( 'Parent Location' ),
			'parent_item_colon' => __( 'Parent Location:' ),
			'edit_item' => __( 'Edit Location' ),
			'update_item' => __( 'Update Location' ),
			'add_new_item' => __( 'Add New Location' ),
			'new_item_name' => __( 'New Location Name' ),
			'menu_name' => __( 'Locations' ),
		  ),

		  //slugs used for this taxonomy
		  'rewrite' => array(
			'slug' => 'locations', 	
			'with_front' => false, 
			'hierarchical' => true 
		  ),
		));
	  }
	  add_action( 'init', 'add_custom_taxonomies', 0 );





	// +++++++++++++++++++++++++++++++++++++++++++++++++++++++ Custom Taxonomies End +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


	// +++++++++++++++++++++++++++++++++++++++++++++++++++++++ Show Post Without Function +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

	// $args = array (
	// 	'post_type' => 'demo',
	// 	'post_status' => 'publish',
	// 	'posts_per_page' => 3,
	// 	'orderby' => 'title',
	// 	'order' => 'ASC'
	// );

	// $mypost = new WP_Query( $args);

	// while ( $mypost->have_posts() ) : $mypost->the_post(); 
	// 	print the_post();
	// 	the_excerpt();
	// endwhile;

	// wp_reset_postdata();


	//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++




	// +++++++++++++++++++++++++++++++++++++++++++++++++++++++ Show Post Using Function +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	
	//Create a ShowPost Function......

	
	
	function showpost()
	{
		//Show the post title
		$mypost = '<h5>Post Titles</h5>';

		//featch wp_query
		$my = new WP_Query(array (
			'post_status' => 'publish',
			'post_type' => 'post',
			'post_per_page' => 6
		));


		//pagination 

		paginate_links( array(
			'base' => get_pagenum_link(1) . '%_%',
			'format' => '?page=%#%',
			'current' => max(1,get_query_var('paged')),
			'total' => $my->max_num_pages,
		 ));






		//Using a while loop to show a available post in the list

		while ($my -> have_posts())
		{	
			//get the post
			$my -> the_post();

			//get the post title 
			$mypost = $mypost.get_the_title().'<br>';

			//get the post image
			$mypost = $mypost.get_the_post_thumbnail().'<br>';

			//get the post discriptions
			$mypost = $mypost.get_the_content().'<br>';
			$mypost = $mypost.my_number_pagination($my).'<br>';

			//get the post release date
			$mypost = $mypost.get_the_date().'<br>';
			
		}

		//wp_reset_post data is loop is finish then postdata reset
		wp_reset_postdata();

		//return the all post uaing a $mypost
		return $mypost;
	}

	//add this shortcode [showpost] to particular page and posts are show in page  
	add_shortcode('showpost','showpost');
	

	//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++End+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++






	//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Numeric Pagination Function++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

	function my_number_pagination($my)
	{
	   //Global variables are declared outside all the function blocks.
	   global $wp_query;
		
	   $total_pages = $wp_query -> max_num_pages;

	   if ($total_pages > 1) 
	   {
			 $current_page = max(1, get_query_var('paged'));
 
			 return paginate_links( array(
			'base' => get_pagenum_link(1) . '%_%',
			'format' => '?page=%#%',
			'current' => max(1,get_query_var('paged')),
			'total' => $my->max_num_pages,
		 ));
	   }
	}

	// $args = array(
	// 	'base'               => '%_%',
	// 	'format'             => '?paged=%#%',
	// 	'total'              => 1,
	// 	'current'            => 0,
	// 	'show_all'           => false,
	// 	'end_size'           => 1,
	// 	'mid_size'           => 2,
	// 	'prev_next'          => true,
	// 	'prev_text'          => __('« Previous'),
	// 	'next_text'          => __('Next »'),
	// 	'type'               => 'plain',
	// 	'add_args'           => false,
	// 	'add_fragment'       => '',
	// 	'before_page_number' => '',
	// 	'after_page_number'  => ''
	// );

	// function my_number_pagination()
	// {
	// 	//Global variables are declared outside all the function blocks.
	// 	global $wp_query;

	// 	$big = 999999999;
		
	
	// 	echo paginate_links( array(
	// 		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	// 		'format' => '?paged=%#%',
	// 		'current' => max( 1, get_query_var('paged') ),
	// 		'total' => $wp_query->max_num_pages) 
	// 	);
	// }

	

	//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Numeric Pagination End ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



