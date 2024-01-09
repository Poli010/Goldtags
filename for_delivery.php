<?php
require_once("connection.php");
$sql = "SELECT * FROM for_delivery";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Orders</title>
    <link rel="stylesheet" href="orders.css">
</head>
<body>
    <header>
        <h1>For Delivery</h1>
    </header>
    <div class="scroll">
        <table>
            <tr>
                <th>Buyer Name:</th>
                <th>Contact Number:</th>
                <th>Orders:</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['buyer_name'] ?></td>
                <td><?php echo $row['contact_number'] ?></td>
                <td class="link"><a href="orders_for_delivery.php?id=<?php echo $row['id'] ?>&buyer_name=<?php echo urlencode($row['buyer_name']) ?>&contact_number=<?php echo $row['contact_number'] ?>&address=<?php echo $row['address'] ?>&product_name=<?php echo $row['product_name'] ?>&product_price=<?php echo $row['product_price']?>&quantity=<?php echo $row['quantity'] ?>&size=<?php echo $row['size'] ?>">View Orders</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
    
    
</body>
</html>