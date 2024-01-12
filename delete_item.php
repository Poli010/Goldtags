<?php
require_once("connection.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $item_uid = $_POST['item_uid'];

    $sql = "DELETE FROM customer_pending WHERE item_uid = '$item_uid'";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo json_encode(['success' => true]);
    }

}

?>