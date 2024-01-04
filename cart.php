<?php 
require_once("connection.php");
$sql = "SELECT * FROM add_to_cart";
$result = mysqli_query($conn,$sql);
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
        while($row = mysqli_fetch_assoc($result))
        {
    ?>
    <div class="cart">
        <img src="<?php echo $row['image'] ?>" alt="" width="400" height = "300" title="">
        <div class="cart_info">
            <p>Product Name: <?php echo $row['name'] ?></p>
            <p>Product Price: <i class="fa-solid fa-peso-sign"></i><?php echo $row['product_price'] ?></p>
            <p>Product Description: <?php echo $row['product_description'] ?></p>
            <p>Quantity: <?php echo $row['quantity'] ?></p>
            <p>Size: <?php echo $row['product_size'] ?></p>
            <a class="buy_now"href="payment.php?id=<?php echo $row['id'] ?>">Buy Now</a>
            <input type="submit" name="submit" id="submit" value="Remove" class="remove">
        </div>
    </div>
    <?php
        }
    ?>
</div>











<script src="https://kit.fontawesome.com/355342439a.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>