<?php 
require_once("connection.php");
$userName = $_GET['username'];
$sql = "SELECT * FROM add_to_cart WHERE username = '$userName'";
$result = mysqli_query($conn, $sql);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <header>
        <img src="logo1.png" alt="">
        <a href="goldtags_apparel.php">Back</a>
        <hr>    
    </header>
    <h1>Your Cart <i class="fa-solid fa-cart-shopping"></i></h1>
    <?php
        foreach($result as $row){
    ?>
    <div class="cart">
            <img src="img/<?php echo $row['image'] ?>" alt="" width="400" height = "300" title="">
            <div class="cart_info">
                <input type="hidden" name="product_id" id="product_id" value="<?php echo $row['product_id'] ?>">
                <p>Product Name: <?php echo $row['name'] ?></p>
                <p>Product Price: <i class="fa-solid fa-peso-sign"></i><?php echo $row['product_amount'] ?></p>
                <p>Product Description: <?php echo $row['product_description'] ?></p>
                <p>Quantity: <?php echo $row['quantity'] ?></p>
                <p>Size: <?php echo $row['product_size'] ?></p>
            <a class="buy_now"href="payment.php?product_id=<?php echo $row['product_id'] ?>&name=<?php echo $row['name'] ?>&product_price=<?php echo $row['product_amount'] ?>&quantity=<?php echo $row['quantity'] ?> &size=<?php echo $row['product_size'] ?>&contact_number=<?php echo $row['contact_number'] ?>&image=<?php echo $row['image'] ?>&buyer_name=<?php echo $row['buyer_name'] ?>&email=<?php echo $row['email'] ?>&cancel_button_hide=<?php echo $row['cancel_button_hide'] ?>&total_price=<?php echo $row['total_price'] ?>">Buy Now</a>
                <input type="hidden" name="product_size" id="product_size" value="<?php echo $row['product_size'] ?>">
                <button class="remove" data-productid="<?php echo $row['product_id']; ?>" onclick="remove(this)">Remove</button>
            </div>
    </div>
    <?php
        }
    ?>
</div>










<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://kit.fontawesome.com/355342439a.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="cart.js"></script>
</body>
</html>