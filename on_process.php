<?php
require_once("connection.php");
$rider_email = $_GET['rider_email'];
$sql = "SELECT * FROM for_delivery WHERE email = '$rider_email'";
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
        <h1>On Process Delivery</h1>
        
    </header>
    <div class="scroll">
        <table>
            <tr>
                <th>Buyer Name:</th>
                <th>Location:</th>
                <th>Orders:</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                
                <td><?php echo $row['buyer_name'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td class="link"><a href="rider_orders.php?id=<?php echo $row['id'] ?>&buyer_name=<?php echo urlencode($row['buyer_name']) ?>&email=<?php echo $row['email'] ?>&contact_number=<?php echo $row['contact_number'] ?>&address=<?php echo $row['address'] ?>&product_name=<?php echo $row['product_name'] ?>&product_id=<?php echo $row['product_id'] ?>&product_price=<?php echo $row['product_price'] ?>&quantity=<?php echo $row['quantity'] ?>&size=<?php echo $row['size'] ?>&image=<?php echo $row['image'] ?>">View Orders</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
    
    
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> 
<script src="logout.js"></script>
</html>