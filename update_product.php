<?php
include("connection.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['product_name'];
    $product_type = $_POST['product_type'];
    $update_product = $_POST['update_product'];
    $product_price = $_POST['product_price'];
    $product_amount = $_POST['product_quantity'];
    $product_description = $_POST['product_description'];

    // Perform the update query
    $update_query = "UPDATE tb_upload SET name='$name', product_type='$product_type',product_price='$product_price', product_amount='$product_amount', product_description='$product_description' WHERE id=$id";
    
    if (mysqli_query($conn, $update_query)) {
        echo "Record updated successfully";
        // Redirect to the page where you display the table after updating
        header("Location: adminpage.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
