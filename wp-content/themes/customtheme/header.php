<!-- <p class="h1">h1. Bootstrap heading</p> -->
<hr>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>



<nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-2 bg-dark text-white"">
  <div class="container">
    <a class="navbar-brand text-white" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">About Us</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="fw-light"><?php bloginfo( 'name' ); ?></h1>
        <p class="lead"><?php bloginfo( 'description' ); ?></p>
      </div>
    </div>
  </div>  
</header>

