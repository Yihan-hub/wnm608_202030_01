<?
    include_once "lib/php/functions.php";
    include_once "parts/templates.php";

    $data = getRows(makeConn(),
        "SELECT * FROM `products` 
        WHERE `id` = '{$_GET['id']}'"
        );
    $o = $data[0];
    $images = explode(",",$o->images);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Item</title>
    <link rel = "icon" type = "image/png" href = "img/storelogo.png">
    
    <?php include "parts/meta.php" ?>

    <script src="js/item.js"></script>
</head>
<body>

    <?php include "parts/navbar.php" ?>

    <div class="container">
        <nav class="nav-crumbs" style="margin:1em 0">
            <ul>
                <li><a href="product_list.php" style="padding-left: 16px;">Back to Product List</a></li>
            </ul>
        </nav>

        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    <div class="product-main">
                        <img src="img/store/<?= $o->main_image ?>" alt="">
                    </div>
                    <div class="product-thumbs">
                    <?=
                    array_reduce($images,function($r,$o){
                        return $r."<img src='img/store/$o'>";
                    })
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <form class="card soft flat" method="get" action="form_actions.php">
                    <div class="card-section">
                        <h2><?= $o->title ?></h2>
                        <div class="product-description">
                            <div class="product-price">&dollar;<?= $o->price ?></div>
                        </div>
                    </div>
                    <div class="card-section">
                        <label class="form-label">Quantity</label>
                        <select name="amount" class="form-input">
                            <!-- option*10>{$} -->
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                    <div class="card-section">
                        <input type="hidden" name="action" value="add-to-cart">
                        <input type="hidden" name="id" value="<?= $o->id ?>">
                        <input type="hidden" name="price" value="<?= $o->price ?>">
                        <input type="submit" class="form-button confirm" value="Add To Cart">
                    </div>
                </form>
            </div>
        </div>
        <div class="card soft dark" style="padding-bottom: 68px;">
            <h3 style="line-height: 40px;">Description</h3>
            <div style="line-height: 30px;"><?= $o->description ?></div>
        </div>

<!-- 5/17/2020  -->
<div style="margin-top: 80px;">
    <h2 style="padding-left: 16px;">Recommended Products</h2>

        <div class="grid gap productlist"><div class="col-xs-6 col-md-4">
    <a href="product_item.php?id=68" class="display-block">
        <figure class="product-figure soft">
            <div class="product-image">
                <img src="img/store/pen1.png" alt="">
            </div>
            <figcaption class="product-description">
                <div class="product-price">$109.99</div>
                <div class="product-title">Pen (shiny)</div>
            </figcaption>
        </figure>
    </a>
</div><div class="col-xs-6 col-md-4">
    <a href="product_item.php?id=58" class="display-block">
        <figure class="product-figure soft">
            <div class="product-image">
                <img src="img/store/bag1.jpg" alt="">
            </div>
            <figcaption class="product-description">
                <div class="product-price">$49.99</div>
                <div class="product-title">Handmade bag</div>
            </figcaption>
        </figure>
    </a>
</div><div class="col-xs-6 col-md-4">
    <a href="product_item.php?id=2" class="display-block">
        <figure class="product-figure soft">
            <div class="product-image">
                <img src="img/store/bracelet1-2.png" alt="">
            </div>
            <figcaption class="product-description">
                <div class="product-price">$12.50</div>
                <div class="product-title">Spring Bracelet</div>
            </figcaption>
        </figure>
    </a>
</div>
</div>        
</div>
</div>

    <?php include "parts/footer.php" ?>
    
</body>
</html>