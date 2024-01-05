function remove() {
    var productID = document.getElementById('product_id').value;

    if (confirm("Are you sure to delete this item?")) {
        $.ajax({
            url: 'delete_cart.php',
            type: 'POST',
            dataType: 'json',
            data: {
                product_id: productID
            },
            success: function() {
                window.location.reload()  
            },
        });
    }
}