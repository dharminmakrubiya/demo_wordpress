<?php
/**
 * Child Theme functions and definitions.
 * This theme is a child theme for Deneb.
 *
 * @subpackage Advance Techup
 * @author  wptexture https://testerwp.com/
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 */

/**
 * Theme functions and definitions.
 */
 
add_action( 'wp_enqueue_scripts', 'advance_techup_child_css',25);
function advance_techup_child_css() {
	wp_enqueue_style( 'advance-techup-parent-theme-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'advance-techup-child-style',get_stylesheet_directory_uri() . '/child-css/child.css');
    wp_enqueue_style( 'advance-techup-child-extra-style',get_stylesheet_directory_uri() . '/child-css/extras.css');
    wp_enqueue_style( 'advance-techup-child-color-style',get_stylesheet_directory_uri() . '/child-css/color.css');
	wp_enqueue_script( 'advance-techup-custom-script', get_stylesheet_directory_uri() . '/child-js/custom-script.js', array(), false, true);
	wp_enqueue_style( 'advance-techup-google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap' ); 
} 













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
