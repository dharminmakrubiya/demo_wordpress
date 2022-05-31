<?php
          wp_nav_menu(
            array(
              'menu' => 'primary-menu',
              'items_wrap' => '<ul class="navbar-nav">%3$s</ul>'
            )
          )
          ?>

        <?php echo '<ul>';

  $args = array(
    'post_type' => 'page',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'post_parent' => $post->post_parent,
  );
  $query = new WP_Query($args);
  while ($query->have_posts()) {
    $query->the_post();

    $ch = get_pages('child_of=' . $post->ID);

    if (count($ch) != 0) : ?>
      <li><span><?php the_title(); ?></span>
        <?php $c = wp_list_pages('title_li=&child_of=' . $post->ID . '&echo=0');
        if ($c) : ?>
          <ul>
            <li <?php if (is_page($post->ID)) { ?> <?php } ?>><a href="<?php the_permalink(); ?>"></a></li>
          </ul>
        <?php endif; ?>
      </li>
    <?php else : ?>
      <li <?php if (is_page($post->ID)) { ?> <?php } ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

    <?php endif;
  }
  echo '</ul>'; ?>



?>
<?php

              wp_nav_menu( array (
                'theme_location' => "primary",
                'menu_id' => 'primary-menu',
                'menu_class' => 'primary-menu menu',
                'depth' => 3,
              )

              );
          ?>