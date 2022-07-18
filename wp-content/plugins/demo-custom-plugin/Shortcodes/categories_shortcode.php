<?php

add_shortcode('post-1', 'display_custom_post_type');
function display_custom_post_type($atts)
{





        // global $wp;
        // echo home_url( $wp->request );

    


    $cat = get_categories(array('taxonomy' => 'category'));
    // echo "<pre>";
    // print_r($cat);

    foreach ($cat as $catvalue) {
        echo "<li><a href=\"?post_cat=$catvalue->slug\">$catvalue->name</a></li>";
    }

    // $cpt_name = 'post';
    // $fiterData = array();
    // if(isset($_GET) && !empty($_GET)){
    //     $fiterData = $_GET;
    // }else{
    //     $fiterData['pageid'] = 1;
    // }
    



    // if (!empty($_GET['pag']) && is_numeric($_GET['pag'])) {
    //     $paged = $_GET['pag'];
    // } else {
    //     $paged = 1;
    // }

    
    // // print_r($paged);



    // $posts_per_page = (get_option('posts_per_page')) ? get_option('posts_per_page') : 10;
    // $args = array( 
    //     'posts_per_page'   => -1,
    //     'orderby'          => 'title',
    //     'order'            => 'ASC',
    //     'fields'           => 'ids',
    //     'post_type'        => $cpt_name,
     
    // );

    // $all_posts = get_posts($args);
    // $post_count = count($all_posts);
    // $num_pages = ceil($post_count / $posts_per_page);
    // if ($paged > $num_pages || $paged < 1) {
    //     $paged = $num_pages;
    // }







    // $args = array(
    //     'posts_per_page'   => $posts_per_page,
    //     'orderby'          => 'title',
    //     'order'            => 'ASC',        
    //     'post_type'        => $cpt_name,
    //     'posts_per_page' => '5',
    //     'paged'        => $paged
    // );

    // if (isset($_GET['post_cat'])) {

    //     $args['tax_query'] = array(
    //         array(
    //             'taxonomy' => 'category',
    //             'field' => 'slug',
    //             'terms' => $_GET['post_cat'],

    //         )

    //     );
    // }

    

    
    // $my_posts = get_posts($args);


    // if (!empty($my_posts)) {

    //     echo '<div>';


    //     foreach ($my_posts as $key => $my_post) {
    //         $a = get_the_post_thumbnail_url($my_post->ID);
    //         // print_r($a);
    //         echo '<img src="' . $a . '">';
    //         echo '<h3><div>' . $my_post->post_title . '</div></h3>';
    //         echo '<div>' . $my_post->post_excerpt . '</div>';
    //     }


        
    


    //     echo '</div>';
    //     if ($post_count > $posts_per_page) {

    //         echo '<div>
    //                 <ul>';

    //         if ($paged > 1) {
    //             echo '<a href="?pag=1">&laquo;</a>';
    //         } else {
    //             echo '<span>&laquo;</span>';
    //         }

    //         for ($p = 1; $p <= $num_pages; $p++) {
    //             if ($paged == $p) {
    //                 echo '<span>' . $p . '</span>';
    //             } else {
    //                 echo '<a href="?pag=' . $p . '">' . $p . '</a>';
    //             }
    //         }
            
            

    //         if ($paged < $num_pages) {
    //             echo '<a href="?pag=' . $num_pages . '">&raquo;</a>';
    //         } else {
    //             echo '<span>&raquo;</span>';
    //         }

            

    //         echo '</div>';
    //     }
    // }


    

    extract(shortcode_atts(array(
        'category' => ''
    ), $atts));



    //Delclare pagination
    // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $pageid = isset($_GET['pageid']) ? (int) $_GET['pageid'] : 1;
    $args = array(
        'numberposts' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_type' => 'post',
        'posts_per_page' => '5',

        //pagination
        'paged' => $pageid
    );
    $result = new WP_Query($args);
    if (isset($_GET['post_cat'])) {

        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $_GET['post_cat'],

            )

        );
    }


    if (!empty($category)) {
        $args['category_name'] = $category;
    }   
    $posts = get_posts($args); 


    // echo "<pre>";
    // print_r($posts);

    
    $show  = '<div>';

    foreach ($posts as $post) {

        $a = get_the_post_thumbnail_url($post->ID);
        $show .= '<img src="' . $a . '">';
        // print_r($a);

        $show .= '<h2>' . $post->post_title . '</h2>';
        $show .= '<h5>' . $post->post_excerpt . '</h5>';
    }
    $show .= '</div>';



    //pagination
    // $big = 999999999;
    // echo paginate_links(
    //     array(
    //         'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    //         'format' => '?paged=%#%',
    //         'current' => max(1, get_query_var('paged')),
    //         'total' =>  $result->max_num_pages
    //     )
        
    // );

    getPagination(10,5);

    return $show;

    
        
}
