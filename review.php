<?php
require 'connection.php';
if(isset($_POST["submit"])){
  $rating = $_POST["rating"];
  $comments = $_POST["comments"];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>";
  } else {
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $fileInfo = pathinfo($fileName);
    $imageExtension = strtolower($fileInfo['extension']);

    if (!in_array($imageExtension, $validImageExtension)){
      echo
      "<script> alert('Invalid Image Extension'); </script>";
    } else if($fileSize > 1000000){
      echo
      "<script> alert('Image Size Is Too Large'); </script>";
    } else {
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'review_image/' . $newImageName);
      $query = "INSERT INTO review VALUES('', '$comments', '$newImageName', '$rating')";
      mysqli_query($conn, $query);
      echo
      "<script>
        alert('Comment Successfully Add');
        document.location.href = 'goldtags_apparel.php';
      </script>";
    }
  }
}
?>