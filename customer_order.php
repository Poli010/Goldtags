<?php
$id = $_GET['id'];
$name = $_GET['name'];
$product_price = $_GET['product_price'];
$quantity = $_GET['quantity'];
$product_size = $_GET['product_size'];
$address = $_GET['address'];
$baranggay = $_GET['baranggay'];
$city = $_GET['city'];
$province = $_GET['province'];
$zip_code = $_GET['zip_code'];
$image = $_GET['image'];
$contact_number = $_GET['contact_number'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Order</title>
    <link rel="stylesheet" href="customer_order.css">
    <script src="https://kit.fontawesome.com/355342439a.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <h1>Customer Order <i class="fa-solid fa-bag-shopping"></i></h1>
        <div class="image_item">
            <div class="image">
                <img src="img/<?php echo $image ?>" height="200" width="200" alt="">
            </div>
            <div class="item">
                <p>Buyer Name:</p><br>
                <p>Contact_number: 0<?php echo $contact_number ?></p><br>
                <p>Address: <?php echo $address ?> <?php echo $baranggay ?> <?php echo $city ?>, <?php echo $province ?> <?php echo $zip_code ?></p><br>
                <p>Product Name: <span><?php echo $name ?></span></p><br>
                <p>Product Price: <span><i class="fa-solid fa-peso-sign"></i><?php echo $product_price ?></span></p><br>
                <p>Quantity: <span><?php echo $quantity ?></span></p><br>
                <p>Size: <span><?php echo $product_size ?></span></p>
            </div>
        </div>
        <div class="buttons">
            <button>Deliver</button>
            <button>Cancel Order</button>
        </div>
        
       
    </div>
    
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> 
</body>
</html>