<?php require_once("shared/header.php") ?>

<main class="font-roboto">


  <div class="hero custom-container">
    <div class="glide" id="glide_1">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <div class="center">
              <div class="left">
                <span class="">New Inspiration <?php echo date("Y"); ?></span>
                <h1 class="">NEW COLLECTION!</h1>
                <p>Trending from men's and women's style collection</p>
                <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/shop" class="hero-btn">SHOP NOW</a>
              </div>
              <div class="right">
                <img class="img1" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/images/hero-1.png" alt="">
              </div>
            </div>
          </li>
          <li class="glide__slide">
            <div class="center">
              <div class="left">
                <span>New Inspiration <?php echo date("Y"); ?></span>
                <h1>THE PERFECT MATCH!</h1>
                <p>Trending from men's and women's style collection</p>
                <a href="#" class="hero-btn">SHOP NOW</a>

              </div>
              <div class="right">
                <img class="img2" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/images/hero-2.png" alt="">
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </div>

  <!-- Featured -->
  <section class="section product-list">
    <div class="title">
      <h1>FEATURED</h1>
      <p>All the latest picked from designer of our store</p>
    </div>

    <div class="product-center">

      <?php foreach ($featured_products as $featured_product) { ?>

        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/images/<?php echo $featured_product["product_category"] ?>/<?php echo $featured_product["product_image"] ?>" alt="" />
            </a>
          </div>

          <div class="product-info">
            <span>CATEGORY: <?php echo strtoupper($featured_product["product_category"])  ?></span>
            <a href=""><?php echo $featured_product["product_name"] ?></a>
            <h4><?php echo $featured_product["product_price"] ?></h4>
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
  <section class="section banner custom-container  ">
    <div class="left">
      <span class="trend">Trend Design</span>
      <h1>New Collection 2021</h1>
      <p>New Arrival <span class="color">Sale 50% OFF</span> Limited Time Offer</p>
      <a href="#" class="btn btn-1">Discover Now</a>
    </div>
    <div class="right">
      <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/images/banner.png" alt="">
    </div>
  </section>



   <!-- Featured -->
  <section class="section product-list">
    <div class="title">
      <h1>Dresses & Coats</h1>
      <p>Here you can check out our amazing clothes</p>
    </div>

    <div class="product-center">

      <?php foreach ($products_coats as $coats_item){ ?>

        <div class="product-item">
          <div class="overlay">
            <a href="" class="product-thumb">
              <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/images/<?php echo $coats_item["product_category"] ?>/<?php echo $coats_item["product_image"] ?>" alt="" />
            </a>
          </div>

          <div class="product-info">
            <span>CATEGORY: <?php echo strtoupper($coats_item["product_category"])  ?></span>
            <a href=""><?php echo $coats_item["product_name"] ?></a>
            <h4><?php echo $coats_item["product_price"] ?></h4>
          </div>
          <ul class="icons">
            <li><i onclick="location.href='<?php echo "single_product/product_id/" . $coats_item['product_id']; ?>'" class="bx bx-search"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>

      <?php } ?>

    </div>
  </section>

</main>

<?php require_once("shared/footer.php") ?>