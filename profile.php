<?php
session_start();

// Ensure the user is logged in, redirect to login page if not
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "upload";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$loggedInEmail = $_SESSION['email'];

$query = "SELECT * FROM accounts WHERE email = '$loggedInEmail'";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $userName = $row['userName'];
    $email = $row['email'];
    $contactNumber = $row['contact_number'];

} else {
    echo "User data not found.";
}

mysqli_close($connection);
?>
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
                <a href="profile_edit.php" id="change"><button type="button">⚙️Edit</button></a>
                </div>
                <div class="address">
                <h3>First Name:</h3><p id="firstName"><?php echo $firstName; ?></p></br>
                <h3>Last Name: </h3><p id="lastName"><?php echo $lastName; ?></p></br>
                <h3>User Name: </h3><p id="userName"><?php echo $userName; ?></p></br>
                <h3>Email: </h3><p id="email"><?php echo $email; ?></p></br>
                <h3>Phone Number: </h3><p id="contact_no"><?php echo $contactNumber; ?></p><br>
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