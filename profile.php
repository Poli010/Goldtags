<?php
session_start();

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

     
    $profileImage = 'profile_image/' . $row['profile_image']; 
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>My Profile</title>
</head>
<body>
    <div class="container">
       <header>
          <nav class="navbar">
            <a href="goldtags_apparel.php">Back</a>
          </nav>
      </header>
        <h1>My Profile</h1>
        <hr>
        
    <div class="info">
            <img id="profilePicture" src="<?php echo $profileImage; ?>" alt="Profile Picture">
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <div class="file-input-container">
                <input type="file" name="profilePictureInput" id="profilePictureInput">
          </div>    
                <br>
                <label for="profilePictureInput" id="uploadLabel">Choose a file</label>
                <button type="submit">Upload</button>
        </form>
    
          
    </div>
        <div class="address">
            <h3>First Name:</h3><p id="firstName"><?php echo $firstName; ?></p></br>
            <h3>Last Name: </h3><p id="lastName"><?php echo $lastName; ?></p></br>
            <h3>User Name: </h3><p id="userName"><?php echo $userName; ?></p></br>
            <h3>Email: </h3><p id="email"><?php echo $email; ?></p></br>
            <h3>Phone Number: </h3><p id="contact_no"><?php echo $contactNumber; ?></p><br>
            <i class="fa-light fa-cart-shopping"></i>
            <div class="button">
            <a href="profile_edit.php" id="change">Edit</button></a>
                <p><a href="cart.php?username=<?php echo $userName ?>" class="cart">Cart </a></p><br>
                <p><a href="pending_orders.php?email=<?php echo $row['email']?>" class="deliver"> For Delivery </a></p><br>
                <i class="fa-solid fa-bag-shopping"></i>
                <p><a href="purchase_record.php?email=<?php echo $email ?>&userName=<?php echo urlencode($userName) ?>" class="purchase"> Purchased</a></p><br>
                <p><a href="#" id="logoutBtn">LOGOUT</a></p>
            </div>
        </div>
    </div>
    <script src="logout.js"></script>
</body>
</html>
