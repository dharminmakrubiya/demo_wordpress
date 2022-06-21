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

// echo "<pre>";
// print_r($q);


//Array Chunk Function splits an array into chunks of new arrays.(cut & piece)
//print_r(array_chunk($q, 4));
// $subject =array('Maths','Hindi','Maths','Hindi','Gujarati','Gujarati','Science','Maths','Hindi','Maths','Hindi','Gujarati','Gujarati','Science','Hindi','Hindi','Gujarati','Gujarati','Science','Hindi');
// echo "<pre>";
// print_r(array_chunk($subject,4));


//Array Count Value Function is Show Array in Values 
// print_r(array_count_values($c));
// echo "<pre>";
// print_r(array_count_values($c));
// $subject =array('Maths','Hindi','Maths','Hindi','Gujarati','Gujarati','Science');
// echo "<pre>";
// print_r(array_count_values($subject));



//Array Filter Function is use to filters the values of an array using a callback function.
//Callback Function is used to one function argument passed to another function 
// function testing_filter_example($var)
//   {
//   return($var & 1);
//   }

// $a1=array(1,2,3,4,5,6,7,8,9,10);
//     print_r(array_filter($a1,"testing_filter_example"));


//This Array push function is used to inserts one or more elements to the end of an array.
// array_push($c, "dharmin_makrubiya");
// echo "<pre>";
// print_r($c);
// $subject1= array('English','Hindi');
// array_push($subject1,'Gujarati','Maths');
// print_r($subject1);



//Array Slice Function is return a selected parths to return a resluts.
//Slice means the array cut and genrate a new 3rd value and show it
// echo "<pre>";
// print_r(array_slice($q, 4));
$subject1 = array('Maths','Hindi','Gujarati','Science','Drawing','Sanskrit','Social Science');
$result = array_slice($subject1,2);
echo "<pre>";
print_r($result);


//Array uniqe function is remove a duplicate array value in the array.
// print_r(array_unique($q));
// $subject1 = array('Maths','Hindi','Gujarati','Science','Drawing','Sanskrit','Social Science','Gujarati');
// $result = array_unique($subject1);
// print_r($result);



//The array_merge() function is used to merge two or more arrays into a single array.
$array1 = array("subject1" => "Python", "subject2" => "sql");
$array2 = array("subject3" => "c/c++", "subject4" => "java");
$array3 = array("subject5" => "wordpress", "subject6" => "OS");
$array4 = array("subject7" => "data mining", "subject8" => "C#");
$final = array_merge($array1, $array2, $array3, $array4);
echo "<pre>";
print_r($final);



//The array_combine() function is used to combine two arrays and create a new array by using one array for keys and another array for values.
$array1 = array("subject1" ,"subject2");
$array2 = array( "c/c++", "java");
$final = array_combine($array1, $array2);
echo "<pre>";
print_r($final);

?>  

<?php
get_footer();
?>

















