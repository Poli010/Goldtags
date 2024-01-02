<?php
$conn = mysqli_connect('localhost', 'root', '', 'upload');
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tb_upload WHERE id = $id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="edit_product.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Edit Product</h1>
    <form action="update_product.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name"> <br>

        <label for="product_name">Product Type:</label>
        <input type="text" name="product_type" id="product_type"> <br>

        <label for="product_price">Product Price:</label>
        <input type="text" name="product_price" id="product_price"> <br>

        <label for="product_quantity">Product Quantity:</label>
        <input type="text" name="product_quantity" id="product_quantity"><br>

        <label for="product_description">Product Description:</label>
        <input type="text" name="product_description" id="product_description"><br>
        <input type="submit" name="submit" value="Update">
    </form>           
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

<?php mysqli_close($conn); ?>
