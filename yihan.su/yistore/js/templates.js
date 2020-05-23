const productListTemplate = templater((o,i,a) =>{
    return `
    <div class="col-xs-6 col-md-4 col-lg-3">
        <a href="product_item.php?id=${o.id}" class="product-item card card-soft card-light card-flat">
            <div class="image-square">
                <img src="img/store/${o.main_image}" alt="">
            </div>
            <div class="product-description">
                <h3>${o.title}</h3>
                <div>&dollar;${Number(o.price).toFixed(2)}</div> 
            </div>
        </a>
    </div>
    `
}); // had to add this code on line 11 because my price was not a numeric value

// 5/19 change line9 from <div>${o.title}</div> to <h3>${o.title}</h3> make the product name on the product_list bold like them in product_item page, 
// which use <h2> for name instead of <div>
