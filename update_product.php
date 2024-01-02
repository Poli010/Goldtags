<?php
include("connection.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_amount = $_POST['product_quantity'];

    // Perform the update query
    $update_query = "UPDATE tb_upload SET name='$name', product_price='$product_price', product_amount='$product_amount' WHERE id=$id";
    
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
