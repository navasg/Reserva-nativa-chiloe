<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reserva Nativa Chiloe</title>
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/Favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <!-- <link rel="stylesheet" href="assets/css/animate.css"> -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
  <!-- <link rel="stylesheet" href="assets/css/medias.css"> -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/offcanvas.css">
  <?php wp_head(); ?>
</head>

<body>

  <!-- HEADER -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand mr-auto mr-lg-0" href="index.html">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.PNG">
        </a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <div class="btn-nav">
            <a class="navbar-brand mr-auto mr-lg-0 logo-responsive" href="index.html">
              <img src="assets/img/logo.PNG" alt="">
            </a>
            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
              <i class="fa fa-times" aria-hidden="true"></i>
            </button>
          </div>
          <div class="nav-flex">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link nav-custom" data-toggle="offcanvas" href="<?php echo bloginfo('url'); ?>/">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-custom" data-toggle="offcanvas" href="<?php echo bloginfo('url'); ?>/about">Quiénes Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-custom" data-toggle="offcanvas" href="<?php echo bloginfo('url'); ?>/ubicacion">Ubicación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-custom" data-toggle="offcanvas" href="<?php echo bloginfo('url'); ?>/planos">Planos</a>
              </li>

              <li class="nav-item contact-responsive">
                <a class="nav-link nav-custom" data-toggle="offcanvas" href="#contact">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    </div>
  </header>