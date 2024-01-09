<?php
require_once("connection.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $image =$_POST['image'];
    $product_id = $_POST['product_id'];
    $product_size = $_POST['size'];
    $price = $_POST['product_price'];
    $description = $_POST['product_description'];
    $quantity = $_POST['quantity'];
    $username = $_POST["username"];

  $sql = "INSERT INTO add_to_cart VALUES('','$username','$name','$image','$product_id', ' $price', '  $description', '$product_size', '$quantity')";
    mysqli_query($conn, $sql);
    echo
      "
      <script>
        alert('Successfully Added');
        window.location.replace(document.referrer);
      </script>
      ";
}
?>