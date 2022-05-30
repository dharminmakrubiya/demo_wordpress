<?php

function custom_theme_assets()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'custom_theme_assets');

?>





<?php
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
            'secondary-menu' => __('Secondary Menu')
        )
    );
}


?>


<?php
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


?>


<?php

function theme_support_options()
{
    $defaults = array(
        'height'      => 50,
        'width'       => 100,
        'flex-height' => false,
        'flex-width'  => false
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'theme_support_options');



?>



<?php

if (function_exists('the_custom_logo')) {
    the_custom_logo();
}

?>
<?php add_theme_support('post-thumbnails'); ?>



<?php

function register_menu()
{
    register_nav_menus(
        array(
            'primary-menu' => 'Primary Nav Menu',
            'footer-menu' => 'Footer Menu',
        )
    );
}
add_action("init", "register_menu")

?>

<?php
function showpost()
{
    //Show the post title
    $mypost = '<h5></h5>';

    //featch wp_query
    $my = new WP_Query(array(
        'post_status' => 'publish',
        'post_type' => 'post',
        'post_per_page' => 9
    ));

    //Using a while loop to show a available post in the list
    while ($my->have_posts()) {
        //get the post
        $my->the_post();

        //get the post title 
        $mypost = $mypost . get_the_title() . '<br>';

        //get the post image
        $mypost = $mypost . get_the_post_thumbnail() . '<br>';

        //get the post discriptions
        $mypost = $mypost . get_the_content() . '<br>';

        //get the post release date
        $mypost = $mypost . get_the_date() . '<br>';
    }
    //wp_reset_post data is loop is finish then postdata reset
    wp_reset_postdata();

    //return the all post uaing a $mypost
    return $mypost;
}

//add this shortcode [showpost] to particular page and posts are show in page  
add_shortcode('showpost', 'showpost');

?>