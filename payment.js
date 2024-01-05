function purchase(){
    var product_name = document.getElementById("name").value;
    var product_price = document.getElementById("product_price").value;
    var quantity = document.getElementById("quantity").value;
    var size = document.getElementById("size").value;
    var address = document.getElementById("address").value;
    var baranggay = document.getElementById("baranggay").value;
    var city = document.getElementById("city").value;
    var province = document.getElementById("province").value;
    var zip_code = document.getElementById("zip_code").value;

    $.ajax({
        url: 'purchase.php',
        type: 'POST',
        dataType: 'json',
        data: {
            productName: product_name, 
            productPrice: product_price,
            productQuantity: quantity,
            product_size: size,
            address: address,
            baranggay: baranggay,
            city: city,
            province: province,
            zipCode: zip_code
        },
        success: function(){
            window.location.reload();
        },
    });
        
    
}