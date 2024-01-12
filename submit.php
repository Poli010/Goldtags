<?php
// Adjust the path based on your project structure
require 'C:\xampp\htdocs\Goldtags\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\Goldtags\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\Goldtags\PHPMailer\src\SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
    $contact_no = $_POST['contact_number'];
    $accountPass = $_POST['accountPass']; 

    $checkEmailStmt = $conn->prepare("SELECT email FROM accounts WHERE email = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailStmt->store_result();

    if ($checkEmailStmt->num_rows > 0) {
        echo "Error: Email already exists";
        $checkEmailStmt->close();
        $conn->close();
        exit();
    }

    $checkEmailStmt->close();

   
    $verificationCode = mt_rand(100000, 999999);

    $stmt = $conn->prepare("INSERT INTO accounts (firstName, lastName, userName, email, contact_number, accountPass, verification_code) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $firstName, $lastName, $userName, $email, $contact_no, $accountPass, $verificationCode); 

    if ($stmt->execute()) {
       
        $mail = new PHPMailer(true);

        try {
          
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; 
            $mail->SMTPAuth   = true;
            $mail->Username   = 'jamiemariecainoy86@gmail.com'; 
            $mail->Password   = 'dqqa khqe smrh vfkz'; 
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

           
            $mail->setFrom('jamiemariecainoy86@gmail.com', 'GOLD TAGS APPAREL');
            $mail->addAddress($email, $firstName . ' ' . $lastName); 

           
            $mail->isHTML(true);
            $mail->Subject = 'Email Verification';
            $mail->Body    = 'Your verification code is: ' . $verificationCode;

            $mail->send();

           
            $_SESSION['signup_email'] = $email;
            $_SESSION['signup_verification_code'] = $verificationCode;

            echo 'Verification email sent. Check your email to complete the signup.';
            header("Location: verify.php"); 
            exit();
        } catch (Exception $e) {
            echo "Error sending email: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

if (isset($_SESSION['signup_completed']) && $_SESSION['signup_completed'] === true) {
    header("Location: login.php");
    exit();
}
?>
