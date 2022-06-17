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
    // $cats = array();
    //         foreach (get_the_category(get_the_id()) as $c) {
    //             $cat = get_category($c);
    //             array_push($cats, $cat->name);
    //         }
    // echo "<pre>";
    // print_r($cats);
    $c['id']=get_the_id();
    $c['title']=get_the_title();
    $c['slug']=get_post_field( 'post_name', get_post() );
    $c['date']=get_the_date( 'd-m-y' );
    $c['author']=get_the_author();
    //$c['cat'][]=$cats;
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


//Array Chunk Function splits an array into chunks of new arrays.(cut & piece)
//print_r(array_chunk($q, 4));

//Array Count Value Function is Show Array in Values 
//print_r(array_count_values($c));

//Array Merge function merges one or more arrays into one array.
//print_r(array_merge($c,$q));



//Array Filter Function is use to filters the values of an array using a callback function.
//Callback Function is used to one function argument passed to another function 
// function testing_filter_example($var)
//   {
//   return($var & 1);
//   }

// $a1=array(1,2,3,4,5,6,7,8,9,10);
//     print_r(array_filter($a1,"testing_filter_example"));


//This Array push function is used to inserts one or more elements to the end of an array.
//array_push($c, "dharmin_makrubiya");
//print_r($c);

//Array Combine function is used to a combine one array value to another [dharmin] => makrubiya
// $first_name = array("Dharmin","Jay","Mahesh","Keval","Parthraj");
// $surname = array("Makrubiya","Makrubiya","Shishangiya","Jadeja");
// $abc = array_combine($first_name, $surname);
// print_r($abc);

//Array Slice Function is return a selected parths to return a resluts.
//Slice means the array cut and genrate a new 3rd value and show it
// print_r(array_slice($q, 2));


//Array uniqe function is remove a duplicate array value in the array.
// print_r(array_unique($q));


//This array count Function to count of array element in the array
echo "<pre>";
print_r(count($q));
var_dump($q);
?>  




<?php

get_footer();

?>

















