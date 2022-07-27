<?php

use mtekk\adminKit\form;

add_shortcode('post-1', 'display_custom_post_type');
function display_custom_post_type($atts)
{

    
    // $cat = get_terms(array('taxonomy' => 'category','hide_empty' => false, 'term_order'=>'ASD'));
    $category_year = get_categories(array('taxonomy' => 'category_year','hide_empty' => false));
    $args = array(
        'taxonomy' => 'category',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'hide_empty' => false,
        'meta_query' => [[
          'key' => 'custom_order'
      ]],
  );
    $cat = get_terms($args);
    
    $pageid = isset($_GET['pageid']) ? (int) $_GET['pageid'] : 1;
    // $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

    
    extract(shortcode_atts(array(
        'category' => ''
    ), $atts));

    
    $args = array(
        'orderby' => 'ID',
        'post_type' => 'post',  
        'posts_per_page' => '5',
        //pagination
        'paged' => $pageid,
    );


    //Searching Records
    if (isset($_GET["search"]) && $_GET["search"] != null) {
        $args["s"] = $_GET["search"];
    }

    //All Categories Filters
    if (isset($_GET['post_cat']) && $_GET['post_cat'] !== null && $_GET['post_cat'] != 'all') {
        $args['tax_query'] = array(
            array(
                'meta_key'=> 'category_custom_order',
                'orderby' => 'meta_value_num',
                'taxonomy' => 'category',
                'field' => 'slug',
                'include_children' => true,
                'operator'         => 'IN',
                'terms' => $_GET['post_cat'],
            )

        );
    }
    
    //Year Wise Filters
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

        <input type="text" name="search" 
            value="<?php echo (isset($_GET['search']) && $_GET['search'] != null) ? $_GET['search'] : ''; ?>" 
         placeholder="Search...">
        <button type="submit">Submit</button>
        
    </form>

<?php

    if (!empty($category)) {
        $args['category_name'] = $category;
    }
   
    $posts = get_posts($args);

    $show  = '<div>';
    if(isset($posts) && !empty($posts)) 
    {
        foreach ($posts as $post) {
            $a = get_the_post_thumbnail_url($post->ID);
            $show .= '<img src="' . $a . '">';
            $show .= '<h2>' . $post->post_title . '</h2>';
            $show .= '<h5>' . $post->post_excerpt . '</h5>';
        }
    } 
    else {
        $show .= '<h2> No Post Found......</h2>';
    }
    $show .= '</div>';









    











    $show .= getPagination(10, 5);
    // custom_pagination();

    





    // $big = 999999999; 

    // echo paginate_links( array(
    //     'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    //     'format' => '?paged=%#%',
    //     'current' => max( 1, get_query_var('paged') ),
    //     'total' =>  $result->max_num_pages
    // ) );


    return $show;
}
?>