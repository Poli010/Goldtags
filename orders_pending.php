<?php
$id = $_GET['id'];
$email = $_GET['email'];
$prodcut_name = $_GET['product_name'];
$product_price = $_GET['product_price'];
$quantity = $_GET['quantity'];
$product_size = $_GET['product_size'];
$image = $_GET['image'];
$product_id = $_GET['product_id'];
$cancel_button_hide = $_GET['cancel_button_hide'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Order</title>
    <link rel="stylesheet" href="orders_pending.css">
    <script src="https://kit.fontawesome.com/355342439a.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <h1>Out For Delivery <i class="fa-solid fa-bag-shopping"></i></h1>
        <div class="products">
            <div class="item">
                <p>Product Name: <span><?php echo $prodcut_name ?></span></p><br>
                <p>Product Price: <span><i class="fa-solid fa-peso-sign"></i></span><?php echo $product_price ?></p><br>
                <p>Quantity: <span><?php echo $quantity ?></span></p><br>
                <?php if (!empty($product_size)): ?>
                    <p>Size: <span><?php echo $product_size ?></span></p><br>
                <?php endif; ?>
            </div>
            <div class="image">
                <img src="img/<?php echo $image ?>" alt="" srcset="" height="150" width="150">
            </div>
        </div>
        
        <?php if ($cancel_button_hide == 1): ?>
            <button class="cancel_order" onclick="cancel('<?php echo $id ?>','<?php echo $quantity ?>','<?php echo $product_id ?>','<?php echo $product_size ?>','<?php echo $email ?>')">Cancel Order</button>
            <?php elseif ($cancel_button_hide == 2): ?>
                <p class="cancel">YOUR ORDER HAS BEEN CANCELED BY ADMIN!</p>
            <?php else : ?>
                <p class="notif">!You Receive Your Item for 4-7 Business Days, Please Don't Silent Your Phone!</p>
        <?php endif; ?>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> 
    <script src="orders_pending.js"></script>
</body>
</html>
