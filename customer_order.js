//FUNCTION FOR CANCEL BUTTON
function cancel(){
    var id = document.getElementById('id').value;

    if(confirm("are you sure to cancel the request?")){
    $.ajax({
        url: 'cancel_order.php',
        type: 'POST',
        dataType: 'json',
        data: {
            id: id
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
            },
            success: function(){
                button.click();
            }
        })
    }
}