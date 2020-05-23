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
    <title>Product Checkout</title>
    <link rel = "icon" type = "image/png" href = "img/storelogo.png">
    
    <?php include "parts/meta.php" ?>
</head>
<body>

    <?php include "parts/navbar.php" ?>
    <div class="container">
        <nav class="nav-crumbs" style="margin:1em 0">
            <ul>
                <li><a href="product_list.php" style="padding-left: 16px;">Back to Product List</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <div class="card soft">
            <h2>ORDER SUMMARY</h2>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--     5/17/2020 -->
    <div class="container">
        <div class="grid gap">
            <div class="col-xs-12 col-md-8">
                <div class="card soft">

                    <h2>CHECKOUT AS A GUEST</h2>

                    <form>
                        <h3>Card </h3>
                        <div class="form-control">
                            <label for="checkout-card-name" class="form-label">Name On Card</label>
                            <input type="text" class="form-input" id="checkout-card-name" name="checkout-card-name">
                        </div>
                        <div class="form-control">
                            <label for="checkout-card-number" class="form-label">Card Number</label>
                            <input type="text" class="form-input" id="checkout-card-number" name="checkout-card-number">
                        </div>
                        <div class="form-control">
                            <label for="checkout-card-expiration-month" class="form-label">Expiration Month</label>
                            <input type="text" class="form-input" id="checkout-card-expiration-month" name="checkout-card-expiration-month">
                        </div>
                        <div class="form-control">
                            <label for="checkout-card-expiration-year" class="form-label">Expiration Year</label>
                            <input type="text" class="form-input" id="checkout-card-expiration-year" name="checkout-card-expiration-year">
                        </div>
                        <div class="form-control">
                            <label for="checkout-card-cvv" class="form-label">CVV</label>
                            <input type="text" class="form-input" id="checkout-card-cvv" name="checkout-card-cvv">
                        </div>
                        
                        <h3>Shipping Address</h3>

                        <div class="form-control">
                            <label for="checkout-address-name" class="form-label">Full Name</label>
                            <input type="text" class="form-input" id="checkout-address-name" name="checkout-address-name">
                        </div>
                        <div class="form-control">
                            <label for="checkout-address-email" class="form-label">Email Address</label>
                            <input type="email" class="form-input" id="checkout-address-email" name="checkout-address-email">
                        </div>
                        <div class="form-control">
                            <label for="checkout-address-street" class="form-label">Street</label>
                            <input type="text" class="form-input" id="checkout-address-street" name="checkout-address-street">
                        </div>
                        <div class="form-control">
                            <label for="checkout-address-city" class="form-label">City</label>
                            <input type="text" class="form-input" id="checkout-address-city" name="checkout-address-city">
                        </div>
                        <div class="form-control">
                            <label for="checkout-address-state" class="form-label">State</label>
                            <input type="text" class="form-input" id="checkout-address-state" name="checkout-address-state">
                        </div>
                        <div class="form-control">
                            <label for="checkout-address-zip" class="form-label">Zip Code</label>
                            <input type="text" class="form-input" id="checkout-address-zip" name="checkout-address-zip">
                        </div>

                    </form>
                    <div>
                        <a href="product_confirmation.php" class="form-button confirm" style="width: 88%">Complete Payment & Place the order</a>
                    </div>
                
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="card soft">
                    <h2>SIGN IN & CHECKOUT</h2>

                    <form>
                        
                        <div class="form-control">
                            <label for="checkout-card-name" class="form-label">Email(phone for mobile accounts)</label>
                            <input type="text" class="form-input" id="checkout-card-name" name="checkout-card-name">
                        </div>
                        <div class="form-control">
                            <label for="checkout-card-number" class="form-label">Password</label>
                            <input type="text" class="form-input" id="checkout-card-number" name="checkout-card-number">
                        </div>
                        <input type="checkbox" name="">
                        <label>Remember me</label>
                    </form>



                     <div>
                        <a href="product_confirmation.php" class="form-button confirm" style="width: 88%">Sign in</a>
                    </div>
                   <!--  <hr style="color: #eaeaea;"> -->
                    <table class="table" >
                    <tr>
                        <th style="font-size: 0.7em; color: #8fafb3;">
                            <p >Forgot Password?</p>
                        </th>
                        <th style="font-size: 0.7em; color: #8fafb3; text-align: right;">
                            <p >Sign up</p>
                        </th>
                    </tr>
                   </table>
                   
                </div>
            </div>
        </div>
    </div>
 

    <?php include "parts/footer.php" ?>
    
</body>
</html>