<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="profile.css">
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
                        <a class="nav-link"><i class="fas fa-bell"></i></a>
                            <a class="nav-link" href="goldtags_apparel.php">Home</a>
                            <a class="nav-link" href="#">Pricing</a>
                            <a class="nav-link" href="#">About</a>
                            <a class="nav-link active" aria-current="page" href="#">Profile</a>
                        </div>
                    </div>
                </div>
            </nav>
            <hr>
        </header>
  

        <h4 style="text-align: center; font-size: 24px;">User<h4>
        
            <div class="user_profile">
                <div class="credentials">
                <i class="fas fa-user" style="font-size: 50px; color: white;"></i>
                    <p id="firstName">First Name</p>
                    <p id="lastName">Last Name</p>
                        <div class="email">
                        <p id="email">Email</p>
                        </div>
                </div>

                <div class="address">
                    <h3>Phone Number: </h3><p>09---------</p></br>
                    <h3>Street Name: </h3><p>Sample Street</p></br>
                    <h3>Street Number: </h3><p>Sample Number</p><br>
                    <h3>Block: </h3><p>Sample Block</p></br>
                    <h3>Lot: </h3><p>Sample Lot</p></br>
                    <h3>Baranggay: </h3><p>Sample Baranggay</p></br>
                    <i class="fa-light fa-cart-shopping"></i>
                    <p><a href="cart.php"> Cart </a></p><br>
                    <i class="fa-solid fa-bag-shopping"></i>
                    <p><a href="purchase_record.php">Purchased</a></p><br>
                    <button type="submit" id=change>Edit</button>
                </div>
            </div>
</div>

    <script>
        const editButton = document.getElementById('change');

        editButton.addEventListener('click', () => {
            window.location.href = "profile_edit.php";
        });
    </script>

</body>
</html>