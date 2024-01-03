<?php
require_once("connection.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $image =$_POST['image'];
    $price = $_POST['product_price'];
    $description = $_POST['product_description'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO add_to_cart VALUES('$image','$name', ' $price', '  $description','  $quantity')";
    mysqli_query($conn, $sql);
    echo
      "
      <script>
        alert('Successfully Added');
        history.back();
      </script>
      ";
}
?>