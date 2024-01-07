<?php
require_once("connection.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST['id'];

    $sql= "DELETE FROM pending WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo json_encode(['success' => true]);
    }
}

?>