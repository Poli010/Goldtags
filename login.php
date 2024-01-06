<?php
    include ('login_server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goldtag</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section class="form">
    <form id="loginForm" method="post">
            <h1>LOGIN</h1>
            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Email"> 
                <div id="email_error" class="error"></div>
                <input type="password" id="password" name="accountPass" placeholder="Password"> 
                <div id="pass_error" class="error"></div> 
            </div>
            <button type="submit">Login</button>
            <p1><a href="admin.php">Login as Administrator</a></p1>
            <p2>No account? <a href="signup.php">Signup</a></p2>
    </form>
    </section>
    <script src="login.js"></script> 
</body> 
</html>