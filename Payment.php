<?php
$conn = mysqli_connect('localhost', 'root', '', 'upload');
$name = $_GET['name'];
$product_price = $_GET['product_price'];
$quantity = $_GET['quantity'];
$size = $_GET['size'];
$image = $_GET['image'];
$contact_number = $_GET['contact_number'];
$product_id = $_GET['product_id'];
$buyer_name = $_GET['buyer_name'];
$email = $_GET['email'];
$cancel_button_hide = $_GET['cancel_button_hide'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goldtag</title>
    <link rel="stylesheet" href="payment.css">
    <script src="https://kit.fontawesome.com/355342439a.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <h1>Your Order <i class="fa-solid fa-bag-shopping"></i></h1>
        <div class="image_item">
            <div class="item">
                <input type="hidden" id="name" name="name"value="<?php echo $name ?>">
                <input type="hidden" id="product_price" value="<?php echo $product_price ?>">
                <input type="hidden" id="quantity" value="<?php echo $quantity ?>">
                <input type="hidden" id="size" value="<?php echo $size ?>">
                <input type="hidden" id="image" value="<?php echo $image ?>">
                <input type="hidden" id="product_id" value="<?php echo $product_id ?>">
                <input type="hidden" id="buyer_name" value="<?php echo $buyer_name ?>">
                <input type="hidden" id="email" value="<?php echo $email ?>">
                <input type="hidden" id="cancel_button_hide" value="<?php echo $cancel_button_hide ?>">

                <p>Product Name: <span><?php echo $name ?></span></p><br>
                <p>Product Price: <span><i class="fa-solid fa-peso-sign"></i><?php echo $product_price ?></span></p><br>
                <p>Quantity: <span><?php echo $quantity ?></span></p><br>
                <p>Size: <span><?php echo $size ?></span></p><br>
                <label for="contact_number">Contact Number:</label>
                <input type="text" id="contact_number" value="0<?php echo $contact_number ?>" onkeypress="return isNumberKey(event)" maxlength="11" required>
            </div>
            <div class="image">
                <img src="img/<?php echo $image ?>" height="200" width="200" alt="">
            </div>
        </div>
        
        <div class="info">
            <h4>Input your Address</h4>
            <input type="text" id= "address" placeholder="Address" autocomplete="off" required>
            <input type="text" id="baranggay" placeholder="Baranggay" autocomplete="off" required>
            <input type="text" id="city" placeholder="City" autocomplete="off" required>
            <input type="text" id="province" placeholder="Province" autocomplete="off" required>
            <input type="text" id="zip_code" placeholder="Zip Code" autocomplete="off" required>

            <br>
            <button type="button" id="purchase" onclick="purchase()">Purchase</button>
        </div>
        <p id="note">Note! We Only Receive Cash On Delivery And Also Please Check Your Order And Address Carefully Before Purchasing.</p>
            
    </div>
    
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> 
<script src="payment.js"></script>
</body>
</html>