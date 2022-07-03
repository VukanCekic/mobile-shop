<?php require_once("shared/header.php") ?>
<?php
 $sort_by = "ASC";
if (session_status() === PHP_SESSION_ACTIVE) {
  session_destroy();
}
?>

<!--Shop-->
<section class="section all-products " id="products">
  <div class="top custom-container ">
    <h1>All Products</h1>

    <a href="?sort_order=ASC">Defualt Sorting (ASC)</a>
    <a href="?sort_order=DESC">Sort By Price (DESC)</a>

  </div>
  <div class="product-center custom-container">
  <?php foreach ($products as $featured_product) { ?>

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


<section class="pagination">
  <div class="custom-container">
  <nav aria-label="Page navigation example">
        <ul>
          
          <li class="page-item <?php if($page_no<=1){echo 'page-item--disabled';}?> ">
               <a class="page-link" href="<?php if($page_no <= 1){echo '#';}else{ echo "?page_no=".($page_no-1);} ?>">Previous</a>
          </li>


          <li class="page-item"><a class="page-link" href="?page_no=1">1</a></li>
          <li class="page-item"><a class="page-link" href="?page_no=2">2</a></li>

          <?php if( $page_no >=3) {?>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="<?php echo "?page_no=".$page_no;?>"><?php echo $page_no;?></a></li>
          <?php } ?>



          <li class="page-item <?php if($page_no >=  $total_no_of_pages){echo 'page-item--disabled';}?>">
                 <a class="page-link" href="<?php if($page_no >= $total_no_of_pages ){echo '#';} else{ echo "?page_no=".($page_no+1);}?>">Next</a></li>
         </ul>
      </nav>

  </div>
</section>


<?php require_once("shared/footer.php") ?>