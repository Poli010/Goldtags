<?php
require_once("connection.php");
if($_SERVER['REQUEST_METHOD']==="POST"){
    $name =$_POST['name'];
    $product_price =$_POST['product_price'];
    $quantity =$_POST['quantity'];
    $size =$_POST['size'];
    $address =$_POST['address'];
    $baranggay =$_POST['baranggay'];
    $city =$_POST['city'];
    $province =$_POST['province'];
    $zip_code =$_POST['zip_code'];
    $image =$_POST['image'];
    $product_id =$_POST['product_id'];
    $contact_number =$_POST['contact_number'];
    $buyer_name =$_POST['buyer_name'];
    $email =$_POST['email'];
    $cancel_button_hide =$_POST['cancel_button_hide'];
    

    $sql = "INSERT INTO pending VALUES ('','$name','$product_id','$buyer_name','$email', '$product_price', '$quantity', '$size', '$address', '$baranggay', '$city', '$province', '$zip_code','$image','$contact_number',CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn,$sql);

    if($result){
        $sql1 = "INSERT INTO customer_pending VALUES ('','$name','$product_id','$buyer_name','$email', '$product_price', '$quantity', '$size', '$address', '$baranggay', '$city', '$province', '$zip_code','$image','$contact_number',CURRENT_TIMESTAMP,'$cancel_button_hide', '')";
        $result1 = mysqli_query($conn,$sql1);
    }
    

    if($result1){
        $remaining = "SELECT product_amount FROM tb_upload WHERE product_id = '$product_id'";
        $theremaining = mysqli_query($conn, $remaining);
    }

    if($theremaining){  
        $row = mysqli_fetch_assoc($theremaining);
        $current_quantity = $row['product_amount'];
        $new_quantity = $current_quantity - $quantity;

        $update_product_amount = "UPDATE tb_upload SET product_amount ='$new_quantity' WHERE product_id = '$product_id'";
        $update = mysqli_query($conn, $update_product_amount);
    }
    
    if($update){
        $cart = "DELETE FROM add_to_cart WHERE product_id = '$product_id'";
        $delete = mysqli_query($conn,$cart);
        
        if($delete){
            echo json_encode(['success' => true]);
        }
    }


}

?>