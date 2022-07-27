<?php 

function getPagination($totalPages,$limit){
    $fiterData = array();
    $pageid = isset($_GET['pageid']) ? (int) $_GET['pageid'] : 1;
    $output = '';
    if(isset($totalPages) && $totalPages > 1) {
        $i=0;
        $prev = $pageid - 1;
        $next = $pageid + 1; 
        if(isset($_GET) && !empty($_GET)){
            $fiterData = $_GET;
        }else{
            $fiterData['pageid'] = 1;
        }
        $output .= '<ul class="pagination justify-content-center mb-0">';

        if(isset($pageid) && $pageid != 1){
            $fiterData['pageid'] = $prev;
            $output .= "<li class='page-item'>";
            $output .='<a class="page-link" href="?'.http_build_query($fiterData).'"> Prev </a>';
            $output .= "</li>";
        }
        for($i=1; $i <= $totalPages; $i++) {
            if($pageid == $i) { 
                $output .= "<li class='page-item active'>";
                $output .='<span class="page-link"> '.$i.' </span>';
                $output .= "</li>"; 
            }else{
                $fiterData['pageid'] = $i;
                $output .= "<li class='page-item'>";
                $output .='<a class="page-link" href="?' .http_build_query($fiterData). '"> '.$i.' </a>';
                $output .= "</li>";
            }
        }
        if(isset($pageid) && $pageid != $totalPages) {
            $fiterData['pageid'] = $next;
            $output .= "<li class='page-item'>";
            $output .='<a class="page-link" href="?'.http_build_query($fiterData).'"> Next </a>';
            $output .= "</li>";
        }

    }
    echo $output;
}


?>














<?php

use mtekk\adminKit\form;

add_shortcode('post-1', 'display_custom_post_type');
function display_custom_post_type($atts)
{





    // global $wp;
    // echo home_url( $wp->request );





    $cat = get_categories(array('taxonomy' => 'category'));
    // echo "<pre>";
    // print_r($cat);
    // echo "Categories";
    // foreach ($cat as $catvalue) {
    //     echo "<li><a href=\"?post_cat=$catvalue->slug\">$catvalue->name</a></li>";
    // }





    $category_year = get_categories(array('taxonomy' => 'category_year'));
    // echo "<pre>";
    // print_r($category_year);
    // echo "Post Year";
    // foreach ($category_year as $post_year) {
    //     echo "<li><a href=\"?post_year=$post_year->slug\">$post_year->name</a></li>";
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



    // if (isset($_GET['post_cat']) && $_GET['post_cat'] !== null && $_GET['post_year'] !='All' ) {

    //     $args['tax_query'] = array(
    //         array(
    //             'taxonomy' => 'category',
    //             'field' => 'slug',
    //             'include_children' => true,
    //             'operator'         => 'IN',
    //             'terms' => $_GET['post_cat'],
    //         )

    //     );
    // }
    if (isset($_GET["search"]) && $_GET["search"] != null) {
        $args["s"] = $_GET["search"];
    }





    if (isset($_GET['post_cat']) && $_GET['post_cat'] !== null && $_GET['post_cat'] != 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'include_children' => true,
                'operator'         => 'IN',
                'terms' => $_GET['post_cat'],
            )

        );
    }




    if (isset($_GET['post_year']) && $_GET['post_year'] !== null && $_GET['post_year'] != 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category_year',
                'field' => 'slug',
                'include_children' => true,
                'operator'         => 'IN',
                'terms' => $_GET['post_year'],
            )
        );
    }


    $result = new WP_Query($args);
?>
    <form action="" method="GET">
        <select name="post_cat" required onchange="this.form.submit()">
            <option value="all">All Categories</option>
            <?php
            $all_categories = '';
            if (isset($_GET['post_cat']) && !empty($_GET['post_cat'])) {

                $all_categories = $_GET['post_cat'];
            }
            if (isset($cat) && !empty($cat)) {
                foreach ($cat as $key => $term) {
                    if ($all_categories == $term->slug) {
            ?>
                        <option value="<?php echo $term->slug ?>" selected><?php echo $term->name ?></option>

                    <?php
                    } else {
                    ?>
                        <option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
                    <?php
                    }
                    ?>

            <?php }
            } ?>

        </select>



        <select name="post_year" required onchange="this.form.submit()">
            <option value="all">Select Year </option>

            <?php
            $all_years = '';
            if (isset($_GET['post_year']) && !empty($_GET['post_year'])) {
                $all_years = $_GET['post_year'];
            }
            if (isset($category_year) && !empty($category_year)) {
                foreach ($category_year as $key => $term) {
                    if ($all_years == $term->slug) {
            ?>
                        <option value="<?php echo $term->slug ?>" selected><?php echo $term->name ?></option>
                    <?php
                    } else {
                    ?>
                        <option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
                    <?php
                    }
                    ?>

            <?php }
            } ?>
        </select>




        <input type="text" name="search" value="<?php echo (isset($_GET['search']) && $_GET['search'] != null) ? $_GET['search'] : ''; ?>" required placeholder="Search...">
        <button type="submit">Submit</button>



    </form>

<?php





    if (!empty($category)) {
        $args['category_name'] = $category;
    }
    $posts = get_posts($args);


    // echo "<pre>";
    // print_r($posts);


    $show  = '<div>';
    if (isset($posts)) {


        foreach ($posts as $post) {

            $a = get_the_post_thumbnail_url($post->ID);
            $show .= '<img src="' . $a . '">';
            // print_r($a);

            $show .= '<h2>' . $post->post_title . '</h2>';
            $show .= '<h5>' . $post->post_excerpt . '</h5>';
        }
    } else {
        $show .= '<h2> No Post Found.</h2>';
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
    $show .= getPagination(10, 5);

    return $show;
}


































