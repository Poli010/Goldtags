<?php
require_once("connection.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $product_id = $_POST['product_id'];
    $cancel_order = $_POST['cancel_order'];
    $email = $_POST['email'];
    $product_size = $_POST['product_size'];

    $fetch = "SELECT product_amount FROM tb_upload WHERE product_id='$product_id'";
    $fetch_result = mysqli_query($conn, $fetch);
        
    if ($fetch_result){
        $row = mysqli_fetch_assoc($fetch_result);
        $current_quantity = $row['product_amount'];
        $new_quantity = $current_quantity + $quantity;

        $update_product_amount = "UPDATE tb_upload SET product_amount ='$new_quantity' WHERE product_id = '$product_id'";
        $update = mysqli_query($conn, $update_product_amount);
        
        if($update){
            $sql1 = "UPDATE customer_pending SET cancel_button_hide = '$cancel_order' WHERE product_id = '$product_id' AND email = '$email' AND product_size = '$product_size'";
            $result1 = mysqli_query($conn, $sql1);

            if($result1){
                $sql= "DELETE FROM pending WHERE id = '$id'";
                $result = mysqli_query($conn,$sql);

                if($result){
                    echo json_encode(['success' => true]);
                }
            }
        }      
    }
}

?>