<?
require_once "lib/php/functions.php";
require_once "parts/templates.php";

// $totalCartItems = getCartTotalItems();
// $totalCartPrice = getCartTotalPrice();

$cartItems = getCartItems();

// print_p($cartItems);

// print_p($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel = "icon" type = "image/png" href = "img/storelogo.png">
    
    <? include "parts/meta.php" ?>
</head>
<body>
    <? include "parts/navbar.php" ?>

        <div class="container pad push-down">
            <div class="card card-soft card-light">
                <h2 style="font-size: 64px; text-align: center;">Cart</h2>
            </div>

        </div>

    <div class="container">
        <nav class="nav-crumbs" style="margin:1em 0; padding-left: 16px;">
            <ul>
                <li><a href="product_list.php">Back to Product List</a></li>
            </ul>
        </nav>
        <div class="grid gap">
            <div class="col-xs-12 col-md-8">
                <div class="card flat">
                <?php
                echo array_reduce($cartItems,'cartListTemplate');
             
                ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="card flat">
                    <?= cartTotals() ?>
                    <div class="card-section">
                        <a href="product_checkout.php" class="form-button confirm">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include "parts/footer.php" ?>

</body>
</html>