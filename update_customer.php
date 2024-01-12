<?php
    require_once("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $cancel_order2 = $_POST['cancel_order2'];
        $item_uid = $_POST['item_uid'];

        $hide = "UPDATE customer_pending SET cancel_button_hide = '$cancel_order2' WHERE item_uid = '$item_uid' ";
        $hide_result = mysqli_query($conn, $hide);

        if($hide_result){
            echo json_encode(['success' => true]);
        }
    }
   


?>
