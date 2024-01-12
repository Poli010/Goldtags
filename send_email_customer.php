<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\Goldtags\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\Goldtags\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\Goldtags\PHPMailer\src\SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail ->Username = 'jamiemariecainoy86@gmail.com';
    $mail ->Password = 'dqqa khqe smrh vfkz';
    $mail ->SMTPSecure='ssl';
    $mail ->Port='465';

    $mail ->setFrom('jamiemariecainoy86@gmail.com','GOLD TAGS APPAREL');

    $mail->addAddress($_POST["email1"]);
    $mail->isHTML(true);
    $mail->Subject = $_POST["greet"] . ' ' . $_POST["name1"] . "\n" .$_POST['greet1'];
    $mail->Body = $_POST['greet2']. "<br><br>" .$_POST["product_name1"]. '' .$_POST["product_price1"]. "<br><br>" .$_POST["quantity1"]. "<br><br>" .$_POST["size1"]. "<br><br>" .$_POST["total_price1"]. "<br><br>" .$_POST["greet3"];
 


    $mail->send();

    echo "
        <script>
            alert('Success!')
            window.location.replace(document.referrer);
            window.history.go(-2);
        </script>
    ";
}
/* MAKE SURE TO DISABLE THE ANTI VIRUS */
?>