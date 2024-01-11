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
$buyer_name = $_GET['buyer_name'];
$time_stamp = $_GET['time_stamp'];
$email = $_GET['email'];
$product_id = $_GET['product_id'];
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
                <img src="img/<?php echo $image ?>" height="190" width="200" alt="">
            </div>
            <div class="item">
                <p>Buyer Name: <?php echo $buyer_name ?></p><br>
                <p>Contact Number: 0<?php echo $contact_number ?></p><br>
                <p>Address: <?php echo $address ?> <?php echo $baranggay ?> <?php echo $city ?>, <?php echo $province ?> <?php echo $zip_code ?></p><br>
                <p>Product Name: <span><?php echo $name ?></span></p><br>
                <p>Product Price: <span><i class="fa-solid fa-peso-sign"></i><?php echo $product_price ?></span></p><br>
                <p>Quantity: <span><?php echo $quantity ?></span></p><br>
                <p>Size: <span><?php echo $product_size ?></span></p><br> 
                <p>Time of Purchased: <?php echo date("F j, Y, g:i A", strtotime($time_stamp)); ?></p> <br>
                <p>TOTAL: <span id="total"></span></p><br>
                <input type="hidden" id="quantity" value="<?php echo $quantity ?>" onchange="updateTotal()">
                <input type="hidden" id="id" value="<?php echo $id ?>">  
                <label for="">Select Rider:</label>
                <select name="" id="" class="rider">
                <option value=""></option>
                    <?php
                        require_once("connection.php");
                        $sql = "SELECT firstName, lastName, email, contact_number FROM accounts WHERE account_type = 'rider'";
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
                    <input type="hidden" id="buyer_name1" name="buyer_name1" value="Name: <?php echo $buyer_name ?>" readonly>
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
                <input type="hidden" id="buyer_name" name="buyer_name" value="<?php echo $buyer_name ?>" readonly>
                <input type="hidden" id="contact_number" name="contact_number" value="<?php echo $contact_number ?>" readonly>
                <input type="hidden" id="address" name="address" value="<?php echo $address ?> <?php echo $baranggay ?> <?php echo $city ?> <?php echo $province ?> <?php echo $zip_code ?>" readonly>
                <input type="hidden" id="product_name" name="product_name" value="<?php echo $name ?>" readonly>
                <input type="hidden" id="product_price" name="product_price" value="<?php echo $product_price ?>" readonly>
                <input type="hidden" id="quantity" name="quantity" value="<?php echo $quantity ?>" readonly>
                <input type="hidden" id="product_size" name="product_size" value="<?php echo $product_size ?>" readonly>
                <input type="hidden" id="rider_name" name="rider" value="" readonly>
                <input type="hidden" id="image" name="image" value = "<?php echo $image ?>">
                <input type="hidden" id="cancel_button_hide" name="cancel_button_hide" value="0">
                <input type="hidden" id="cancel_order" name="cancel_order" value="2">
                <input type="hidden" id="product_id" value="<?php echo $product_id ?>">
                
            </div>
        </div>
        <input type="hidden" id="email" value=<?php echo $email ?>>
        <div class="buttons">
            <button class="deliver" onclick="deliver()">Deliver</button>
            <button class="cancel" id="cancel" onclick="cancel()">Cancel Order</button>
        </div>
        
       
    </div>
    
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> 
<script src="customer_order.js"></script>
</body>
</html>