function remove(button) {
    var productSize = button.parentElement.querySelector('[name="product_size"]').value;
    var productId = button.getAttribute('data-productid');

    if (confirm("Are you sure to delete this item?")) {
        $.ajax({
            url: 'delete_cart.php',
            type: 'POST',
            dataType: 'json',
            data: {
                product_size: productSize,
                product_id: productId  
            },
            success: function () {
                window.location.reload();
            },
        });
    }
}