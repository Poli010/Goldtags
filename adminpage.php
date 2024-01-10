<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="adminpage.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>
    <header>
        <h1>PRODUCT LIST</h1>
            <nav> 
                <li><a href="adminpage.php">Product list </a></li>
                <li><a href="usersAccount.php">Account list</a></li>
                <li><a href="adminproductadd.php">Add Product</a></li>
                <li><a href="orders.php">Orders</a></li>
                <li><a href="#">Refunds</a></li>
                <li><a href="#" id="logoutBtn">LOGOUT</a></li>
              </nav>
    </header>


    <div class="table-container">
        <table class="table" border="2">
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Description</th>
                <th>Product Type</th>
                <th>Product Quantity</th>
                <th>Product Image</th>
                <th>Delete</th>
                <th>Modify</th>
            </tr>
            <?php
                $rows = mysqli_query($conn, "SELECT * FROM tb_upload ORDER BY id DESC")
            ?>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["product_price"]; ?></td>
                    <td><?php echo $row["product_description"]; ?></td>
                    <td><?php echo $row["product_type"]; ?></td>
                    <td><?php echo $row["product_amount"]; ?></td>
                    <td> <img src="img/<?php echo $row["image"]; ?>" width = 100 height = 100 title="<?php echo $row['image']; ?>"> </td>
                    <td>
                        <form action="delete_product.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                            <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                    <td><a class="btn btn-primary"href="edit_product.php?id=<?php echo $row["id"]; ?>">Edit</a></td>


                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="adminpage.js"></script>
<script src="logout.js"></script>
</body>
</html>