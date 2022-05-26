<?php
/**
 * Theme Index Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Masonic
 * @since 1.0
 */

get_header(); ?>

<?php

?>


<div class="site-content">

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Search Using Method Get (Post Search)++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<?php

   $searchData = '';
   if ( $_GET['s']!= "") 
   {
      $searchData = $_GET['s'];
   }
?>

<form method = "get"> 
<!-- value = "<?php echo $_GET['s'] ?>" -->
<input type="search" id="" name="s">
<button>Search</button>
</form><br>



<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->




 <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ Show Categories List Frontend +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- Show Categories Lists in Frontend-->
<?php
$c = get_categories(array('taxonomy'=>'Companies'));
?>

   <?php
         
         $categories = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC',
         ) );
         
         foreach( $categories as $category ) 
         {
            echo '<div><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';   
         } 
         
         ?>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


   <div id="container" class="wrapper clear">

      <?php if (have_posts()) : ?>

         <?php /* Start the Loop */ ?>
         <?php while (have_posts()) : the_post(); ?>

            <?php
            /* Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part('content', get_post_format());
            ?>

         <?php endwhile; ?>
         
         <div >

		
      <?php else : ?>

         <?php get_template_part('content', 'none'); ?>

      <?php endif; ?>

     

   </div><!-- #container -->
    

   


</div><!-- #site-content -->

<div class="wrapper">
   <?php  my_number_pagination()?>
</div>

 
   
<?php get_footer(); ?>

