<?php
    require_once("connection.php");
    $product_id = $_GET['product_id'];
    $username = $_GET['username'];
    $sql = "SELECT * FROM tb_upload WHERE product_id = '$product_id'";
    $result = mysqli_query($conn,$sql);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="product_preview.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="jquery.rateyo.css"/>
    <script src="https://kit.fontawesome.com/355342439a.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <header>
        <img src="logo1.png" alt="">
        <nav class="navbar">
            <a href="goldtags_apparel.php">Back</a>
        </nav>
        <hr>
    </header>
    <?php
        $sql2 ="SELECT firstName, lastName FROM accounts WHERE username = '$username'";
        $result2 = mysqli_query($conn,$sql2);
        foreach($result2 as $row){
        ?>
        <input type="hidden" id="firstName" value="<?php echo $row['firstName'] ?> <?php echo $row['lastName'] ?>">
        <?php
            }
        ?>
    <?php
        while($row = mysqli_fetch_assoc($result))
        {
    ?>
    
    <div class="product">
        <div class="product-image">
            <img src="img/<?php echo $row["image"]; ?>" width = 400 height = 300 title="<?php echo $row['image']; ?>">
        </div>
            <div class="product-info">
                <form id="form" action="add_to_cart.php" method="post">
                    <label for="name">Product Name: <span name="name"><?php echo $row['name'] ?></span></label><br>
                    <input type="hidden" name="image" value="<?php echo $row["image"]; ?>">
                    <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>">   
                    <input type="hidden" name="username" value="<?php echo $username ?>">
                    
                    <label for="product_price">Product Price: <i class="fa-solid fa-peso-sign"></i><span name="product_price"><?php echo $row['product_price'] ?></span></label><br>
                    <input type="hidden" name="product_price" value="<?php echo $row['product_price'] ?>">

                    <label for="product_description">Product Description: <span name="product_description"><?php echo $row['product_description'] ?></span></label><br>
                    <input type="hidden" name="product_description" value="<?php echo $row['product_description'] ?>">

                    <input type="hidden" id="current_quantity" value="<?php echo $row['product_amount'] ?>">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" class="quantity" min="0" oninput="validateQuantity(this)" onkeydown="return isArrowKey(event)" required><br>
                    
                    <div class="product_size">
                        <label for="xsmall" class="size-btn">XS</label>
                        <input type="radio" id="xsmall" class="radio" name="size" value="XS" required>

                        <label for="small" class="size-btn">S</label>
                        <input type="radio" id="small" class="radio" name="size" value="S">
                        
                        <label for="medium" class="size-btn">M</label>
                        <input type="radio" id="medium" class="radio" name="size" value="M">

                        <label for="large" class="size-btn">L</label>
                        <input type="radio" id="large" class="radio" name="size" value="L">
                        
                        <label for="xlarge" class="size-btn">XL</label>
                        <input type="radio" id="xlarge" class="radio" name="size" value="XL">
                    </div>

                    <button class="buy_now" onclick="buynow('<?php echo $row['product_id']; ?>','<?php echo urlencode($row['name']); ?>','<?php echo $row['product_price']; ?>','<?php echo urlencode($row['image']) ?>')">Buy Now</button>
                    <input type="submit" name="submit" id="submit" value="Add to Cart" class="add_to_cart">
                </form>
            </div>
            <?php
                }
            ?>
            
            
    </div>

    <div class="review">
        <form action="review.php" method="post" enctype="multipart/form-data">
            <h1>Review</h1>
            <div class="rate">
                <p>Rate:</p>
                <div id="rateYo"></div>
                <input type="hidden" name="rating" id="rating">
            </div>  
            <label for="image">Upload Image:</label><br>
            <input type="hidden" name="username" value = "<?php echo $username ?>">
            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value="" required><br>
            <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
            <label for="comments">Comments:</label><br>
            <textarea name="comments" class="comments" id="" cols="30" rows="10" placeholder="Enter your comment here." required></textarea><br>
            <input type="submit" name="submit" value="Comment" class="btn-comment">
        </form>
    </div>

    <div class="feedback">
        <?php
            $sql = "SELECT * FROM review WHERE product_id ='$product_id'";
            $result = mysqli_query($conn, $sql);
            foreach($result as $row){
        ?>
        <div class="accounts">
            <label for="star"><?php echo $row['username'] ?></label>
            <div class="rateYo" data-rating="<?php echo $row['rating'] ?>" name="star"></div>
        </div>
        <div class="comments-images">
            <input type="hidden" id="stars" value="<?php echo $row['rating'] ?>">
            <img src="review_image/<?php echo $row['image'] ?>" title="<?php echo $row['image'] ?>" width="100" height="100"><br>
            <textarea name="" id="" cols="30" rows="10" readonly><?php echo $row['comments'] ?></textarea>
        </div>
        <?php
            }
        ?>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script src="product_preview.js"></script>
</body>
</html>