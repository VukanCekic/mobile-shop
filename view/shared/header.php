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
   
      <div class="navigation">
        <div class="nav-center container d-flex">
        <a href="/" class="logo"><h1>Shopster</h1></a>

          <ul class="nav-list d-flex">
            <li class="nav-item">
              <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/shop" class="nav-link">Shop</a>
            </li>
            <li class="nav-item">
              <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/contact" class="nav-link">Contact</a>
            </li>
            <li class="icons d-flex">
            <a href="login.html" class="icon">
              <i class="bx bx-user"></i>
            </a>
            <a href="cart.html" class="icon">
              <i class="bx bx-cart"></i>
              <span class="d-flex">0</span>
            </a>
          </li>
          </ul>

          

          <div class="hamburger">
            <i class="bx bx-menu-alt-left"></i>
          </div>
        </div>
      </div>
    </header>