<?php

/**

 * Template Name:  Pagination
 *
 */
//  < div class = "page-navi.meta">
    if ( get_next_post_link()) {
        echo '<div class = "prev">'. get_next_post_link('<i class = "budicon-arrow-left-1"></i>' . esc_html__('Older Posts' , 'njengah')) . ' </div>';				
    }

    if (get_previous_posts_link()) {
        echo '<div class = "next">' . get_previous_post_link(esc_html__('Newer Posts' , 'njengah') . ' <i class = "budicon-arrow-right-1"></i>') .'</div>';
    }
?>
// </div>

<?php my_number_pagination(); ?>



?>