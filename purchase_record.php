<?php
require_once("connection.php");
$email = $_GET['email'];
$username = $_GET['userName'];
$sql = "SELECT * FROM complete_transaction WHERE email = '$email'";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Orders</title>
    <link rel="stylesheet" href="purchase_record.css">
</head>
<body>
    <header>
        <h1>COMPLETE TRANSACTION</h1>
    </header>
    <div class="scroll">
        <table>
            <tr>
                <th>PRODUCT NAME:</th>
                <th>RATE:</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['product_name'] ?></td>
                <td class="link"><a href="rate.php?&product_id=<?php echo $row['product_id'] ?>&username=<?php echo $username?>">Rate Order</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
    
    
</body>
<script src="logout.js"></script>
</html>