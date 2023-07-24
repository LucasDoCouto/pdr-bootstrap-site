<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/triangulo_pdr.svg" type="image/x-icon">
    
    <link href="css/main.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/main.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>

    </head>
  <body class="d-flex flex-column min-vh-100 pdr-light-grey-bg">

    <!-- Inicio menu -->
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
          <img src="<?php bloginfo('template_url') ?>/images/logo.svg" alt="PDR" width="100">
        </a>    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo get_home_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url(); ?>/index.php/servicos">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url(); ?>#contato">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url(); ?>/blog">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Fim menu -->