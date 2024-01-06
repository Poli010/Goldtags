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

    $sql = "INSERT INTO pending VALUES ('','$name', '$product_price', '$quantity', '$size', '$address', '$baranggay', '$city', '$province', '$zip_code','$image','$contact_number')";
    $result = mysqli_query($conn,$sql);

    if($result){
        $cart = "DELETE FROM add_to_cart WHERE product_id = '$product_id'";
        $delete = mysqli_query($conn,$cart);
        
        if($delete){
            echo json_encode(['success' => true]);
        }
    }


}

?>