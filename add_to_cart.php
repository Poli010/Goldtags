<?php
require_once("connection.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $image =$_POST['image'];
    $product_id = $_POST['product_id'];
    $product_size = $_POST['size'];
    $price = $_POST['product_amount'];
    $description = $_POST['product_description'];
    $quantity = $_POST['quantity'];
    $username = $_POST["username"];
    $contact_number = $_POST["contact_number"];
    $buyer_name = $_POST["buyer_name"];
    $email = $_POST["email"];
    $cancel_button_hide = $_POST["cancel_button_hide"];
    $total_price = $price * $quantity;

  $sql = "INSERT INTO add_to_cart VALUES('','$username','$buyer_name','$email','$name','$image','$product_id', ' $price', '  $description', '$product_size', '$quantity','$total_price','$contact_number','$cancel_button_hide')";
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