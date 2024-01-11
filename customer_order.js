//FUNCTION FOR CANCEL BUTTON
function cancel(){
    var id = document.getElementById('id').value;
    var quantity = document.getElementById("quantity").value;
    var product_id = document.getElementById("product_id").value;
    var cancel_order = document.getElementById("cancel_order").value;
    var email = document.getElementById("email").value;
    var product_size = document.getElementById("product_size").value;

    if(confirm("are you sure to cancel the request?")){
    $.ajax({
        url: 'cancel_order.php',
        type: 'POST',
        dataType: 'json',
        data: {
            id: id,
            quantity: quantity,
            product_id: product_id,
            cancel_order: cancel_order,
            email: email,
            product_size: product_size
        },
        success: function() {
            window.location.href= 'orders.php'  
        },
    });
}

}

//FUNCTION FOR DROPDOWN TO IDENTIFY RIDER EMAIL
$(document).ready(function(){
    $('.rider').change(function(){
        var selectedEmail = $(this).children("option:selected").val();
        var selectedName = $(this).children("option:selected").text();

        $('#emailInput').val(selectedEmail);
        $('#nameInput').val(selectedName);
        $('#rider_name').val(selectedName);
    });
});

//FUNCTION FOR DELIVER BUTTON
function deliver(){
    var id = document.getElementById("id").value;
    var buyer_name = document.getElementById("buyer_name").value;
    var contact_number = document.getElementById("contact_number").value;
    var address = document.getElementById("address").value;
    var product_name = document.getElementById("product_name").value;
    var product_price = document.getElementById("product_price").value;
    var quantity = document.getElementById("quantity").value;
    var product_size = document.getElementById("product_size").value;
    var rider_name = document.getElementById("rider_name").value;
    var image = document.getElementById("image").value;
    var cancel_button_hide = document.getElementById("cancel_button_hide").value;
    var email = document.getElementById("email").value;
    var product_id = document.getElementById("product_id").value;
    var emailInput = document.getElementById("emailInput").value;
    var button = document.getElementById("submit");
    
    
    
    if(confirm("Are you sure to deliver this item?")){
        $.ajax({
            url: 'send_item.php',
            type: 'POST',
            dataType: 'json',
            data:{
                id: id,
                buyer_name: buyer_name,
                contact_number: contact_number,
                address: address,
                product_name: product_name,
                product_price: product_price,
                quantity: quantity,
                product_size: product_size,
                rider_name: rider_name,
                image: image,
                cancel_button_hide: cancel_button_hide,
                email: email,
                product_id: product_id,
                emailInput: emailInput
            },
            success: function(){
                button.click();
            }
        })
    }
}

function updateTotal() {
    // Get the quantity and product price from the input fields
    var quantity = parseInt(document.getElementById('quantity').value);
    var productPrice = parseFloat(document.getElementById('product_price').value);

    // Calculate the total
    var total = quantity * productPrice;

    // Update the total span with the calculated value
    document.getElementById('total').innerText = '₱' + total.toFixed(2); // Assuming the price is in Philippine Peso

    // Set the value of the hidden input box for server-side processing
    document.getElementById('hiddenQuantity').value = quantity;
}

// Call the function initially to set the total based on the default quantity
updateTotal();