<?php
require_once("connection.php");
$email = $_GET['email'];
$item_uid = $_GET['item_uid'];
$sql = "SELECT * from complete_transaction WHERE item_uid = '$item_uid'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Order</title>
    <link rel="stylesheet" href="successfully_delivered.css">
    <script src="https://kit.fontawesome.com/355342439a.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <h1>Customer Order <i class="fa-solid fa-bag-shopping"></i></h1>
        <div class="image_item">
            <div class="image">
                <img src="img/<?php echo $row['image'] ?>" height="190" width="200" alt="">
            </div>
            <div class="item">
                <p>Buyer Name: <?php echo $row['buyer_name'] ?></p><br>
            
                <p>Product Name: <span><?php echo $row['product_name'] ?></span></p><br>
                <p>Item UID: <span><?php echo $row['item_uid'] ?></span></p><br>
                <p>Quantity: <span><?php echo $row['quantity']; ?></span></p><br>
                <p>Size: <span><?php echo $row['product_size'] ?></span></p><br> 
                <p>Total Price: <i class="fa-solid fa-peso-sign"></i> <?php echo $row['total_price'] ?> </p><br>
            </div>   
        </div>
    </div>
    
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> 
<script src="customer_order.js"></script>
</body>
</html>