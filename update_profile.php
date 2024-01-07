<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "upload";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $contactNumber = $_POST['contact_number'];

   
    $firstName = mysqli_real_escape_string($connection, $firstName);
    $lastName = mysqli_real_escape_string($connection, $lastName);
    $userName = mysqli_real_escape_string($connection, $userName);
    $contactNumber = mysqli_real_escape_string($connection, $contactNumber);

    $loggedInEmail = $_SESSION['email'];


    echo "Received Data: <br>";
    echo "First Name: " . $firstName . "<br>";
    echo "Last Name: " . $lastName . "<br>";
    echo "User Name: " . $userName . "<br>";
    echo "Contact Number: " . $contactNumber . "<br>";

    echo "Email: " . $loggedInEmail . "<br>"; 

    $query = "UPDATE accounts SET firstName = '$firstName', lastName = '$lastName', userName = '$userName', contact_number = '$contactNumber' WHERE email = '$loggedInEmail'";
    
 
    if (mysqli_query($connection, $query)) {
      
        echo "Profile updated successfully!";
    } else {
   
        echo "Error updating profile: " . mysqli_error($connection);
    }
} else {
    echo "Invalid request method!";
}


mysqli_close($connection);
?>
