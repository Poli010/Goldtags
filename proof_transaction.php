<?php
require 'connection.php';
if(isset($_POST["submit1"])){
  $buyer_name = $_POST["buyer_name"];
  $contact_number = $_POST["contact_number"];
  $address = $_POST["address"];
  $product_name = $_POST["product_name"];
  $item_uid = $_POST["item_uid"];
  $quantity = $_POST["quantity"];
  $product_size = $_POST["product_size"];
  $total_price = $_POST["total_price"];
  $image1 = $_POST["image1"];
  $email = $_POST["email"];
  $rider_name = $_POST["rider_name"];
  $product_id = $_POST["product_id"];


  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'proof_transaction/' . $newImageName);
      $query = "INSERT INTO complete_transaction VALUES('','$buyer_name', '$contact_number', ' $address', '  $product_name',' $total_price', ' $quantity', '$product_size','$email','$image1','$item_uid','$newImageName','$rider_name','$product_id')";
      $result = mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        window.location.replace(document.referrer);
        window.history.go(-2);
      </script>
      ";
    }
    if($result){
        $sql = "DELETE FROM for_delivery WHERE item_uid = '$item_uid'";
        $result2 = mysqli_query($conn, $sql);
    }
  }
}
?>