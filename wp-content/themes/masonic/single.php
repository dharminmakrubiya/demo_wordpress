<?php
/**
 * Theme Single Post Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Masonic
 * @since 1.0
 */

get_header(); ?>

<div class="site-content clear">
   <div id="container" class="wrapper clear">
      <div class="primary">

         	
            <?php while ( have_posts() ) : the_post(); ?>
            
            
            <p>Website Link :- <?php echo get_post_meta($post->ID, 'website_links', true); ?></p>

            
            
            <?php get_template_part('content', 'single'); ?>
         <?php endwhile; // end of the loop. ?>
      </div>
   </div>
</div>

<?php get_footer(); ?>