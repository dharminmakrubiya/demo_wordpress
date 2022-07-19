<?php

use mtekk\adminKit\form;

add_shortcode('post-1', 'display_custom_post_type');
function display_custom_post_type($atts)
{





        // global $wp;
        // echo home_url( $wp->request );

    


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
    
    $result = new WP_Query($args);

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

    


    if (isset($_GET['post_cat']) && $_GET['post_cat'] !== null && $_GET['post_cat'] !='all') {
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




    if (isset($_GET['post_year']) && $_GET['post_year'] !== null && $_GET['post_year'] !='all') {
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
    


?>
<form action="" method="GET">
<select name="post_cat"  required onchange="this.form.submit()">
                <option value="all" >All Categories</option>
                    <?php 
                    $all_categories = '';
                    if(isset($_GET['post_cat']) && !empty($_GET['post_cat'])){
                        
                        $all_categories = $_GET['post_cat'];
                    }
                    if(isset($cat) && !empty($cat)){ 
                    foreach($cat as $key=>$term) { 
                        if($all_categories == $term->slug){
                            ?>
                            <option value="<?php echo $term->slug ?>" selected><?php echo $term->name ?></option>
                            
                            <?php 
                        }else{
                             ?>
                             <option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
                             <?php 
                        }
                        ?> 
                        
                     <?php } } ?>
                     
                </select>        



                <select  name="post_year" required onchange="this.form.submit()">
                <option value="all">Select Year </option>

                    <?php 
                    $all_years = '';
                    if(isset($_GET['post_year']) && !empty($_GET['post_year'])){
                        $all_years = $_GET['post_year'];
                    }
                    if(isset($category_year) && !empty($category_year)){ 
                    foreach($category_year as $key=>$term) { 
                        if($all_years == $term->slug){
                            ?>
                            <option value="<?php echo $term->slug ?>" selected><?php echo $term->name ?></option>
                            <?php 
                        }else{
                             ?>
                             <option value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
                             <?php 
                        }
                        ?> 
                        
                     <?php } } ?>
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
