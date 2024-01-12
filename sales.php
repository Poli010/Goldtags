<?php
require_once("connection.php");
$sql = "SELECT * FROM complete_transaction";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Orders</title>
    <link rel="stylesheet" href="sales.css">
</head>
<body>
    <header>
        <h1>ORDER LIST</h1>
            <nav> 
                <li><a href="adminpage.php">Product list </a></li>
                <li><a href="usersAccount.php">Account list</a></li>
                <li><a href="adminproductadd.php">Add Product</a></li>
                <li><a href="orders.php">Orders</a></li>
                <li><a href="sales.php">Sales</a></li>
                <li><a href="#" id="logoutBtn">LOGOUT</a></li>
            </nav>
    </header>
    <div class="scroll">
        <table>
            <tr>
                <th>Buyer Name:</th>
                <th>Contact Number:</th>
                <th>Address:</th>
                <th>Product Name:</th>
                <th>Quantity</th>
                <th>Product Size</th>
                <th>Image:</th>
                <th>Item_UID:</th>
                <th>Total Price:</th>
                <th>Proof of Transaction:</th>
                <th>Rider:</th>
                
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['buyer_name'] ?></td>
                <td><?php echo $row['contact_number'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['product_name'] ?></td>
                <td><?php echo $row['quantity'] ?></td>
                <td><?php echo $row['product_size'] ?></td>
                <td><img src="img/<?php echo $row['image'] ?>" height="100" width="100"></td>
                <td><?php echo $row['item_uid'] ?></td>
                <td><?php echo $row['total_price'] ?></td>
                <td><img src="proof_transaction/<?php echo $row['proof']; ?>" height="100" width="100"> </td>
                <td><?php echo $row['rider'] ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
    
    
</body>
<script src="logout.js"></script>
</html>