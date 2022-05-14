<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopster</title>

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--Font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Custom CSS file -->
  <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/styles/style.css">
  
</head>

<body>

<header class="header">
    <div class="d-flex justify-content-between px-4 py-1 bg-light">
      <p class="font-roboto fs-14 mb-1">(662) 258-6771
        187 Westwood Dr
        Eupora, Mississippi(MS), 39744</p>
      <div class="font-roboto fs-14 mb-1 ">
        <a href="login.html" class="px-3 border-start text-dark text-decoration-none border-2">Login </a>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg fs-20 px-3">
      <a class="navbar-brand text-white" href="#">Shopster</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto font-roboto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="<?php $_SERVER['DOCUMENT_ROOT']?>/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./shop">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./contact.php">Contact Us</a>
          </li>
        </ul>

        <form action="#" class="font-size-14 font-rale">
          <a href="#" class="py-2 rounded-pill color-primary-bg text-decoration-none">
            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
            <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
          </a>
        </form>
      </div>
    </nav>

  </header>