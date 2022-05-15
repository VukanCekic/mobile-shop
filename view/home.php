<?php require_once("shared/header.php") ?>

<main class="font-roboto">


<div class="hero">
      <div class="glide" id="glide_1">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="center">
                <div class="left">
                  <span class="">New Inspiration <?php echo date("Y"); ?></span>
                  <h1 class="">NEW COLLECTION!</h1>
                  <p>Trending from men's and women's style collection</p>
                  <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/shop" class="hero-btn">SHOP NOW</a>
                </div>
                <div class="right">
                    <img class="img1" src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/images/hero-1.png" alt="">
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="center">
                <div class="left">
                  <span>New Inspiration <?php echo date("Y");?></span>
                  <h1>THE PERFECT MATCH!</h1>
                  <p>Trending from men's and women's  style collection</p>
                  <a href="#" class="hero-btn">SHOP NOW</a>

                </div>
                <div class="right">
                  <img class="img2" src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/images/hero-2.png" alt="">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
</div>


    <!-- New Arrivals -->
    <section class="section new-arrival">
      <div class="title">
        <h1>NEW ARRIVALS</h1>
        <p>All the latest picked from designer of our store</p>
      </div>

      <div class="product-center">

      <?php foreach ($featured_products as $featured_product) { ?>
      
        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/images/<?php echo $featured_product["product_category"] ?>/<?php echo $featured_product["product_image"] ?>" alt="" />
            </a>
          </div>

          <div class="product-info">
            <span>CATEGORY: <?php echo strtoupper($featured_product["product_category"])  ?></span>
            <a href=""><?php echo $featured_product["product_name"] ?></a>
            <h4><?php echo $featured_product["product_price"]?></h4>
          </div>
          <ul class="icons">
            <li><i onclick="location.href='<?php echo "single_product/product_id/" . $featured_product['product_id']; ?>'" class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>

        <?php } ?>

      </div>
    </section>


<!--Banner-->
<section class="section banner container  ">
<div class="left">
  <span class="trend">Trend Design</span>
  <h1>New Collection 2021</h1>
  <p>New Arrival <span class="color">Sale 50% OFF</span> Limited Time Offer</p>
  <a href="#" class="btn btn-1">Discover Now</a>
</div>
<div class="right">
  <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/images/banner.png" alt="">
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

      <?php foreach ($products_coats as $coats_item) { ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="
          <?php $_SERVER['DOCUMENT_ROOT']?>/assets/images/<?php echo $coats_item["product_category"] ?>/<?php echo $coats_item["product_image"] ?>" />

          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>

          <h5 class="p-name"><?php echo $coats_item["product_name"] ?></h5>
          <h4 class="p-price"><?php echo $coats_item["product_price"] ?></h4>
          <a href="<?php echo "single_product/product_id/" . $coats_item['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
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

<?php require_once("shared/footer.php") ?>