<?php
require 'connection.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $price = $_POST["product_price"];
  $product_type = $_POST["product_type"];
  $description = $_POST["product_description"];
  $amount = $_POST["product_amount"];
  $product_id = uniqid('product_id-');
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

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO tb_upload VALUES('','$product_id', '$name', ' $price', '  $description',' $product_type', ' $amount', '$newImageName')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'adminproductadd.php';
      </script>
      ";
    }
  }
}
?>