<?php
/**
 * Theme Index Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Masonic
 * @since 1.0
 */

get_header(); ?>

<div class="site-content">
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
   <div class="wrapper">
      <?php masonic_paging_nav(); ?>
   </div>
</div><!-- #site-content -->

<?php
			if ( get_next_post_link()) {
				echo '<div>'. get_next_post_link('<i class = "budicon-arrow-left-1"></i>' . esc_html__('Older Posts' , 'njengah')) . ' </div>';				
			}

			if (get_previous_posts_link()) {
				echo '<div>' . get_previous_post_link(esc_html__('Newer Posts' , 'njengah') . ' <i class = "budicon-arrow-right-1"></i>') .' </div>';
			}
		?>
	</div>
	
	
	<?php my_number_pagination(); ?>
   
<?php get_footer(); ?>

