<?php
require_once("connection.php");
$email = $_GET['email'];
$sql = "SELECT * FROM complete_transaction WHERE rider= '$email'";
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
        <h1>COMPLETE TRANSACTION</h1>
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
                <td class="link"><a href="successfully_delivered.php?&email=<?php echo $email ?>">View Orders</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
    
    
</body>
<script src="logout.js"></script>
</html>