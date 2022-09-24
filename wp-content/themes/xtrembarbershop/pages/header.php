<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xtrem Barbershop | Ton Barbershop à Bayonne</title>
  <?php wp_head(); ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/272a5f4710.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <script src="<?php echo get_template_directory_uri() . '/js/jquery.min.js' ?>"></script>
  <script src="<?php echo get_template_directory_uri() . '/js/function.js' ?>"></script>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-transparent nav-fixed d-md-block d-none" id="nav">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
      </a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item px-2">
            <a class="nav-link hover-underline-animation font-title fw-bold" aria-current="page" href="#presentation">À propos</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link hover-underline-animation font-title fw-bold" href="#tarifs">Réserver</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="d-block d-md-none nav-fixed">
    <div class="row p-md-4 ps-4 pt-3 pe-4 pb-2">
      <div class="col-1">
        <i class="fas fa-bars closed fs-4 white"></i>
      </div>
    </div>
  </div>
  <div class="slider white vertical-center not-displayed">
    <div class="mt-5">
      <div class="text-center">
        <h1 class="reservation-mobile">Réserver</h1>
        <div class="sep mt-5"></div>
        <h1 class="mt-5 call-mobile">Téléphoner</h1>
        <div class="sep mt-5"></div>
      </div>

    </div>
  </div>