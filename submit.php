<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "upload";

   
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $accountPass = $_POST['accountPass']; 

   
    $stmt = $conn->prepare("INSERT INTO accounts (firstName, lastName, userName, email, accountPass) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstName, $lastName, $userName, $email, $accountPass); 

   
    if ($stmt->execute()) {
        echo "New record created successfully";
        
        $_SESSION['signup_completed'] = true;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}


if(isset($_SESSION['signup_completed']) && $_SESSION['signup_completed'] === true){
    header("Location: login.php");
    exit();
}
?>
