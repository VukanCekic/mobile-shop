<?php require_once("shared/header.php") ?>
<!--Cart-->
<section class="cart container my-5 py-5 font-roboto">
  

    <!-- Cart Items -->
    <div class="custom-container cart">
    <?php
    if (isset($item_exists)) {
    ?>
        <h3 class="color-primary"><?php echo $item_exists ?></h3>
    <?php } ?>
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <?php foreach ($_SESSION['cart'] as $product_key => $product_value) { ?>

                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/images/<?php echo $product_value["product_category"] ?>/<?php echo $product_value["product_image"] ?>" />
                            <div>
                                <p>Name: <?php echo $product_value['product_name']; ?></p>
                                <span>Price: <?php echo $product_value['product_price']; ?></span>
                                <div class="border-bottom-secondary"> </div>
                                <form method="POST" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cart">
                                    <input type="hidden" name="product_id" value="<?php echo $product_value['product_id']; ?>" />
                                    <input type="submit" name="delete_cart_item" class="custom-input" value="remove" />
                                </form>
                            </div>
                        </div>
                    </td>
                    <td>
                        <form method="POST" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/cart">
                            <input type="hidden" name="product_id" value="<?php echo $product_value['product_id']; ?>" />
                            <input type="number" min="1" name="product_quantity" value="<?php echo $product_value['product_quantity']; ?>" />
                            <input type="submit" class="edit-btn" value="edit" name="edit_cart_item_quantity" />
                        </form>
                    </td>

                    <td> <span class="product-price">$<?php echo $product_value['product_quantity'] * $product_value['product_price']; ?></span></td>
                </tr>

            <?php } ?>

 
      
          <table class="total-price">
            <tr>
              <td>Total</td>
              <?php if(isset($_SESSION['cart'])){?>
                 <td>$<?php echo $_SESSION['total']; ?></td>
               <?php } ?>  
            </tr>
          </table>
       

            <form method="POST" action="checkout.php">
                <input type="submit" class="checkout btn custom-input" value="Proceed To Checkout" name="checkout">
            </form>
        </div>
    </div>

</section>
<?php require_once("shared/footer.php") ?>