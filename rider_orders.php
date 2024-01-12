<?php
$id = $_GET['id'];
$name = $_GET['product_name'];
$total_price = $_GET['total_price'];
$quantity = $_GET['quantity'];
$product_size = $_GET['size'];
$address = $_GET['address'];
$image = $_GET['image'];
$contact_number = $_GET['contact_number'];
$buyer_name = $_GET['buyer_name'];
$email = $_GET['email'];
$product_id = $_GET['product_id'];
$item_uid = $_GET['item_uid'];
$rider_name = $_GET['rider_name'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Order</title>
    <link rel="stylesheet" href="rider_orders.css">
    <script src="https://kit.fontawesome.com/355342439a.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <h1>Customer Order <i class="fa-solid fa-bag-shopping"></i></h1>
        <div class="image_item">
            <div class="image">
                <img src="img/<?php echo $image ?>" height="190" width="200" alt="">
            </div>
            <div class="item">
                <p>Buyer Name: <?php echo $buyer_name ?></p><br>
                <p>Contact Number: 0<?php echo $contact_number ?></p><br>
                <p>Address: <?php echo $address ?> </p><br>
                <p>Product Name: <span><?php echo $name ?></span></p><br>
                <p>Item UID: <span><?php echo $item_uid ?></span></p><br>
                <p>Quantity: <span><?php echo $quantity ?></span></p><br>
                <p>Size: <span><?php echo $product_size ?></span></p><br> 
                <p>Total Price: <span><i class="fa-solid fa-peso-sign"></i><?php echo $total_price ?></span></p><br>
                <input type="hidden" id="id" value="<?php echo $id ?>">

                <form action="proof_transaction.php" method="post" enctype="multipart/form-data">
                    <label for="proof" class="proof">Proof Of Deliver:</label>
                    <input type="file" name="image" id="proof" accept=".jpg, .jpeg, .png" value="" required>
                    <input type="hidden" id="buyer_name" name="buyer_name" value="<?php echo $buyer_name ?>" readonly>
                    <input type="hidden" id="contact_number" name="contact_number" value="<?php echo $contact_number ?>" readonly>
                    <input type="hidden" id="address" name="address" value="<?php echo $address ?>" readonly>
                    <input type="hidden" id="product_name" name="product_name" value="<?php echo $name ?>" readonly>
                    <input type="hidden" id="item_uid" name="item_uid" value="<?php echo $item_uid ?>">
                    <input type="hidden" id="quantity" name="quantity" value="<?php echo $quantity ?>" readonly>
                    <input type="hidden" id="product_size" name="product_size" value="<?php echo $product_size ?>" readonly>
                    <input type="hidden" id="total_price" name="total_price" value = "<?php echo $total_price ?>">
                    <input type="hidden" id="image" name="image1" value = "<?php echo $image ?>">
                    <input type="hidden" id="email" name="email" value=<?php echo $email ?>>
                    <input type="hidden" id="rider_name" name="rider_name" value=<?php echo $rider_name ?>>
                    <input type="hidden" id="product_id" name="product_id" value=<?php echo $product_id ?>>
                    <input type="submit" id="submit1" name="submit1" class="to_deliver" value="Success Deliver">
                </form>
                
                <!-- SEND EMAIL TO RIDER -->
                <form action="send_email_customer.php" method="post">
                    <input type="hidden" id="emailInput" name="email1" value="<?php echo $email ?>" readonly>

                    <input type="hidden" name="greet" value="Hi!">
                    <input type="hidden" id="nameInput" name="name1" value="<?php echo $buyer_name ?>" readonly>
                    <input type="hidden" name="greet1" value="Your parcel will deliver today! Please always check your phone">
                    

                    <input type="hidden" name="greet2" value="Your Parcel Information:">
                    <input type="hidden" id="product_name1" name="product_name1" value="Product Name: <?php echo $name ?>" readonly>
                    <input type="hidden" id="quantity1" name="quantity1" value="Quantity: <?php echo $quantity ?>" readonly>
                    <input type="hidden" id="size1" name="size1" value="Product Size: <?php echo $product_size ?>" readonly>
                    <input type="hidden" id="total_price1" name="total_price1" value="Total Price: P <?php echo $total_price ?>" readonly>
                    <input type="hidden" id="greet3"name="greet3" value="Please prepare the exact amount!">
                    <input type="submit" id="submit" name="send" value="To Deliver">
                </form>


                <!--- SEND INFORMATION TO RIDER PAGE--->
                <input type="hidden" id="cancel_order2" value="3">
                
                

            </div>
        </div>
        
        <div class="buttons">
            <button class="deliver" onclick="to_deliver()">To Deliver</button>
        </div>
        
       
    </div>
    
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> 
<script src="rider_order.js"></script>
</body>
</html>