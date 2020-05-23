<?
    include_once "lib/php/functions.php";
    require_once "parts/templates.php";
    $cartItems = getCartItems();  
    // add line2 line3, in order to have thumbnail img on line 37

$p = array_find(
    getCart(),
    function($o) { return $o->id==$_GET['id']; }
);
$o = getRows(makeConn(),
    "SELECT * FROM `products` WHERE `id` = {$_GET['id']}"
)[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Added to Cart</title>
    <link rel = "icon" type = "image/png" href = "img/storelogo.png">
    
    <?php include "parts/meta.php" ?>
</head>
<body>

    <?php include "parts/navbar.php" ?>



<div class="container">
    <div class="card soft flat">
        <div class="card-section">
            <h2><span style='font-size:1.5em;'>&#10003;</span>Added to the Cart!</h2>
            <div style="text-align: center;">
                Thank you for adding <?= $p->amount ?> of the 
                <a href="product_item.php?id=<?= $o->id ?>"> <?= $o->title ?></a>
                 to the cart.
            </div>
        </div>

        <div class="card-section">
                <div class="display-flex">
                    <div class="flex-none">
                        <a href="product_list.php" class="form-button confirm">Back to Shopping</a>
                    </div>
                    <div class="flex-stretch">
                    </div>
                    <div class="flex-none">
                        <a href="product_cart.php" class="form-button">View Cart</a>
                    </div>
                </div>
        </div>
    </div>
</div>

<?php include "parts/footer.php" ?>
    
</body>
</html>