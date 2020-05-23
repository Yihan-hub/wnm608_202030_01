<?
    require_once "lib/php/functions.php";
    require_once "parts/templates.php";

    $pagelimit = 12;
    $pageoffset = isset($_GET['page'])?$_GET['page']:0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="en">
    <title>Product List</title>
    <link rel = "icon" type = "image/png" href = "img/storelogo.png">
    
    <?php include "parts/meta.php" ?>
    
    

</head>
<body>


    <? include "parts/navbar.php" ?>

        <div class="container pad push-down">
            <div class="card card-soft card-light">
                <h2 style="font-size: 64px; text-align: center;">Store: Product List</h2>
            </div>

         </div>


    <div class="container pad push-down">
        <div class="grid gap">
            <div class="col-xs-12 col-md-3 col-lg-2">
                <div class="card-basic card-flat">
                    <div class="card-section" >

                        
                        <div >Sort</div>
                    </div>
                    <div class="card-section"  >
                        <!-- <select class="sort"> -->
                        <select class="sort" >
                            <option value="1">Newest to Oldest</option>
                            <option value="2">Oldest to Newest</option>
                            <option value="3">Price: High to Low</option>
                            <option value="4">Price: Low to High</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-9 col-lg-10">
            <form class="push-down list-search">
                <input type="search" class="form-input hotdog" name="search" placeholder="Search">
            </form>
            <div class="grid gap xs-small md-medium product-list"></div>
        </div>
    </div>

    

    <?php include "parts/footer.php" ?>

    
    <script src="js/list.js"></script>
</body>
</html>