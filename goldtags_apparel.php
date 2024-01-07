<?php
session_start();
require_once("connection.php");

$userName = '';
if (isset($_SESSION['userName'])) {
    $userName = $_SESSION['userName'];
}

$sql = "SELECT * FROM tb_upload";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOLD TAG APPAREL</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="goldtags_apparel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/355342439a.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <header>
        <img src="logo1.png" alt="">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="nav-link" id="searchIcon"><i class="fas fa-search"></i></a>
                <div class="search-container" id="searchContainer" style="display: none;">
                 <input type="text" id="searchInput" placeholder="Search...">
                </div>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <?php if (!empty($userName)) : ?>
                        <a class="nav-link" href="profile.php"><?php echo $userName; ?></a>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
        <hr>
    </header>
</div>
<div class="container">
    <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="item1.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="item2.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="item3.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item">
                <img src="item4.jpg" class="d-block w-100" alt="Image">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container" id="container">
<div class="row">
        <?php mysqli_data_seek($result, 0); ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="col-md-3" id="product">
                <div class="card" style="width: 15rem;">
                    <img src="img/<?php echo $row['image']; ?>" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                        <p class="card-text">Price: <i class="fa-solid fa-peso-sign"></i><?php echo $row['product_price']; ?></p>
                        <a href="product_preview.php?product_id=<?php echo $row['product_id']; ?>" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<div class="end">
    <span><hr></span>
    <footer>
    <h3><span>Gold</span>Tags.</h3>
    <p class="members">Members:</p>
        <div class="groups">
            <div class="row1">
                <a href="https://www.facebook.com/jexterjohn.balmaceda.9?mibextid=2JQ9oc">Balmaceda, Jexter John U.</a><br>
                <a href="https://www.facebook.com/harverex.patilano.3?mibextid=2JQ9oc">Patilano, Harverex B.</a><br>
            </div>
            <div class="row2">
                <a href="https://www.facebook.com/killuastrassi?mibextid=LQQJ4d">Quintana, John Rhaven C.</a><br>
                <a href="https://www.facebook.com/JamieMarieCainoy26?mibextid=hIlR13">Cainoy, Jaime Marie</a>
            </div>
            <div class="row3">
                <a href="https://www.facebook.com/profile.php?id=100084792254134&mibextid=ZbWKwL">Quiape, John Vincent C.</a><br>
                <a href="https://www.facebook.com/francis.palmes18?mibextid=2JQ9oc">Palmes, Rey Francis Vic L.</a>
            </div>
        </div>
  
       
        <div class="contact">
            <a href="https://www.facebook.com/GoldTagsApparelStaMaria?mibextid=LQQJ4d"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://l.facebook.com/l.php?u=http%3A%2F%2Fshopee.ph%2Fgoldtagsapparel%3Ffbclid%3DIwAR0jHSJV0rFHH3O79_JdOFwtKzzFCviMz0BJdnrRSbD_akz0aTWZADOHEBI&h=AT2WXVIfbVjnqEqrQRlSBK-dtP809CHdoZ2yHSUAM1hmbzHqWjKg5m0gwQk10BaTy6WvTi3nVtIM2D362Mwkr47PhwW_oi6-WhziifDWFhzlczfSLgiYahcQIDunuqANCrT0Iw"><i class="fa-brands fa-shopify"></i></a>
            <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.tiktok.com%2F%40goldtags_apparel%3F_t%3D8ikCpaWwZnd%26_r%3D1%26fbclid%3DIwAR1Qinp8mb3-g_aLhp9vGvGFsYlBgBdQ9l63pi1C3MayBmUnwRhfTwkSSqs&h=AT2WXVIfbVjnqEqrQRlSBK-dtP809CHdoZ2yHSUAM1hmbzHqWjKg5m0gwQk10BaTy6WvTi3nVtIM2D362Mwkr47PhwW_oi6-WhziifDWFhzlczfSLgiYahcQIDunuqANCrT0Iw"><i class="fa-brands fa-tiktok"></i></a><br>
            <p><i class="fa-regular fa-copyright"></i>Copyright. All rights reserved.</p>
        </div>
       
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="goldtags_apparel.js"></script>
</body>
</html>
