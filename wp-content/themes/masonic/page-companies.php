<?php

get_header(); ?>



<?php
    
$categories = get_categories( array ('taxonomy'=>'Companies'));
echo "<pre>";
//print_r($categories);


//  $categories = get_categories( array(
//             'orderby' => 'name',
//             'order'   => 'ASC',
//           ) );
         
         foreach( $categories as $cate ) 
         {
            echo '<div class="container"><a href="' . get_category_link($cate->term_id) . '">' . $cate->name . '</a></div>';   
         } 

?>



<?php get_footer(); ?>

?>