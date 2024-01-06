<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminproductadd.css">
    <title>Add Product</title>
</head>
<body>

            <nav> 
                <li><a href="adminpage.php">Product list </a></li>
                <li><a href="usersAccount.php">Account list</a></li>
                <li><a href="adminproductadd.php">Add Product</a></li>
                <li><a href="orders.php">Orders</a></li>
                <li><a href="#">Refunds</a></li>
              
            </nav>
    <div class="center-container">
        <div class="form-container">
            <form class="product-form" action="add_product.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <label for="name">Product Name : </label>
                <input type="text" name="name" id="name" required value="" required> <br>

                <label for="name">Product Type : </label>
                <input type="text" name="product_type" id="product_type" required value="" required> <br>

                <label for="name">Product Price : </label>
                <input type="number" name="product_price" class="productPrice" id="product_price" required> <br>

                <label for="name">Product Description : </label>
                <input type="text" name="product_description" class="productDescription" id="product_description" required><br>

                <label for="name">Product Quantity : </label>
                <input type="number" name="product_amount" class="productAmount" id="product_amount" required><br>

                <label for="image">Image : </label>
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value="" required> <br> <br>

                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>


    
</body>    
</html>