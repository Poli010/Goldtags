<?php
session_start();
require_once("connection.php");

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
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-link" id="bellIcon"><i class="fas fa-bell"></i></a>
                            <div class="notification-popup" id="notificationPopup">
                                <p>You have new notifications!</p>
                            </div>
                        <a class="nav-link active" aria-current="page" href="#">Home</a> 
                        <a class="nav-link" href="#">About</a>
                        <a class="nav-link" href="profile.php">Profile</a>
                    </div>
                </div>
            </div>
        </nav>
        <hr>
    </header>
</div>

    <div class="container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="item1.jpg" class="d-block w-100" alt="Image">
                </div>
                <div class="carousel-item active">
                    <img src="item2.jpg" class="d-block w-100" alt="Image">
                </div>
                <div class="carousel-item active">
                    <img src="item3.jpg" class="d-block w-100" alt="Image">
                </div>
                <div class="carousel-item active">
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
            <?php mysqli_data_seek($result, 0); // Reset the pointer to the beginning of the result set ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <div class="col-md-3" id="product">
                    <div class="card" style="width: 15rem;">
                        <img src="img/<?php echo $row['image']; ?>" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                            <p class="card-text"><?php echo $row['product_description']; ?></p>
                            <p class="card-text">Price: $<?php echo $row['product_price']; ?></p>
                            <p>Product Amount</p>
                            <a href="product_preview.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

            <footer>
        <div class="description">
            <img src="logo1.png" width="150" height="100">
            <p>Pwedeng Company Description</p>
            </div>
                <div class="support">
                <p>Support Us!</p>
                <a href="https://ko-fi.com">
                    <iconify-icon icon="simple-icons:kofi"></iconify-icon>
                </a>
                    <p>Ko-Fi</p>
                </div>

                <div class="contact">
                    <p>Contact Us!</p>
                    <a href="https://facebook.com">
                    <i class="fa-brands fa-facebook"></i>
                    </a>
                    
                    <a href="https://www.twitter.com/">
                    <i class="fa-brands fa-x-twitter"></i>
                    </a>

                    <a href="https://www.discord.gg/">
                    <i class="fa-brands fa-discord"></i>
                    </a>

                    <a href="https://www.instagram.com/">
                    <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>

                
            </footer>

            <script> 
                    const bellIcon = document.getElementById('bellIcon');
                const notificationPopup = document.getElementById('notificationPopup');
                bellIcon.addEventListener('click', function() {                  
                    if (notificationPopup.style.display === 'none' || notificationPopup.style.display === '') {
                        notificationPopup.style.display = 'block';
                    } else {
                        notificationPopup.style.display = 'none';
                    }
                });
            </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>
