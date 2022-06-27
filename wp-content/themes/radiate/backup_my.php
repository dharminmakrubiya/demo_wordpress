
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
function testing_filter_example($dharmin)
{
    return $dharmin & 1;
}

$a1 = array(1,2,3,4,5,6,7,8,9,10,11,12,12,14,15);

echo "<pre>";

print_r(array_filter($a1,"testing_filter_example"));



//The array_sum() function returns the sum of all the values in an array
$my_sum = array (10,20,30,40,50,60,70);
echo "<pre>";
print_r(array_sum($my_sum));


// The current() function is used to fetch the value of the current element in an array.
$my_name = array ("dharmin","Jay","Parthraj");

echo "<pre>";
print_r(current($my_name));




//The Array End() is used to show a last element in an array

$personal_name = array ("Dharmin","Jay","Keval","Parthraj","Mahesh");

echo "<pre>";

print_r(end($personal_name));








//Array sort()
//This function sorts an array. Elements will be arranged from lowest to highest when this function has completed.

$name = array("Tirth","Dharmin","Brijesh","Jay","Anuj");

echo "<pre>";



sort($name);

foreach ($name as $key => $value) {
    echo "sort Array [".$key."] = ".$value."\n";

}





//Array asort()
//The PHP asort () function is used to sort array units from low to high and maintain the index relationship.
$names = array("Tirth","Dharmin","Brijesh","Jay","Anuj","Garvin");
echo "<pre>";

asort($names);

foreach ($names as $key => $value) {
    echo "asort Array [".$key."] = ".$value."\n";
}






//Array ARSort()
//opposite of asort (high to low) with maintain index relationship
$names = array("Tirth","Dharmin","Brijesh","Jay","Anuj","Garvin");
echo "<pre>";


arsort($names);

foreach ($names as $key => $value) {
    echo "arsort Array [".$key."] = ".$value."\n";
}



//Array KSort
$myksortarray = array(
    "z" => 1,
    "y" => 2,
    "x" => 3,
    "n" => 4,
    "o" => 5,
    "b" => 6,
    "a" => 7,
    "m" => 8,
    "q" => 9,
    "i" => 10,
    "e" => 11,
    "d" => 12,                           
);
echo "<pre>";
ksort($myksortarray);
foreach ($myksortarray as $key => $val) {
    // echo "[".$key."] = ".$val."\n";
    echo "[".$key."] =  ".$val."\n";
}





//Array KRSort 
//reverse order according to index values and count.
$mykrsortarray = array(
    "0" => "Dharmin",
    "1" => "Parthraj",
    "2" => "Shakti",
    "3" => "Shakti Rayjada",
    "4" => "Jay",
    "5" => "Tirth",
    "6" => "Karan",
    "7" => "Raghu",
    "8" => "Ashok",
);

echo "<pre>";
krsort($mykrsortarray);
// print_r($mykrsortarray);
foreach ($mykrsortarray as $key => $value) {
    echo "[".$key."] = ".$value."\n";
}





//This Array push function is used to inserts one or more elements to the end of an array.
// array_push($c, "dharmin_makrubiya");
// echo "<pre>";
// print_r($c);
// $subject1= array('English','Hindi');
// array_push($subject1,'Gujarati','Maths');
// print_r($subject1);



//Array Slice Function is return a selected parths to return a resluts.
//Slice means the array cut and genrate a new 3rd value and show it
// $subject1 = array('Maths','Hindi','Gujarati','Science','Drawing','Sanskrit','Social-Science','GK','Eco');

// $result = array_slice($subject1,4);

// echo "<pre>";
// print_r($result);




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

















