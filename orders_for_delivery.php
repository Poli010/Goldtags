<?php
$id = $_GET['id'];
$name = $_GET['buyer_name'];
$product_price = $_GET['product_price'];
$quantity = $_GET['quantity'];
$product_size = $_GET['size'];
$address = $_GET['address'];
$contact_number = $_GET['contact_number'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Order</title>
    <link rel="stylesheet" href="orders_for_delivery.css">
    <script src="https://kit.fontawesome.com/355342439a.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <h1>Order For Delivery <i class="fa-solid fa-bag-shopping"></i></h1>
            
            <div class="item">
                <p>Buyer Name:</p><br>
                <p>Contact Number: 0<?php echo $contact_number ?></p><br>
                <p>Address: <?php echo $address ?></p><br>
                <p>Product Name: <span><?php echo $name ?></span></p><br>
                <p>Product Price: <span><i class="fa-solid fa-peso-sign"></i><?php echo $product_price ?></span></p><br>
                <p>Quantity: <span><?php echo $quantity ?></span></p><br>
                <p>Size: <span><?php echo $product_size ?></span></p><br> 
                <input type="hidden" id="id" value="<?php echo $id ?>">  
                <label for="">Select Rider:</label>
                <select name="" id="" class="rider">
                <option value=""></option>
                    <?php
                        require_once("connection.php");
                        $sql = "SELECT firstName, lastName, email FROM accounts WHERE account_type = 'rider'";
                        $result = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_assoc($result)){
                        
                    ?>
                    
                    <option value=" <?php echo $row['email'] ?>"><?php echo $row['firstName'] ?> <?php echo $row['lastName'] ?></option>
                    <?php
                        }
                    ?>
                </select>

                <!-- SEND EMAIL TO RIDER -->
                <form action="send_email.php" method="post">
                    <input type="hidden" id="emailInput" name="email1" value="" readonly>

                    <input type="hidden" name="greet" value="Hi!">
                    <input type="hidden" id="nameInput" name="name1" value="" readonly>
                    <input type="hidden" name="greet1" value="You have new parcel to deliver!">
                    

                    <input type="hidden" name="greet2" value="Here is the Customer and parcel Information:">
                    <input type="hidden" id="buyer_name1" name="buyer_name1" value="Name:" readonly>
                    <input type="hidden" id="contact_number1" name="contact_number1" value="Contact Number: <?php echo $contact_number ?>" readonly>
                    <input type="hidden" id="address1" name="address1" value="Address: <?php echo $address ?> <?php echo $baranggay ?> <?php echo $city ?> <?php echo $province ?> <?php echo $zip_code ?>" readonly>
                    <input type="hidden" id="product_name1" name="product_name1" value="Product Name: <?php echo $name ?>" readonly>
                    <input type="hidden" id="product_price1" name="product_price1" value="Product Price: <?php echo $product_price ?>" readonly>
                    <input type="hidden" id="quantity1" name="quantity1" value="Quantity: <?php echo $quantity ?>" readonly>
                    <input type="hidden" id="size1" name="size1" value="Product Size: <?php echo $product_size ?>" readonly>
                    <input type="submit" id="submit" name="send" value="send">
                </form>


                <!--- SEND INFORMATION TO RIDER PAGE--->
                
                <input type="hidden" id="id" value="<?php echo $id ?>">
                <input type="hidden" id="buyer_name" name="buyer_name" value="asd" readonly>
                <input type="hidden" id="contact_number" name="contact_number" value="<?php echo $contact_number ?>" readonly>
                <input type="hidden" id="address" name="address" value="<?php echo $address ?> <?php echo $baranggay ?> <?php echo $city ?> <?php echo $province ?> <?php echo $zip_code ?>" readonly>
                <input type="hidden" id="product_name" name="product_name" value="<?php echo $name ?>" readonly>
                <input type="hidden" id="product_price" name="product_price" value="<?php echo $product_price ?>" readonly>
                <input type="hidden" id="quantity" name="quantity" value="<?php echo $quantity ?>" readonly>
                <input type="hidden" id="product_size" name="product_size" value="<?php echo $product_size ?>" readonly>
                <input type="hidden" id="rider_name" name="rider" value="" readonly>

            </div>
        </div>
        <div class="buttons">
            <button class="deliver" onclick="deliver()">Deliver</button>
            <button class="cancel" id="cancel" onclick="cancel()">Cancel Order</button>
        </div>
        
       
    </div>
    
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> 
<script src="customer_order.js"></script>
</body>
</html>