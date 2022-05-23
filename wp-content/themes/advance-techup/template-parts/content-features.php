<?php 
$techup_enable_features_section = get_theme_mod( 'techup_enable_features_section', false );
if($techup_enable_features_section==true ) {
        $techup_features_no        = 3;
        $techup_features_pages      = array();
        for( $i = 1; $i <= $techup_features_no; $i++ ) {
             $techup_features_pages[] = get_theme_mod('techup_features_page '.$i); 
             $techup_features_icon[]= get_theme_mod('techup_features_icon '.$i,'fa fa-user');
        }
        $techup_features_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $techup_features_pages ),
        'posts_per_page' => absint($techup_features_no),
        'orderby' => 'post__in'
        ); 
        $techup_features_query = new WP_Query( $techup_features_args );
?>
 
	  <!--Featured Service -->
	  <section id="feature" class="feature">
      <div class="container">
        <div class="row clearfix">
            <?php
              $count = 0;
              while($techup_features_query->have_posts() && $count <= 2 ) :
              $techup_features_query->the_post();
            ?>
          <!--Featured Service -->
          <div class="featured-service col-md-4 col-sm-6 col-xs-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image"><a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail(); ?></a></figure>
                  <div class="caption-box">
                    <div class="icon">
                      <span class="fa <?php echo esc_html($techup_features_icon[$count]); ?>"></span>
                    </div>
                    <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  </div>
                  <!--Overlay-->
                  <div class="overlay-box">
                    <div class="icon_box">
                      <span class="fa <?php echo esc_html($techup_features_icon[$count]); ?>"></span>
                    </div>
                    <div class="overlay-inner">
                      <div class="overlay-content">
                        <h4 class="title">
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <div class="text"><?php echo esc_html(get_the_excerpt()); ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
              $count = $count + 1;
              endwhile;
              wp_reset_postdata();
            ?>          
            </div>
          </div>
        </section>
   

<?php } ?>