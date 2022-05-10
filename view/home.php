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
  <link rel="stylesheet" href="../styles/style.css">

</head>

<body>
  <?php include("shared/header.php") ?>

  <main class="font-roboto">
    <!--Home-->
    <section id="home" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col d-flex flex-column justify-content-center  align-items-center align-items-md-start">
            <h5>NEW ARRIVALS</h5>
            <h1 class="text-center text-md-left"><span>Best Prices</span> This Season</h1>
            <p class="text-center text-md-left">Eshop offers the best products for the most affordable prices</p>
            <button>Shop Now</button>
          </div>
          <div class="col d-none d-md-block">
            <img src="../assets/images/hero-image.svg" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>

    <!--Brand-->
    <section id="brand" class="container-fluid">
      <div class="row m-0">
        <img class="img-fluid col-lg-2 col-md-6 d-none d-md-block" src="../assets/images/brands/brand1.jpeg" />
        <img class="img-fluid col-lg-2 col-md-6 d-none d-md-block" src="../assets/images/brands/brand2.jpeg" />
        <img class="img-fluid col-lg-2 col-md-6 d-none d-md-block" src="../assets/images/brands/brand3.jpeg" />
        <img class="img-fluid col-lg-2 col-md-6 d-none d-md-block" src="../assets/images/brands/brand4.jpeg" />
        <img class="img-fluid col-lg-2 col-md-6 d-none d-md-block" src="../assets/images/brands/brand1.jpeg" />
        <img class="img-fluid col-lg-2 col-md-6 d-none d-md-block" src="../assets/images/brands/brand2.jpeg" />
      </div>
    </section>

    <!--Featured-->
    <section id="featured" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Our Featured</h3>
        <hr class="mx-auto">
        <p>Here you can check out our featured products</p>
      </div>
      <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/featured/featured1.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">asdf</h5>
          <h4 class="p-price">$asdf</h4>
          <a href="#"><button class="buy-btn">Buy Now</button></a>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/featured/featured2.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Sport Shoes</h5>
          <h4 class="p-price">$200</h4>
          <a href="<?php echo " single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn">Buy
              Now</button></a>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/featured/featured3.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">asdf</h5>
          <h4 class="p-price">$asdf</h4>
          <a href="<?php echo " single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn">Buy
              Now</button></a>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/featured/featured4.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">asdf</h5>
          <h4 class="p-price">$asdf</h4>
          <a href="<?php echo " single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn">Buy
              Now</button></a>
        </div>
      </div>
    </section>

    <!--Banner-->
    <section id="banner" class="my-5 py-5">
      <div class="container">
        <h4>MID SEASON'S SALE</h4>
        <h1>Autumn Collection <br> UP to 30% OFF</h1>
        <button class="text-uppercase">shop now</button>
      </div>
    </section>

    <!--Clothes-->
    <section id="featured" class="my-5">
      <div class="container text-center mt-5 py-5">
        <h3>Dresses & Coats</h3>
        <hr class="mx-auto">
        <p>Here you can check out our amazing clothes</p>
      </div>
      <div class="row mx-auto container-fluid">

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/clothes/clothes1.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Product name</h5>
          <h4 class="p-price">Product price</h4>
          <a href="#"><button class="buy-btn">Buy Now</button></a>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/clothes/clothes2.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Product name</h5>
          <h4 class="p-price">Product price</h4>
          <a href="#"><button class="buy-btn">Buy Now</button></a>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/clothes/clothes3.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Product name</h5>
          <h4 class="p-price">Product price</h4>
          <a href="#"><button class="buy-btn">Buy Now</button></a>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/clothes/clothes4.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Product name</h5>
          <h4 class="p-price">Product price</h4>
          <a href="#"><button class="buy-btn">Buy Now</button></a>
        </div>
      </div>
    </section>

    <!--Watches-->
    <section id="watches" class="my-5">
      <div class="container text-center mt-5 py-5">
        <h3>Best Watches</h3>
        <hr class="mx-auto">
        <p>Check out our unique watches</p>
      </div>
      <div class="row mx-auto container-fluid">

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/watches/watch1.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Product name</h5>
          <h4 class="p-price">Produt price</h4>
          <a href="#"><button class="buy-btn">Buy Now</button></a>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/watches/watch2.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Product name</h5>
          <h4 class="p-price">Produt price</h4>
          <a href="#"><button class="buy-btn">Buy Now</button></a>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/watches/watch3.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Product name</h5>
          <h4 class="p-price">Produt price</h4>
          <a href="#"><button class="buy-btn">Buy Now</button></a>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/watches/watch4.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Product name</h5>
          <h4 class="p-price">Produt price</h4>
          <a href="#"><button class="buy-btn">Buy Now</button></a>
        </div>
      </div>
    </section>

    <!--Shoes-->
    <section id="shoes" class="my-5">
      <div class="container text-center mt-5 py-5">
        <h3>Shoes</h3>
        <hr class="mx-auto">
        <p>Here you can check out our amazing shoes</p>
      </div>
      <div class="row mx-auto container-fluid">

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/shoes/shoes1.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Product Name</h5>
          <h4 class="p-price">Product Price</h4>
          <a href="#"><button class="buy-btn">Buy Now</button></a>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/shoes/shoes2.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Product Name</h5>
          <h4 class="p-price">Product Price</h4>
          <a href="#"><button class="buy-btn">Buy Now</button></a>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/shoes/shoes3.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Product Name</h5>
          <h4 class="p-price">Product Price</h4>
          <a href="#"><button class="buy-btn">Buy Now</button></a>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="../assets/images/shoes/shoes4.jpeg" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Product Name</h5>
          <h4 class="p-price">Product Price</h4>
          <a href="#"><button class="buy-btn">Buy Now</button></a>
        </div>

      </div>
    </section>
  </main>

  <?php include("shared/footer.php") ?>

  <!-- Bootstrap Js bundle -->
  <script src="../https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="../https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="../https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Custom Javascript -->
  <!-- <script src="../app.js"></script> -->

</body>

</html>