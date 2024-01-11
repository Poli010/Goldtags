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
    var contact_number = document.getElementById("contact_number").value;
    var buyer_name = document.getElementById("buyer_name").value;
    var email = document.getElementById("email").value;
    var cancel_button_hide = document.getElementById("cancel_button_hide").value;

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
        image.trim() === '' ||
        contact_number.trim() === ''
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
            contact_number: contact_number,
            buyer_name: buyer_name,
            email: email,
            cancel_button_hide: cancel_button_hide,
        },
        success: function () {
            alert("THANK YOU FOR PURCHASING OUR PRODUCT!")
            window.location.href='goldtags_apparel.php'
        },
    });
}

//FUNCTION FOR CONTACT NUMBER INPUT ONLY NUMBER
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


function updateTotal() {
    var quantity = parseInt(document.getElementById('quantity').value);
    var productPrice = parseFloat(document.getElementById('product_price').value);

   
    var total = quantity * productPrice;

 
    document.getElementById('total').innerText = '₱' + total.toFixed(2); 

    
    document.getElementById('hiddenQuantity').value = quantity;
}

updateTotal();