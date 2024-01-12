function to_deliver(){
    var cancel_order2 = document.getElementById('cancel_order2').value;
    var item_uid = document.getElementById('item_uid').value;
    var button = document.getElementById('submit')

    if(confirm("Are you sure you want to confirm customer?")){
        $.ajax({
            url: 'update_customer.php',
            type: 'POST',
            dataType: 'json',
            data: {
                cancel_order2: cancel_order2,
                item_uid: item_uid
            },
            success: function() {
                button.click(); 
            },
        });
    }
}

