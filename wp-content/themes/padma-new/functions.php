<?php
/**
 * Padma New functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Padma New
 */

if ( ! defined( 'PADMA_NEW_VERSION' ) ) {
	$padma_new_theme = wp_get_theme();
	define( 'PADMA_NEW_VERSION', $padma_new_theme->get( 'Version' ) );
}


/**
 * Enqueue scripts and styles.
 */
function padma_new_scripts() {
    wp_enqueue_style( 'padma-new-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','slicknav','padma-default-block','padma-style'), '', 'all');
    wp_enqueue_style( 'padma-new-main-style',get_stylesheet_directory_uri() . '/assets/css/main-style.css',array(), PADMA_NEW_VERSION, 'all');
    wp_enqueue_script( 'masonry', get_stylesheet_directory_uri() . '/assets/js/masonry.pkgd.min.js',array('jquery'), PADMA_NEW_VERSION, true );
    wp_enqueue_script( 'padma-new-main-js', get_stylesheet_directory_uri() . '/assets/js/padma-new-main.js',array('jquery','padma-script'), PADMA_NEW_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'padma_new_scripts' );

/**
 * Load Padma New Tags.
 */
require get_stylesheet_directory() . '/inc/template-tags.php';









//***************************************************************************Custom Post type******************************************************************************************** */


// Create a Custom Post Type Module
function create_posttype() {
  
    register_post_type( 'newsroom',
        array(
            'labels' => array(
                'name' => __( 'Newsroom' ),
                'singular_name' => __( 'Newsroom' )

            ),
            'supports' => array(
				'title',
				'editor',
				'excerpt',
				'custom-fields',
				'thumbnail',
				'page-attributes'
			),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'newsroom'),
            'show_in_rest' => true,
  
        )
    );
}
add_action( 'init', 'create_posttype' );




//*********************************************************************************************************************************************************************** */








//*******************************************************************Custom Taxonomy***************************************************************************************************** */

//Add Custom Taxonomys
function add_custom_taxonomies() {

    // Add new "Locations" taxonomy to Posts

    register_taxonomy('location', 'post', array(

      // Hierarchical taxonomy (like categories)
      'hierarchical' => true,

      // Displays Wordpress UI

      'labels' => array(
        'name' => _x(
'Locations', 'taxonomy general name' ),
        'singular_name' => _x(
'Location', 'taxonomy singular name' ),
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


  //****************************************************************************************************************************************************************** */







//****************************************************************************Show Post Using Function get Posts************************************************************************************** */

//Create a ShowPost Function

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



  //****************************************************************************************************************************************************************** */
