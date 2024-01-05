<?php
require_once("connection.php");
if($_SERVER['REQUEST_METHOD']==="POST"){
    $product_name =$_POST['name'];
    $product_price =$_POST['product_price'];
    $quantity =$_POST['quantity'];
    $size =$_POST['size'];
    $address =$_POST['address'];
    $baranggay =$_POST['baranggay'];
    $city =$_POST['city'];
    $province =$_POST['province'];
    $zip_code =$_POST['zip_code'];

    $sql = "INSERT INTO `order` (`product_name`, `product_price`, `quantity`, `size`, `address`, `baranggay`, `city`, `province`, `zip_code`) 
    VALUES ('$product_name', '$product_price', '$quantity', '$size', '$address', '$baranggay', '$city', '$province', '$zip_code')";

    $result = mysqli_query($conn,$sql);
}



?>