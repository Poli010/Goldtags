<?php
require_once("connection.php");
$email = $_GET['email'];
$sql = "SELECT * FROM customer_pending WHERE email = '$email'";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Delivery</title>
    <link rel="stylesheet" href="pending_orders.css">
</head>
<body>
    <header>
        <h1>FOR DELIVERY</h1>
    </header>
    <div class="scroll">
        <table>
            <tr>
                <th>Product Name:</th>
                <th>Product Size:</th>
                <th>Quantity:</th>
                <th>Orders:</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['product_size'] ?></td>
                <td><?php echo $row['quantity'] ?></td>
                <td class="link"><a href="orders_pending.php?id=<?php echo $row['id'] ?>&product_name=<?php echo $row['name'] ?>&product_price=<?php echo $row['product_price']?>&quantity=<?php echo $row['quantity']?>&product_size=<?php echo $row['product_size']?>&image=<?php echo $row['image'] ?>&email=<?php echo $row['email'] ?>&product_id=<?php echo $row['product_id'] ?>&cancel_button_hide=<?php echo $row['cancel_button_hide'] ?>">View Orders</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
    
    
</body>
</html>