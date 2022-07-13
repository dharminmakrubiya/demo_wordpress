<?php




add_shortcode('post-1', 'display_custom_post_type');

function display_custom_post_type($atts)
{

    extract(shortcode_atts(array(
        'category' => ''
    ), $atts));

    //Delclare pagination
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        'numberposts' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_type' => 'post',
        'posts_per_page' => '3',

        //pagination
        'paged' => $paged
    );
    
    if (!empty($category)) {
        $args['category_name'] = $category;
    }
    $posts = get_posts($args);

    $result = new WP_Query($args);
    // echo "<pre>";
    // print_r($posts);

    $show  = '<div>';

    foreach ($posts as $post) {
        $a = get_the_post_thumbnail_url($post->ID);
        $show .= '<img src="' . $a . '">';
        // print_r($a);
        $show .= '<h2>' . $post->post_title . '</h2>';
        $show .= '<h5>' . $post->post_content . '</h5>';
    }
    $show .= '</div>';

    //pagination 
    $big = 999999999;
    echo paginate_links(
        array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' =>  $result->max_num_pages
        )
    );
    return $show;
}
