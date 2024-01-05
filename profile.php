<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>My Profile</title>
</head>
<body>
        <div class="container">
                <h1>My Profile</h1>
                    <hr>
                <div class="info">
                <img id="profilePicture" src="none.png" alt="Profile Picture">
                <input type="file" id="profilePictureInput">
                <label for="profilePictureInput" id="uploadLabel"></label>
                <button type="submit" id=change>⚙️Edit</button>
                </div>
                <div class="address">
                    <h3>Phone Number:</h3><p id="phoneNumber"></p></br>
                    <h3>Street Name: </h3><p id="streetName"></p></br>
                    <h3>Street Number: </h3><p id="streetNum"></p><br>
                    <h3>Block: </h3><p id="block"></p></br>
                    <h3>Lot: </h3><p id="lot"></p></br>
                    <h3>Baranggay: </h3><p id="baranggay"></p></br>
                    <h3>City: </h3><p id="city"></p></br>
                    <i class="fa-light fa-cart-shopping"></i>
                <div class="button">
                    <p><a href="cart.php" class="cart">🛒Cart </a></p><br>
                    <i class="fa-solid fa-bag-shopping"></i>
                    <p><a href="purchase_record.php" class="purchase">✓ Purchased</a></p><br>
                 </div>
        
                </div>
        </div>
</body>
</html>