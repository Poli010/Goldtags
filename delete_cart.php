<?php
require_once("connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product_size = mysqli_real_escape_string($conn, $_POST['product_size']);
    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);

    $sql = "DELETE FROM add_to_cart WHERE product_size = '$product_size' AND product_id = '$product_id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo json_encode(['success' => true]);
    }
}
?>
