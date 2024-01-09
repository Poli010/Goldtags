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

if ($_FILES['profilePictureInput']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['profilePictureInput']['tmp_name'];
    $fileName = $_FILES['profilePictureInput']['name'];
    
    // To prevent SQL injection, use prepared statements
    $stmt = $connection->prepare("UPDATE accounts SET profile_image = ? WHERE email = ?");
    $stmt->bind_param("ss", $fileName, $loggedInEmail);
    
    if ($stmt->execute()) {
        $uploadDirectory = 'profile_image/';
        $destPath = $uploadDirectory . $fileName;

        if (move_uploaded_file($fileTmpPath, $destPath)) {
            echo "   
            <script>
              alert('Successfully Added');
              window.location.replace(document.referrer);
            </script>
            ";;
        } else {
            echo "Error moving file.";
        }
    } else {
        echo "Error updating database.";
    }
} else {
    echo "File upload error.";
}

$stmt->close();
mysqli_close($connection);
?>
