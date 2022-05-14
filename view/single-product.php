<?php require_once("shared/header.php") ?>

    <!--Single product-->
    <section class="container single-product my-5 pt-5 font-roboto">
        <div class="row mt-5">

            <div class="col-lg-5 col-md-6 col-sm-12">
                <img class="img-fluid w-100 pb-1"  id="mainImg" src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/images/<?php echo $product["product_category"]?>/<?php echo $product["product_image"] ?>" />
            </div>

            <div class="col-lg-6 col-md-12 col-12">
                <h3><?php echo strtoupper($product['product_category']); ?></h3>
                <h3 class="py-4"><?php echo $product['product_name']; ?></h3>
                <h2>$<?php echo $product['product_price']; ?></h2>

                <form method="POST" action="cart.php">
                    <!-- <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>" />
                    <input type="hidden" name="product_image" value="<?php echo $product['product_image']; ?>" />
                    <input type="hidden" name="product_name" value="<?php echo $product['product_name']; ?>" />
                    <input type="hidden" name="product_price" value="<?php echo $product['product_price']; ?>" /> -->
                    <input type="number" name="product_quantity" value="1" />
                    <button class="buy-btn" type="submit" name="add_to_cart">Add To Cart</button>
                </form>

                <h4 class="mt-5 mb-5">Product details</h4>
                <span>
                <?php echo $product['product_description']; ?>
                </span>
            </div>
        </div>
    </section>

<?php require_once("shared/footer.php") ?>





    