<?php require_once("shared/header.php") ?>



<!-- Product Details -->
<section class="section product-detail">
    <div class="details custom-container">
        <div class="left image-container">
            <div class="main">
                <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/images/<?php echo $product["product_category"] ?>/<?php echo $product["product_image"] ?>" id="zoom" alt="" />
            </div>
        </div>
        <div class="right">
            <span><?php echo strtoupper($product['product_category']); ?></span>
            <h1><?php echo $product['product_name']; ?></h1>
            <div class="price">$<?php echo $product['product_price']; ?></div>

            <form method="POST" class="form" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cart">
                <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>" />
                <input type="hidden" name="product_image" value="<?php echo $product['product_image']; ?>" />
                <input type="hidden" name="product_name" value="<?php echo $product['product_name']; ?>" />
                <input type="hidden" name="product_price" value="<?php echo $product['product_price']; ?>" />
                <input type="hidden" name="product_category" value="<?php echo $product['product_category']; ?>" />

                <input type="number" name="product_quantity" value="1" min="1" />
                <button class="addCart" type="submit" name="add_cart_item">Add To Cart</button>
            </form>
            <h3>Product Detail</h3>
            <p>
                <?php echo $product['product_description']; ?>
            </p>
        </div>
    </div>
</section>

<!-- Related -->
<section class="section featured">
    <div class="top custom-container">
        <h1>Related Products</h1>
        <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/shop" class="view-more">View more</a>
    </div>
    <div class="product-center custom-container">
        <?php foreach ($related_products as $related_product) { ?>

            <div class="product-item">
                <div class="overlay">
                    <a href="" class="product-thumb">
                        <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/images/<?php echo $related_product["product_category"] ?>/<?php echo $related_product["product_image"] ?>" alt="" />
                    </a>
                </div>

                <div class="product-info">
                    <span>CATEGORY: <?php echo strtoupper($related_product["product_category"])  ?></span>
                    <a href=""><?php echo $related_product["product_name"] ?></a>
                    <h4><?php echo $related_product["product_price"] ?></h4>
                </div>
                <ul class="icons">
                    <li><i onclick="location.href='<?php echo "single_product/product_id/" . $related_product['product_id']; ?>'" class="bx bx-search"></i></li>
                    <li><i class="bx bx-cart"></i></li>
                </ul>
            </div>

        <?php } ?>
    </div>
</section>

<?php require_once("shared/footer.php") ?>