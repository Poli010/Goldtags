<?php
require_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $buyer_name = $_POST['buyer_name'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];
    $product_name = $_POST['product_name'];
    $total_price = $_POST['total_price'];
    $quantity = $_POST['quantity'];
    $product_size = $_POST['product_size'];
    $rider_name = $_POST['rider_name'];
    $image = $_POST['image'];
    $cancel_button_hide = $_POST['cancel_button_hide'];
    $product_id = $_POST['product_id'];
    $email = $_POST['email'];
    $item_uid = $_POST['item_uid'];

    $sql = "INSERT INTO for_delivery VALUES ('', '$buyer_name', '$email','$contact_number', '$address', '$product_name','$product_id', '$total_price', '$quantity', '$product_size', '$rider_name','$image','$item_uid')";
    $result = mysqli_query($conn, $sql);

    if ($result){
        $hide = "UPDATE customer_pending SET cancel_button_hide = '$cancel_button_hide', rider = '$rider_name' WHERE item_uid = '$item_uid' ";
        $hide_result = mysqli_query($conn, $hide);
    }
    if ($hide_result) {
        $delete = "DELETE FROM pending WHERE item_uid = '$item_uid'";
        $deleter = mysqli_query($conn, $delete);

        if($deleter){
            echo json_encode(['success' => true]);
        } 
    }
}
?>
