<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopster</title>


  <!--Font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Custom CSS file -->
  <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/styles/style.css">

   <!-- Box icons -->
   <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />



    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
  
</head>

<body>


     <!-- Header -->
     <header class="header" id="header">
      <!-- Top Nav -->
      <div class="top-nav">
        <div class=" d-flex-custom">
          <p>Order Online Or Call Us: (001) 2222-55555</p>
          <ul class="d-flex-custom">
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="navigation">
        <div class="nav-center  d-flex-custom">
        <a href="/" class="logo"><h1>Shopster</h1></a>

          <ul class="nav-list d-flex-custom">
            <li class="nav-item">
              <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/shop" class="nav-link">Shop</a>
            </li>
        
            <li class="icons d-flex-custom">
            <a href="login.html" class="icon">
              <i class="bx bx-user"></i>
            </a>
            <a href="cart.html" class="icon">
              <i class="bx bx-cart"></i>
              <span class="d-flex-custom">0</span>
            </a>
          </li>
          </ul>

          <div class="icons d-flex-custom">
            <a href="login.html" class="icon">
              <i class="bx bx-user"></i>
            </a>
            <a href="cart.html" class="icon">
              <i class="bx bx-cart"></i>
              <span class="d-flex-custom">0</span>
            </a>
          </div>

          <div class="hamburger">
            <i class="bx bx-menu-alt-left"></i>
          </div>
        </div>
      </div>
    </header>