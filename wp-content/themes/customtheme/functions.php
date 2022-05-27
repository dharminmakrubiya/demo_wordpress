<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}


add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

?>





<?php
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		'primary-menu' => __( 'Primary Menu' ),
		'secondary-menu' => __( 'Secondary Menu' )
		)
	);
}


?>


<?php
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


?>





<?php

if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
	
}

?>
<?php add_theme_support( 'post-thumbnails' ); ?>



<?php

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

?>


<?php

function theme_support_options() {
	$defaults = array(
	'height'      => 150,
	'width'       => 250,
	'flex-height' => false, 
	'flex-width'  => false
	);
	add_theme_support( 'custom-logo', $defaults );
   }
   // call the function in the hook
   add_action( 'after_setup_theme', 'theme_support_options' );

?>