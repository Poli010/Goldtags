<?php
require_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $buyer_name = $_POST['buyer_name'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];
    $product_size = $_POST['product_size'];
    $rider_name = $_POST['rider_name'];
    $image = $_POST['image'];

    $sql = "INSERT INTO for_delivery VALUES ('', '$buyer_name', '$contact_number', '$address', '$product_name', '$product_price', '$quantity', '$product_size', '$rider_name','$image')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $delete = "DELETE FROM pending WHERE id = '$id'";
        $deleter = mysqli_query($conn, $delete);

        if($deleter){
            echo json_encode(['success' => true]);
        } 
    }
}
?>
