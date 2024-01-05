<?php
require_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product_id = $_POST['product_id'];

    $sql = "DELETE FROM add_to_cart WHERE product_id = '$product_id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo json_encode(['success' => true]);
    }
}
?>
