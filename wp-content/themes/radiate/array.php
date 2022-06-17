	<?php
    /* Template Name: Array Template */
    get_header();
    ?>


	<?php
   
    $categories = get_categories(array(
        'taxonomy' => 'category',
        'post_status' => 'publish',
        'posts_per_page' => 20
    ));
    $arr = array();
    foreach ($categories as $category) {
        printf(
            '<a href="%1$s">%2$s</a><br />',
            esc_url(get_category_link($category->term_id)),
            esc_html($category->name),
            
        );
        $a =array($category->name);
        array_push($arr,$category->name);
    }
    echo "<pre>";
    // print_r($categories);
    print_r($arr);
    ?>



	<?php
// $post = array();
foreach ($categories as $category) 
{
    
    $args = array(
        'category_name' => $category->name,
        'post_type' => 'post',
        'pst_status' => 'publish',
        
    );
    $arr1 = array();
    
    $arr_posts = new WP_Query($args);

    echo "<pre>";
    
    // print_r($arr_posts->posts);
   
    if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;

 endif ;
    //  echo "category=".$category->name."<br>";
    if ($arr_posts->have_posts()) :

        // die('222222');
//    foreach ($arr_posts->posts as $key => $post) {
// //    die('66666');
//        $post[$category->name]= 'helooooo';

//     //    print_r($post);
//     //    die;
//    }
            $arr_posts->the_post();
                
            
            // echo "post". the_title()."<br>";
            // array_push($arr1,the_title());
             array_push($arr1, array(get_the_title()));
            print_r($arr1);

     
    endif;

    
}
    print_r($post);
    die;
    // print_r($arr);
    $args = array(
        //'taxonomy' => 'category',
        'post_type' => 'post',
        'pst_status' => 'publish',
        //'posts_per_page' => 5,
        // 'tax_query' => array(
        //     array(
        //         'category_name' => 'uncategorized',
        //         'field'    => 'slug',
        //         // 'terms'    => array( 'TERM_SLUG' ),
        //         'operator' => 'IN'
        //     ),
        // ),
    );

    $arr_posts = new WP_Query($args);
    var_dump($arr_posts ['posts']);

    if ($arr_posts->have_posts()) :

        while ($arr_posts->have_posts()) :
            $arr_posts->the_post();
    ?>
	        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	            <?php
                if (has_post_thumbnail()) :
                    the_post_thumbnail();
                endif;
                ?>
	            <header class="entry-header">
	                <h1 class="entry-title"><?php the_title(); ?></h1>
	            </header>
	            <div class="entry-content">
	                <?php the_excerpt(); ?>
	                <a href="<?php the_permalink(); ?>">Read More</a>
	            </div>
	        </article>
	<?php
        endwhile;
    endif;

    ?>




	<?php
    get_footer();
    ?>