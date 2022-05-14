
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

        <?php foreach ($featured_products as $featured_product) { ?>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" 
            src="
            ../assets/images/<?php echo $featured_product["product_category"]?>/<?php echo $featured_product["product_image"]?>" />
      
            <h5 class="p-name"><?php echo $featured_product["product_name"]?></h5>
            <h4 class="p-price"><?php echo $featured_product["product_price"]?></h4>
            <a href="#"><button class="buy-btn">Buy Now</button></a>
          </div>

        <?php } ?>

      </div>

    </section>

    <!--Banner-->
    <section id="banner" class="my-5 py-5">
      <div class="container">
        <h4>MID SEASON'S SALE</h4>
        <h1>Autumn Collection <br> UP to 30% OFF</h1>
        <button class="text-uppercase" onclick="location.href='/shop';">shop now</button>
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

      <?php foreach ($products_clothes as $clothes_item) { ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" 
            src="
            ../assets/images/<?php echo $clothes_item["product_category"]?>/<?php echo $clothes_item["product_image"]?>" />

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
     
        
        <?php } ?>
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