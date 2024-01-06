function purchase() {
    var name = document.getElementById("name").value;
    var product_price = document.getElementById("product_price").value;
    var quantity = document.getElementById("quantity").value;
    var size = document.getElementById("size").value;
    var address = document.getElementById("address").value;
    var baranggay = document.getElementById("baranggay").value;
    var city = document.getElementById("city").value;
    var province = document.getElementById("province").value;
    var zip_code = document.getElementById("zip_code").value;
    var image = document.getElementById("image").value;
    var product_id = document.getElementById("product_id").value;

    // Check if any required field is empty
    if (
        name.trim() === '' ||
        product_price.trim() === '' ||
        quantity.trim() === '' ||
        size.trim() === '' ||
        address.trim() === '' ||
        baranggay.trim() === '' ||
        city.trim() === '' ||
        province.trim() === '' ||
        zip_code.trim() === '' ||
        image.trim() === ''
    ) {
        alert("Please fill in all required fields.");
        return; // Stop function execution if any field is empty
    }

    // Proceed with AJAX request if all required fields are filled
    $.ajax({
        url: 'purchase.php',
        type: 'POST',
        dataType: 'json',
        data: {
            name: name,
            product_price: product_price,
            quantity: quantity,
            size: size,
            address: address,
            baranggay: baranggay,
            city: city,
            province: province,
            zip_code: zip_code,
            image: image,
            product_id: product_id,
        },
        success: function () {
            alert("THANK YOU FOR PURCHASING OUR PRODUCT!")
            window.location.href='goldtags_apparel.php'
        },
    });
}
