function cancel(id ,quantity, product_id, product_size, email){
    if(confirm("are you sure to cancel this item?")){
    $.ajax({
        url: 'customer_cancel.php',
        type: 'POST',
        dataType: 'json',
        data: {
            id: id,
            quantity: quantity,
            product_id: product_id,
            product_size: product_size,
            email: email
        },
        success: function() {
            alert('Item Canceled!');
            window.location.replace(document.referrer);  
        },
    });
}

}

function remove(item_uid){
    if(confirm("Please Click OK to Delete This Item In your For Delivery Page")){
        $.ajax({
            url: 'delete_item.php',
            type: 'POST',
            dataType: 'json',
            data:{
                item_uid: item_uid
            },
            success: function(){
                window.location.replace(document.referrer);  
            }
        });
    }
}