<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goldtag</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <section>
    <div class="bar">
            <h1>Sign Up</h1>
            <form id="signupForm" method="post" action="submit.php">
                <input type="text" id="firstName" name="firstName" placeholder="First Name">
                <input type="text" id="lastName" name="lastName" placeholder="Last Name">
                <input type="text" id="userName" name="userName" placeholder="Username">
                <input type="email" id="email" name="email" placeholder="Email">
                <input type="password" id="password" name="accountPass" placeholder="Password">
                <button type="submit" id="signup">Sign Up</button>
            </form>
            <p1>Already have an account? <a href="login.php">Login</a></p1>
        </div>
        <p></p>
    </section>
</body>
</html>