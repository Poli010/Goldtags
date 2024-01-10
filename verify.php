<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "upload";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $enteredCode = $_POST['verification_code'];

       $sql = "SELECT * FROM accounts WHERE verification_code = '$enteredCode'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        $updateSql = "UPDATE accounts SET signup_verification = '$enteredCode' WHERE verification_code = '$enteredCode'";
        if ($conn->query($updateSql) === TRUE) {
           
            $_SESSION['signup_completed'] = true;
            header("Location: login.php");
            exit(); 
        } else {
            echo "<p>Error updating record: " . $conn->error . "</p>";
        }
    } else {
       
        echo "<p>Incorrect verification code. Please try again.</p>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    
    <link rel="stylesheet" href="verify.css">
</head>
<body>
    <section>
        <div class="bar">
            <h1>Email Verification</h1>
            
            <form method="post" action="">
                <label for="verification_code">Enter the verification code received in your email:</label>
                <input type="text" id="verification_code" name="verification_code" required>
                <button type="submit">Verify</button>
            </form>
        </div>
    </section>
</body>
</html>
