<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head() ?>
</head>

<body>

  <div>
    <header class="site-header">
      <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light">
        <!-- Show logo -->

        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        if (has_custom_logo()) {
         ?> <a href="<?php echo site_url(); ?>"><img src="' . esc_url($logo[0]) . '"  alt="<?php bloginfo('name'); ?>" /></a> <?php
        } else {
          echo '<h5>' . get_bloginfo('name') . '</h5>';
        }
        ?>
        <!-- ************* -->

        <!-- Menu Show -->

        <?php

           wp_nav_menu();
          ?>


          <!-- ********** -->
          <!-- <form class="">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          </form> -->
      </nav>
    </header>
  </div>
  <div class="py-5 text-center text-white bg-dark">
    <div class="container py-5">
      <div class="row py-5">
        <div class="mx-auto col-lg-10">
          <h1 class="display-4 mb-4 "><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
          <p class="lead mb-5"><?php bloginfo('description'); ?></p>
        </div>
      </div>
    </div>
  </div>