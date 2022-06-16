<?php
/* Template Name: concept Template */
get_header();
?>


<?php
$my_post = array();
$categories = get_categories(array(
    'taxonomy' => 'category',
    'post_status' => 'publish',
    'posts_per_page' => 20
));
$children = array();
// echo "<pre>";
// print_r($categories);

foreach ($categories as $category) {
  // printf(
  //   '<a href="%1$s">%2$s</a><br />',
  //   esc_url(get_category_link($category->term_id)),
  //   esc_html($category->name),
  //   );
    $children[$category->ID][$category->slug]=array();
    $args = array (
        'post_type' => 'post',
        'pst_status' => 'publish',
        'category_name' => $category->slug,
    );
    $arr_posts = new WP_Query($args);

// echo "<pre>";
//  print_r($arr_posts);

    foreach ($arr_posts as $key => $data) {
    // echo $data->post_title;

    // $children[$category->ID][$category->slug]=$data->post_title;
    // $children[$category->slug]=$data->post_title;
    // echo $data->title;
    }


// $categories[$category->slug]= ['Hello'];
// $children = array ($categories);
}

// echo "<pre>";
// print_r($children);

// print_r($children);
?>


<?php
$args = array( 
    'posts_per_page' => -1,
    'post_type' => 'post',
    'post_status' => 'publish'
);
$query = new WP_Query($args);   
$q = array();
// echo "<pre>";
// print_r($query);
while ( $query->have_posts() ) { 
    $query->the_post(); 
    $d='<a href="'.get_permalink().'">'.get_the_id().'</a>';
    $a='<a href="'.get_permalink().'">'.get_the_id().'</a>';
    $c=array();

    $categories = get_the_category();
    foreach ( $categories as $key=>$category ) {
        $b = '<a href="'.get_category_link($category).'">'.$category->name.'</a>';    
    }
    // echo "<pre>";
    // print_r($q);
    $c['id']=get_the_id();
    $c['title']=get_the_title();
    $c['slug']=get_post_field( 'post_name', get_post() );
    $c['date']=get_the_date( 'Y-m-d' );
    // $q[$b]['id'] = $d; 
    // $q[$b]['slug'] = $c; 
    $q[$b][$a] = $c; 
}
// echo "<pre>";
// print_r($q);
wp_reset_postdata();
foreach ($q as $key=>$values) {
        // echo $key;
        //     foreach ($values as $value){
        //         echo '<li>' . $value . '</li>';
        //     }
}  
echo "<pre>";
print_r($q);
?>

<?php

get_footer();

?>

















