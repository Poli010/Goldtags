<?php
$id = $_GET['id'];
$name = $_GET['buyer_name'];
$product_price = $_GET['product_price'];
$quantity = $_GET['quantity'];
$product_size = $_GET['size'];
$address = $_GET['address'];
$contact_number = $_GET['contact_number'];
$image = $_GET['image'];
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
                <p>Product Name: <span><?php echo $name ?></span></p><br>
                <p>Product Price: <span><i class="fa-solid fa-peso-sign"></i><?php echo $product_price ?></span></p><br>
                <p>Quantity: <span><?php echo $quantity ?></span></p><br>
                <p>Size: <span><?php echo $product_size ?></span></p><br> 
                <input type="hidden" id="id" value="<?php echo $id ?>">  
                <p>Rider Name: </p> <br>
                <p>!You Receive Your Item for 4-7 Business Days, Please Don't Silent Your Phone!</p>
            </div>
            <div class="image">
                <img src="img/<?php echo $image ?>" alt="" srcset="" height="150" width="150">
            </div>
        </div>
            
                
    </div>
    
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> 
</body>
</html>