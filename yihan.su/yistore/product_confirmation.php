
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Confirmation</title>
    <link rel = "icon" type = "image/png" href = "img/storelogo.png">
    
    <?php include "parts/meta.php" ?>
</head>
<body>

    <?php include "parts/navbar.php" ?>

    <div class="container">
        <div class="card soft">
            <h2><span style='font-size:1.5em;color: green;'>&#10003;</span>Order placed!</h2>
            <p style="text-align: center;">Thank you for purchasing.</p>   
            <a class="form-button confirm" href="product_list.php" style="width: 30%;  margin-left: auto;margin-right: auto;margin-top: 60px;margin-bottom: 20px;">Continue Shopping</a>
            <table class="table" >
            <tr>
                <th>
                    <a  href="product_checkout.php" style="font-size: 0.7em; color: #8fafb3;">Edit your order</a>       
                </th>    
            </tr>
        </table>
</div>
</div>

<?php include "parts/footer.php" ?>
    
</body>
</html>