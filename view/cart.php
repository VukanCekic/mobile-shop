<?php require_once("shared/header.php") ?>
<!--Cart-->
<section class="cart container my-5 py-5 font-roboto">
    <?php
    if (isset($item_exists)) {
    ?>
        <h3 class="text-danger"><?php echo $item_exists ?></h3>
    <?php } ?>

    <div class=" mt-5">
        <h2 class="font-weight-bolde">Your Cart</h2>
    </div>


    <table class="mt-5 pt-5">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>

        <?php foreach ($_SESSION['cart'] as $product_key => $product_value) { ?>

            <tr>
                <td>
                    <div class="product-info">
                        <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/images/<?php echo $product_value["product_category"]?>/<?php echo $product_value["product_image"]?>"/>
                        <div class="d-flex flex-column">
                            <p><?php echo $product_value['product_name']; ?></p>
                            <small><span>$</span><?php echo $product_value['product_price']; ?></small>
                            <form method="POST" action="<?php $_SERVER['DOCUMENT_ROOT']?>/cart">
                                <input type="hidden" name="product_id" value="<?php echo $product_value['product_id']; ?>" />
                                <input type="submit" name="delete_cart_item" class="remove-btn" value="remove" />
                            </form>

                        </div>
                    </div>
                </td>

                <td>

                    <form method="POST" action="<?php $_SERVER['DOCUMENT_ROOT']?>/cart">
                        <input type="hidden" name="product_id" value="<?php echo $product_value['product_id']; ?>" />
                        <input type="number" name="product_quantity" value="<?php echo $product_value['product_quantity']; ?>" />
                        <input type="submit" class="edit-btn" value="edit" name="edit_cart_item_quantity" />
                    </form>

                </td>

                <td>

                    <span class="product-price">$<?php echo $product_value['product_quantity'] * $product_value['product_price']; ?></span>
                </td>
            </tr>


        <?php } ?>

    </table>

    <div class="cart-total">
        <table>
            <tr>
                <td>Total</td>
                <td>$dollar_product_value</td>
            </tr>
        </table>
    </div>

    <div class="checkout-container">
        <form method="POST" action="checkout.php">
            <input type="submit" class="btn checkout-btn" product_value="Checkout" name="checkout">
        </form>
    </div>
</section>
<?php require_once("shared/footer.php") ?>